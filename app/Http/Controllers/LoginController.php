<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // dd('dawdiaw');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        // return back()->withInput(['status' => 'Terjadi Kesalahan', 'title' => 'Data Admin', 'type' => 'error']);
        // return redirect('/login')->withInput()->withErrors([
        //     'username' => 'The provided credentials do not match our records.',
        // ])->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Admin', 'type' => 'error']);
        return redirect('/login')->withErrors([
            'username' => 'The provided credentials do not match our records.',
            'password' => 'dnawidnawnlid'
        ])->withInput()->with([
            'status' => 'Username atau password salah',
            'title' => 'Login Admin',
            'type' => 'error'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
