<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function prosesregister(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
            'password' => 'required',
            ]);
        DB::table('users')->insert([
            'level' => 'user',
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'remember_token' => Str::random(40),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

            return redirect('/login')->with('status', 'Akun berhasil di buat');
    }
    public function proseslogin(Request $request)
    {
        $credentials= $request->validate([
            'email' => 'required',
            'password' => 'required'
            ]);

        $user = User::where('email', $request->email)->first();
        if (Auth::attempt($credentials) && $user->level == "user") {
            $request->session()->regenerate();

            return redirect()->intended('user/dashboard');

        } elseif (Auth::attempt($credentials) && $user->level == "admin") {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->with('error', 'Login Failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('login')->with('error', 'Anda telah logout');
    }
}