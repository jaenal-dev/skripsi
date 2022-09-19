<?php

namespace App\Http\Controllers\Admin;

use App\Models\Locations;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index()
    {
        $this->authorize('read role');
        return view('location.index',['locations' => Locations::get()]);
    }

    public function create()
    {
        $this->authorize('create role');
        return view('location.create');
    }

    public function store(Request $request, Locations $locations)
    {
        $this->authorize('create role');
        $data = $request->validate([
            'name' => ['required', 'string', 'unique:locations']
        ]);

        Locations::create($data);
        return redirect()->route('location.index')->withSuccess('Berhasil Tambah Data Kota');
    }

    public function edit(Locations $location)
    {
        $this->authorize('update role');
        return view('location.edit', ['location' => $location]);
    }

    public function update(Request $request, Locations $location)
    {
        $this->authorize('update role');
        $data = $request->validate([
            'name' => ['required', 'string', Rule::unique('locations')->ignore($location->id)]
        ]);

        $location->update($data);
        return redirect()->route('location.index')->withSuccess('Berhasil Ubah Lokasi');
    }

    public function destroy(Locations $location)
    {
        $this->authorize('delete role');
        $location->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }
}
