<?php

namespace App\Http\Controllers\Sppd;

use Carbon\Carbon;
use App\Models\{Spt, User, Pejabat, SptUser, Locations, KodeRekening, Transports};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class SptController extends Controller
{
    public function index()
    {
        $this->authorize('read sppd');
        if (Auth::user()->nip == 'admin' || Auth::user()->nip == 'sekwan') {
            $spts = Spt::get();
        } else {
            $spts = Spt::whereHas('spt_user', function($q){
                $q->where('users_id', Auth::user()->id);
            })->get();
        }
        return view('spt.index', compact('spts'));
    }

    public function create()
    {
        $this->authorize('create sppd');
        return view('spt.create', [
            'users' => User::get(),
            'locations' => Locations::get(),
            'transports' => Transports::get(),
            'kode_rekenings' => KodeRekening::get(),
            'pejabats' => Pejabat::get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('create sppd');
        $validatedData = $request->validate([
            'tujuan' => ['required', 'max:50', 'string'],
            'tgl_pergi' => ['required', 'date'],
            'tgl_pulang' => ['required', 'date'],
            'pejabat_id' => ['required'],
            'kode_rekenings_id' => ['required'],
            'nomor' => ['nullable'],
        ]);
        $spt = Spt::create($validatedData);
        $spt->user()->attach($request->user);
        $spt->location()->attach($request->location);
        $spt->transport()->attach($request->transports);
        return redirect()->route('spt.index')->withSuccess('Berhasil');
    }

    public function show(Spt $spt)
    {
        $spt_user = SptUser::with(['user'])->get();

        $time_datang = Carbon::parse($spt->tgl_pergi)->locale('id');
        $time_datang->settings(['formatFunction' => 'translatedFormat']);
        //Pulang
        $time_pulang = Carbon::parse($spt->tgl_pulang)->locale('id');
        $time_pulang->settings(['formatFunction' => 'translatedFormat']);

        $day = $time_datang->format('l') .' s/d ' . $time_pulang->format('l'); // Selasa, 16 Maret 2021 ; 08:27 pagi

        // return view('spt.show', [
        //     'spts' => $spt,
        //     'spt_user' => $spt_user,
        //     'day' => $day
        // ]);

        $pdf = Pdf::loadView('spt.show', [
            'spts' => $spt,
            'spt_user' => $spt_user,
            'day' => $day
        ]);
        return $pdf->download('surat tugas.pdf');
    }

    public function edit(Spt $spt)
    {
        $this->authorize('update sppd');
        return view('spt.edit', [
            'spt' => $spt,
            'users' => User::get(),
            'locations' => Locations::get(),
            'transports' => Transports::get(),
            'pejabats' => Pejabat::get(),
            'kode_rekenings' => KodeRekening::get(),
        ]);
    }

    public function update(Request $request, Spt $spt)
    {
        $this->authorize('update sppd');
        $validatedData = $request->validate([
            'tujuan' => ['required', 'max:50', 'string'],
            'tgl_pergi' => ['required', 'date'],
            'tgl_pulang' => ['required', 'date'],
            'pejabat_id' => ['required'],
            'kode_rekenings_id' => ['required'],
            'nomor' => ['nullable'],
        ]);

        $spt->update($validatedData);
        $spt->user()->sync($request->user);
        $spt->location()->sync($request->location);
        $spt->transport()->sync($request->transports);
        return redirect()->route('spt.index')->withSuccess('Berhasil');
    }

    public function destroy(Spt $spt)
    {
        $this->authorize('delete sppd');
        $spt->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }
}
