<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Post;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //
    public function tambah(Request $request, Post $post)
    {
        // dd($request);
        $data = $request->validate([
            'foto_ktp' => 'image|file|max:1024'
        ]);

        $daftar = Daftar::get_daftar($request->user_id, $request->workshop_id);

        // dd($daftar);

        if($daftar == NULL){
            if($request->file('foto_ktp')){
                $data['kartu_identitas'] = $request->file('foto_ktp')->store('kartu-identitas-image');
            }
    
            $data['user_id'] = $request->user_id;
            $data['author_id'] = $request->author_id;
            $data['workshop_id'] = $request->workshop_id;
            $data['alamat'] = $request->alamat;
            $data['nomor_hp'] = $request->nomor;
            $data['status'] = 'On Review';
    
            Daftar::create($data);
    
            return back()->with('pesan', 'Anda Berhasil Mendaftar!');
        }else{
            return back()->with('pesan', 'Anda Sudah Mendaftar Workshop Ini!');
        }

    }
}
