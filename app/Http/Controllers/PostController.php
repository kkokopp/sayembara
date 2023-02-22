<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
// use App\Models\Cart;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('category')){

            $category = Category::firstWhere('slug', request('category'));
            $title = '  in ' .  $category->name;
        }

        if(request('new')){
            $title = ' Terbaru';
        }

        if(request('author')){

            $author = User::firstWhere('username', request('author'));
            $title = '  by ' . $author->name;
        }

        // $harga = Post::->harga;
        return view('blog', [
            "title" => "Courses" . $title,
            "active" => "posts",
            "posts" => Post::where('status', 'on')->filter(request(['search', 'category', 'author', 'new']))->paginate(8)->withQueryString(),
            "categories" => Category::all()

        ]);
    }

    public function show(Post $post)
    {
        // dd($post);
        $user = auth()->user();
        $update = strtotime($post->updated_at);
        $update = date('l', $update);
        $update = $update . ' ' . $post->updated_at;

        $timestamp = strtotime($post->tanggal);
        $hari = date('l', $timestamp);

        // $slug = $post->slug;
        // $cart= Cart::get_cart($slug);

        // dd($cart);

        // if(!is_null($cart)){
        // dd($post);
            return view('post', [
                "title" => "Single Posts",
                "active" => "posts",
                "hari" => $hari,
                "update" => $update,
                "posts" => $post,
                "user" => $user
            ]);
        // }else{
        //     return view('post', [
        //         "title" => "Single Posts",
        //         "active" => "posts",
        //         "hari" => $hari,
        //         "update" => $update,
        //         "posts" => $post
        //     ]);
        // }

    }
}
