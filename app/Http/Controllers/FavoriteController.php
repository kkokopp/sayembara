<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Post;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //
    public function index()
    {
        return view('user.beranda', [
            'title' => 'Beranda',
            'favorites' => Favorite::where('user_id', auth()->user()->id)->latest()
        ]);
    }

    public function tambah(Request $request, Post $post)
    {

        $validateData['user_id'] = auth()->user()->id;
        $validateData['workshop_id'] = $post->id;
        $validateData['author_id'] = $post->user_id;

        // dd($validateData);
        $user_id = auth()->user()->id;
        $workshop_id = $validateData['workshop_id'] = $post->id;

        $data = Favorite::check($user_id, $workshop_id);
        // dd($data);

        if($data == NULL){
            Favorite::create($validateData);
            return back()->with('pesan', 'berhasil ditambahkan ke favorite');
        }else{
            return back()->with('pesan', 'Workshop Sudah ada di favorite');
        }
    }

    public function hapus(Request $request, Favorite $favorite)
    {
        Favorite::destroy($favorite->id);

        return back()->with('pesan', 'Workshop Berhasil dihapus dari favorite!');
    }
}
