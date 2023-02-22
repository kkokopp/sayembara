<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function edit(Request $request){
        
        $user = Auth::user();
        // $current_user = auth()->user()->id;
        return view('user.profile', [
            'title' => 'Profile',
            'user' => $user
        ]);
    }

    public function updateRole(Request $request, User $user)
    {
        $data = $request->role;

        // dd($validatedData);

        User::where('id', $user->id)
        ->update(['role' => $data]);

        return redirect('/dashboard');
    }
}
