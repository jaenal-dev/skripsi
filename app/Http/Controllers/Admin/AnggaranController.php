<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggaran;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index()
    {
        $this->authorize('read role');
        return view('anggaran.index', [
            'anggarans' => Anggaran::get()
        ]);
    }

    public function create()
    {
        $this->authorize('create role');
        return view('anggaran.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create role');
        Anggaran::create($request->all());
        return redirect()->route('anggaran.index')->withSuccess('Berhasil Tambah');
    }

    public function edit(Anggaran $anggaran)
    {
        $this->authorize('update role');
        return view('anggaran.edit', ['anggaran' => $anggaran]);
    }

    public function update(Request $request, Anggaran $anggaran)
    {
        $this->authorize('update role');
        $anggaran->update($request->all());
        return redirect()->route('anggaran.index')->with('Berhasil Ubah');
    }

    public function destroy(Anggaran $anggaran)
    {
        $this->authorize('delete role');
        $anggaran->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }
}
