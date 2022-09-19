<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, Storage};
use App\Http\Requests\Profile\UpdateProfileRequest;

class UpdateProfileController extends Controller
{
    public function create()
    {
        return view('user.profile');
    }

    public function store(UpdateProfileRequest $request)
    {
        if ($image = $request->file('image')) {
            if (auth()->user()->image) {
                Storage::delete(auth()->user()->image);
            }
            $image = $request->file('image')->store('user');
        }

        Auth::user()->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'jenis_kelamin' => $request->jenis_kelamin,
            'image' => $image,
            'pangkat' => $request->pangkat,
            'esselon' => $request->esselon,
            'golongan' => $request->golongan,
        ]);

        return redirect()->route('dashboard')->withSuccess('Profil ' . auth()->user()->name . ' Berhasil Diubah');
    }
}
