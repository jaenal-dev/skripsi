<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pejabat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PejabatRequest;

class PejabatController extends Controller
{
    public function index()
    {
        $this->authorize('read role');
        return view('pejabat.index', [
            'pejabats' => Pejabat::get()
        ]);
    }

    public function create()
    {
        $this->authorize('create role');
        return view('pejabat.create');
    }

    public function store(PejabatRequest $request)
    {
        $this->authorize('create role');
        Pejabat::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
        ]);
        return redirect()->route('pejabat.index')->withSuccess('Berhasil Menambah Pejabat');
    }

    public function edit(Pejabat $pejabat)
    {
        $this->authorize('update role');
        return view('pejabat.edit', ['pejabat' => $pejabat]);
    }

    public function update(PejabatRequest $request, Pejabat $pejabat)
    {
        $this->authorize('update role');
        $pejabat->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
        ]);
        return redirect()->route('pejabat.index')->withSuccess('Berhasil Ubah Pejabat');
    }

    public function destroy(Pejabat $pejabat)
    {
        $this->authorize('delete role');
        $pejabat->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }
}
