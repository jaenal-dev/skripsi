<?php

namespace App\Http\Controllers\Sppd;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\{Spt, Sppd, User, SptUser};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SppdController extends Controller
{
    public function index(User $user)
    {
        $this->authorize('read sppd');
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('sekwan')){
            $sppds = Sppd::get();
        } else {
            $sppds = Sppd::whereHas('spt_user', function($q){
                $q->where('users_id', Auth::user()->id);
            })->get();
        }
        return view('sppd.index', [
            'sppds' => Sppd::find($user),
            'sppds' => $sppds
        ]);
    }

    public function create(Spt $spt)
    {
        $this->authorize('create sppd');
        return view('sppd.create', [
            'sppd' => $spt
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('create sppd');
        $request->validate([
            'tempat_berangkat' => ['required', 'string', 'max:50'],
            'instansi' => ['required', 'string', 'max:50'],
            'mata_anggaran' => ['required', 'string', 'max:50'],
            'keterangan' => ['required', 'string', 'max:50'],
        ]);

        Sppd::create([
            'tempat_berangkat' => $request->tempat_berangkat,
            'instansi' => $request->instansi,
            'mata_anggaran' => $request->mata_anggaran,
            'keterangan' => $request->keterangan,
            'nomor' => $request->nomor,
            'spt_id' => $request->spt_id,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('sppd.index')->withSuccess('Berhasil Menambah SPPD');
    }

    public function show(Sppd $sppd)
    {
        // Pergi
        $time_datang = Carbon::parse($sppd->tgl_pergi)->locale('id');
        $time_datang->settings(['formatFunction' => 'translatedFormat']);
        //Pulang
        $time_pulang = Carbon::parse($sppd->tgl_pulang)->locale('id');
        $time_pulang->settings(['formatFunction' => 'translatedFormat']);

        $day = $time_datang->format('l') .' s/d ' . $time_pulang->format('l'); // Selasa, 16 Maret 2021 ; 08:27 pagi

        $pdf = Pdf::loadView('sppd.print', [
            'sppd' => $sppd,
            'sppds' => SptUser::with(['user'])->get(),
            'day' => $day
        ]);
        return $pdf->stream('nota dinas.pdf');
    }

    public function edit(Sppd $sppd)
    {
        $this->authorize('update sppd');
        return view('sppd.edit', ['sppd' => $sppd]);
    }

    public function update(Request $request, Sppd $sppd)
    {
        $this->authorize('update sppd');
        $request->validate([
            'tempat_berangkat' => ['required', 'string', 'max:50'],
            'instansi' => ['required', 'string', 'max:50'],
            'mata_anggaran' => ['required', 'string', 'max:50'],
            'keterangan' => ['required', 'string', 'max:50'],
        ]);

        $sppd->update([
            'tempat_berangkat' => $request->tempat_berangkat,
            'instansi' => $request->instansi,
            'mata_anggaran' => $request->mata_anggaran,
            'keterangan' => $request->keterangan,
            'nomor' => $request->nomor,
            'spt_id' => $request->spt_id,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('sppd.index')->withSuccess('Berhasil Ubah SPPD');
    }

    public function destroy(Sppd $sppd)
    {
        $this->authorize('delete sppd');
        $sppd->delete();
        return response()->json([
            'status' => 'success',
            'Message' => 'Berhasil Hapus'
        ]);
    }
}
