<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('components.pages.Dashboard', [
            'title' => 'Home'
        ]);
    }

    public function login()
    {
        return view('components.pages.login', [
            'title' => 'Login Please',
        ]);
    }

    public function authanticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard/home');
        }

        return redirect()->back()->with('failed', 'Password / Username Tidak Terdaftar');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
