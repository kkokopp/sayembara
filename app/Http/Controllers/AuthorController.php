<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    // public function index()
    // {
    //     return view('categories', [
    //         "title" => "Category",
    //         "categories" => Category::all()
    //     ]);
    // }

    public function show(User $author)
    {
        return view('blog', [
            "title" => "Post By Author : $author->name",
            "posts" => $author->posts->load('category', 'author')
        ]);
    }
}
