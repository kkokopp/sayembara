<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Post;

class BerandaController extends Controller
{
    //

    public function index()
    {
        // $f = Favorite::where('user_id', auth()->user()->id)->latest()->get();
        // dd($f);
        return view('user.beranda',[
            'title' => "Beranda",
            'favorites' => Favorite::where('user_id', auth()->user()->id)->latest()->get(),
            'diterima' => Daftar::where([
                ['user_id', auth()->user()->id],
                ['status', 'Diterima']
            ])->paginate(9),
            'daftar' => Daftar::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }
}
