<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login', [
            "title" => "Login Admin",
            "description" => "Halaman Login untuk admin",
            "keywords" => "login"
        ]);
    }

    public function prosesLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib di Isi',
            'email.email' => 'Email tTidak Valid',
            'password.required' => 'Password Wajib di Isi',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin/dashboard');
        } else {
            return back()->withErrors(['error' => 'Email atau Password Salah!']);
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }
}