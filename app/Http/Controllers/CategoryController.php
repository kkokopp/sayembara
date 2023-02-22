<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('categories', [
            "title" => "Category",
            "active" => "categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('blog', [
            "title" => "Post by Category : $category->name" ,
            "posts" => $category->post->load('category', 'author')
        ]);
    }

    public function tambah(Request $request){
        // dd($request);
        // $validateData = $request->validate([
        //     'name' => 'required', 
        // ]);
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;

        Category::create($data);

        return back()->with('succes', 'kategori telah ditambah');
    }

    public function hapus(Category $category)
    {   
        // dd($category->slug);
        Category::where('slug', $category->slug)->delete();
        // Category::destroy($category->slug);
        return back();
    }
}
