<?php

namespace App\Http\Controllers\User;

use App\Models\{Sppd, Report};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $this->authorize('read report');
        if (Auth::user()->nip == 'admin' || Auth::user()->nip == 'sekwan') {
            $reports = Report::get();
        } else {
            $reports = Report::where('user_id', Auth::user()->id)->get();
        }
        return view('report.index', ['reports' => $reports]);
    }

    public function create(Sppd $sppd)
    {
        $this->authorize('create report');
        return view('report.create', ['sppd' => $sppd]);
    }

    public function store(Request $request)
    {
        $this->authorize('create report');
        $request->validate([
            'laporan' => ['required']
        ]);

        Report::create([
            'spt_id' => $request->spt_id,
            'nomor' => $request->nomor,
            'laporan' => $request->laporan,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('report.index')->withSuccess('Berhasil Buat Laporan');
    }

    public function edit(Report $report)
    {
        $this->authorize('update report');
        return view('report.edit', ['report' => $report]);
    }

    public function update(Request $request, Report $report)
    {
        $this->authorize('update report');
        $request->validate([
            'laporan' => ['required']
        ]);

        $report->update([
            'spt_id' => $request->spt_id,
            'nomor' => $request->nomor,
            'laporan' => $request->laporan,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('report.index')->withSuccess('Berhasil Ubah Laporan');
    }

    public function destroy(Report $report)
    {
        $this->authorize('delete report');
        $report->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }

    public function print()
    {
        return view('report.print');
    }
}
