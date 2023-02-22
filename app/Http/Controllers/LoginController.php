<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $remember = $request->has('remember') ? true : false;
        // dd($remember);

        if( Auth::attempt($credential, $remember) && Auth::user()->role === 'admin') {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }elseif(Auth::attempt($credential, $remember) && Auth::user()->role === 'user') {
            $request->session()->regenerate();

            return redirect()->intended('/beranda');
        }elseif(Auth::attempt($credential, $remember) && Auth::user()->role === 'superAdmin') {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }else{
            return redirect('/')->with('loginError', 'Login Failed!');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
