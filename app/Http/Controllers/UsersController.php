<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('users', $data);
    }
    public function create()
    {
        return view('user/create');
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'username' => 'user-' . $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(10),
        ]);
        return redirect()->route('users');
    }

    public function login()
    {
        return view('user/login');
    }

    public function auth_login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Username Harus Diisi',
            'password.required' => 'Password Harus Diisi',
        ]);
        $get = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if (Auth::attempt($get)) {
            return redirect()->intended('users');
        } else {
            return redirect()->back()->withErrors('Username atau Password Tidak Sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data['cari'] = User::find($id);
        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $password = $request->password;
        if (empty($password)) {
            $cari = User::find($id);
            $cari->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        } else {
            $cari = User::find($id);
            $cari->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cari = User::find($id);
        // dd($cari);
        $cari->delete();
        return redirect()->route('users');
    }
}
