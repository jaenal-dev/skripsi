<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Hash, Storage};
use App\Http\Requests\Admin\{StoreUserRequest, UpdateUserRequest};

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('read role');
        return view('user.index', [
            'users' => User::paginate(10)
        ]);
    }

    public function create()
    {
        $this->authorize('create role');
        return view('user.create');
    }

    public function store(StoreUserRequest $request)
    {
        $this->authorize('create role');
        if ($image = $request->file('image') == null) {
            $image = '';
        } else {
            $image = $request->file('image')->store('user');
        }

        $user = User::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'image' => $image,
            'pangkat' => $request->pangkat,
            'esselon' => $request->esselon,
            'golongan' => $request->golongan,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->withSuccess($user->name . ' Berhasil Ditambahkan');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $this->authorize('update role');
        return view('user.edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update role');
        if ($image = $request->file('image')) {
            if (auth()->user()->image) {
                Storage::delete(auth()->user()->image);
            }
            $image = $request->file('image')->store('user');
        }

        $user->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'image' => $image,
            'pangkat' => $request->pangkat,
            'esselon' => $request->esselon,
            'golongan' => $request->golongan,
        ]);

        return redirect()->route('user.index')->withSuccess($user->name . ' Berhasil Diubah');
    }

    public function destroy(User $user)
    {
        $this->authorize('delete role');
        $user->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Hapus'
        ]);
    }
}
