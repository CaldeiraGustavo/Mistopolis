<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin() {
        return view('auth.signin');
    }

    public function signup() {
        return view('auth.signup');
    }

    public function login(Request $request, Guard $guard) {
        try{
            if (!$guard->validate(['username' => $request->username, 'password' => $request->password])) {
                return redirect()->back()->withErrors('Credenciais inválidas, tente novamente.');
            }
        }catch (\Exception $ex) {
            return redirect()->back()->with(['message' => $ex->getMessage()]);
        }
        return redirect()->action('Admin\DashboardController@index');
    }
}
