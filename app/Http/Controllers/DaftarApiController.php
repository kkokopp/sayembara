<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class DaftarApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validatedData = Validator::make($request->all(), [
            'foto_ktp' => 'image|file|max:1024',
            'user_id' => 'required',
            'author_id' => 'required',
            'workshop_id' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required|numeric|digits:12',
        ]);

        $daftar = Daftar::get_daftar($request->user_id, $request->workshop_id);

        if($validatedData->fails()){
            return response($validatedData->errors(), 400);
        }else{
            if($daftar == NULL){
                if($request->file('foto_ktp')){
                    $data['kartu_identitas'] = $request->file('foto_ktp')->store('kartu-identitas-image');
                }
        
                $data['user_id'] = $request->user_id;
                $data['author_id'] = $request->author_id;
                $data['workshop_id'] = $request->workshop_id;
                $data['alamat'] = $request->alamat;
                $data['nomor_hp'] = $request->nomor_hp;
                $data['status'] = 'On Review';
        
                Daftar::create($data);
        
                return response()->json([
                    "message" => "Pendaftaran Anda telah dibuat!"
                ], 201);
            }else{
                return response()->json([
                    "message" => "Anda Telah Mendaftar Workshop Ini!"
                ], 400);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
