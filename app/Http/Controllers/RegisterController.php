<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
        ]);


            $validateData['name'] = $request->name;
            $validateData['username'] = $request->username;
            $validateData['email'] = $request->email;
            $validateData['password'] = bcrypt($request->password);
            $validateData['role'] = 'user';

            // $validatedData['password'] = bcrypt($validatedData['password']);
            User::create($validateData);
            session()->flash('success', 'Registration Successfull! Please Login! ');
            return redirect('/login');

        
    }

}
