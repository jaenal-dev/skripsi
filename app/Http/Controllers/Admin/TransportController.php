<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transports;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class TransportController extends Controller
{
    public function index()
    {
        $this->authorize('read role');
        return view('transport.index', [
            'transports' => Transports::paginate(15)
        ]);
    }

    public function create()
    {
        $this->authorize('create role');
        return view('transport.create');
    }

    public function store(Request $request, Transports $transports)
    {
        $this->authorize('create role');
        $data = $request->validate([
            'name' => ['required', 'string', 'unique:transports']
        ]);

        Transports::create($data);
        return redirect()->route('transport.index')->withSuccess('Berhasil Tambah Data Transport');
    }

    public function edit(Transports $transport)
    {
        $this->authorize('update role');
        return view('transport.edit', [
            'transport' => $transport
        ]);
    }

    public function update(Request $request, Transports $transport)
    {
        $this->authorize('update role');
        $data = $request->validate([
            'name' => ['required', 'string', Rule::unique('transports')->ignore($transport->id)]
        ]);

        $transport->update($data);
        return redirect()->route('transport.index')->withSuccess('Berhasil Ubah Transport');
    }

    public function destroy(Transports $transport)
    {
        $this->authorize('delete role');
        $transport->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }
}
