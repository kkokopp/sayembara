<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
// use App\Http\Controllers\Socialite;

class GoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->stateless()->user();
        // dd($user);
    
            $finduser = User::where('google_id', $user->getId())->first();
            if($finduser && $finduser->role == 'admin'){
                Auth::login(($finduser));
                return redirect()->intended('/dashboard');
            }elseif($finduser && $finduser->role == 'user'){
                Auth::login(($finduser));
                return redirect()->intended('/beranda');
            }else{
                $newUser = User::create([
                    'name' => $user->getName(),
                    'username' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(), 
                    'password' => bcrypt('password'),
                    'role' => 'user',
                ]);
                Auth::login($newUser);
                return redirect()->intended('/beranda');
            }
    }
}
