<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        // $user = new User();
        // $user->name = "Admin Kullanıcısı";
        // $user->password= bcrypt(102030);
        // $user->email = "admin@tost.com";
        // $user->type= "admin";
        // $user->save();

        return view('dashboard.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'Email veya password hatalı',
        ])->onlyInput('email');
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
