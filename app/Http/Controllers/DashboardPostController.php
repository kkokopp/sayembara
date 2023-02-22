<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Models\Invoice;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('dashboard.posts.index', [
            'title' => 'Daftar Wokrshop',
            'post' => Post::where('user_id', auth()->user()->id)->filter(request(['category']))->paginate(10),
            // 'post' => Post::where('user_id', auth()->user()->id)->filter(request(['search']))->paginate(10)->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Buat Workshop',
            'categories' => Category::all()
        ]);
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
        // dd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'pemateri' => 'required',
            'tanggal' => 'required',
            'tanggal_selesai' => 'required',
            'jam' => 'required',
            'jam_selesai' => 'required',
            'body' => 'required',
            'poster' => 'image|file|max:1024'
        ]);

        if($request->has('terms')){
            $validatedData['terbuka_tidak'] = 'Terbuka untuk umum';
        }else{
            $validatedData['terbuka_tidak'] = 'Tidak terbuka untuk umum';
        }

        if($request->has('sertifikat')){
            $validatedData['sertifikat'] = 'Tersedia sertifikat online';
        }else{
            $validatedData['sertifikat'] = 'Tidak tersedia sertifikat online';
        }

        if($request->has('online')){
            $validatedData['online_offline'] = 'Online';
        }else{
            $validatedData['online_offline'] = 'Offline';
        }

        if($request->has('range')){
            $validatedData['berbayar_tidak'] = 'Berbayar';
        }else{
            $validatedData['berbayar_tidak'] = 'gratis';
        }

        if($request->has('fee')){
            $validatedData['terbatas_tidak'] = 'Terbatas';
        }else{
            $validatedData['terbatas_tidak'] = 'Tidak';
        }

        if($request->file('poster')){
            $validatedData['poster'] = $request->file('poster')->store('poster');
        }

        $validatedData['harga'] = $request->harga;
        $validatedData['jmlh_peserta'] = $request->jmlh;
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));

        Post::create($validatedData);

        // return($request);

        return redirect('/dashboard/posts')->with('succes', 'Post baru sudah terupload');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // dd($post);
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //

        // dd($post);

        if($post->terbuka_tidak === 'Terbuka untuk umum'){
            $post['terms'] = true;
        }else{
            $post['terms'] = false;
        }

        if($post->online_offline === 'Online'){
            $post['online'] = true;
        }else{
            $post['online'] = false;
        }

        if($post->sertifikat === 'Tersedia sertifikat online'){
            $post['sertifikat'] = true;
        }else{
            $post['sertifikat'] = false;
        }

        if($post->berbayar_tidak === 'Berbayar'){
            $post['range'] = true;
        }else{
            $post['range'] = false;
        }

        if($post->terbatas_tidak === 'Terbatas'){
            $post['fee'] = true;
        }else{
            $post['fee'] = false;
        }

        // dd($post);
        return view('dashboard.posts.edit', [
            'title' => 'Edit',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // dd($request);
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'tanggal' => 'required',
            'tanggal_selesai' => 'required',
            'jam' => 'required',
            'jam_selesai' => 'required',
            'poster' => 'image|file|max:1024',
        ];
        
        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        };
        
        
        $validatedData = $request->validate($rules);
        // dd($validatedData);
        
        if($request->has('terms')){
            $validatedData['terbuka_tidak'] = 'Terbuka untuk umum';
        }else{
            $validatedData['terbuka_tidak'] = 'Tidak terbuka untuk umum';
        }
        
        if($request->has('sertifikat')){
            $validatedData['sertifikat'] = 'Tersedia sertifikat online';
        }else{
            $validatedData['sertifikat'] = 'Tidak tersedia sertifikat online';
        }
        
        if($request->has('online')){
            $validatedData['online_offline'] = 'Online';
        }else{
            $validatedData['online_offline'] = 'Offline';
        }
        
        if($request->has('range')){
            $validatedData['berbayar_tidak'] = 'Berbayar';
        }else{
            $validatedData['berbayar_tidak'] = 'gratis';
        }
        
        if($request->has('fee')){
            $validatedData['terbatas_tidak'] = 'Terbatas';
        }else{
            $validatedData['terbatas_tidak'] = 'Tidak';
        }

        if($request->file('poster')){
            $validatedData['poster'] = $request->file('poster')->store('poster');
        }
        
        $validatedData['harga'] = $request->harga;
        $validatedData['jmlh_peserta'] = $request->jmlh;
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));
        
        
        Post::where('id', $post->id)
        ->update($validatedData);
        
        // return($request);

        return redirect('/dashboard/posts')->with('succes', 'Post baru sudah terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        Post::destroy($post->id);

        // return($request);

        return redirect('/dashboard/posts')->with('succes', 'Post telah dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function update_status(Request $request, Post $post)
    {
        if($request->has('status')){
            $validatedData = 'on';
        }else{
            $validatedData = 'off';
        }

        // dd($validatedData);

        Post::where('id', $post->id)
        ->update(['status' => $validatedData]);

        return redirect('/dashboard/posts')->with('succes', 'Post sudah ON');
    }
}
