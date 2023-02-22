<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateInvoiceRequest;

class InvoiceController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        // return $request->file('foto_ktp')->store('foto_ktp');
        $validateData = $request->validate([
            'foto_ktp' => 'image|file|max:1024',
            'bukti_pembayaran' => 'image|file|max:1024'
        ]);

        if($request->file('foto_ktp') and $request->file('bukti_pembayaran')){
            $validateData['foto_ktp'] = $request->file('foto_ktp')->store('ktp-image');
            $validateData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti-image');
        }

        $validateData['workshop_id'] = $request->workshop_id;
        $validateData['user_id'] = auth()->user()->id;
        // dd($validateData);
        $author_id = Post::author_id($request->workshop_id);
        $validateData['author_id'] = $author_id;
        // dd($validateData);
        // $validateData['author_id']= Post::where('id', $request->workshop_id)->author();

        // dd($validateData['author_id']);


        Invoice::create($validateData);

        return back()->with('success-daftar', 'berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
