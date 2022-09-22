<?php

namespace App\Http\Controllers\Sppd;

use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\NppdRequest;
use App\Models\{Spt, Nppd, User, Anggaran, KodeRekening, SptUser};

class NppdController extends Controller
{
    public function index(User $user)
    {
        $this->authorize('read sppd');
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('sekwan')) {
            $nppds = Nppd::get();
        } else {
            $nppds = Nppd::whereHas('spt_user', function($q){
                $q->where('users_id', Auth::user()->id);
            })->get();
        }
        return view('nppd.index', [
            'nppds' => Nppd::find($user),
            'nppds' => $nppds
        ]);
    }

    public function create(Spt $spt)
    {
        $this->authorize('create sppd');
        return view('nppd.create', [
            'spt' => $spt,
            'anggarans' => Anggaran::get(),
            'kode_rekenings' => KodeRekening::get(),
        ]);
    }

    public function store(NppdRequest $request)
    {
        $this->authorize('create sppd');
        Nppd::create([
            'kepada' => $request->kepada,
            'dari' => $request->dari,
            'prihal' => $request->prihal,
            'spt_id' => $request->spt_id,
            'anggaran_id' => $request->anggaran_id
        ]);

        return redirect()->route('nppd.index')->withSuccess('Berhasil');
    }

    public function show(Nppd $nppd)
    {
        // Pergi
        $time_datang = Carbon::parse($nppd->tgl_pergi)->locale('id');
        $time_datang->settings(['formatFunction' => 'translatedFormat']);
        //Pulang
        $time_pulang = Carbon::parse($nppd->tgl_pulang)->locale('id');
        $time_pulang->settings(['formatFunction' => 'translatedFormat']);

        $day = $time_datang->format('l') .' s/d ' . $time_pulang->format('l'); // Selasa, 16 Maret 2021 ; 08:27 pagi

        $pdf = Pdf::loadView('nppd.print', [
            'nppd' => $nppd,
            'nppds' => SptUser::with(['user'])->get(),
            'day' => $day
        ]);
        return $pdf->stream('nota dinas.pdf');
    }

    public function edit(Nppd $nppd)
    {
        $this->authorize('update sppd');
        return view('nppd.edit', [
            'nppd' => $nppd,
            'spts' => Spt::get(),
            'anggarans' => Anggaran::get(),
        ]);
    }

    public function update(NppdRequest $request, Nppd $nppd)
    {
        $this->authorize('update sppd');
        $nppd->update([
            'kepada' => $request->kepada,
            'dari' => $request->dari,
            'prihal' => $request->prihal,
            'anggaran_id' => $request->anggaran_id,
        ]);
        return redirect()->route('nppd.index')->withSuccess('Berhasil');
    }

    public function destroy(Nppd $nppd)
    {
        $this->authorize('delete sppd');
        $nppd->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }

    public function status(Nppd $nppd)
    {
        $this->authorize('create sppd');
        $nppd->update(request()->all());
        return redirect()->back()->withSuccess('Status Berhasil Diubah');
    }
}
