<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdatePasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('user.change_password');
    }

    public function update(UpdatePasswordRequest $request)
    {
        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return redirect()->route('dashboard')->withSuccess('Password Berhasil Diubah');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password yang anda masukan tidak sesuai',
            'password' => 'Password yang anda masukan tidak sesuai'
        ]);
    }
}
