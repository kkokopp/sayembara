<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Posts
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Kopriyanto",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Netus et malesuada fames ac turpis. Neque volutpat ac tincidunt vitae semper quis. A iaculis at erat pellentesque adipiscing. Integer quis auctor elit sed. Libero enim sed faucibus turpis in eu. Ultrices vitae auctor eu augue. In arcu cursus euismod quis. Eleifend mi in nulla posuere. Eget nullam non nisi est sit amet facilisis. Massa ultricies mi quis hendrerit dolor magna eget est lorem."
        ],

        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Kopriyanto",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Netus et malesuada fames ac turpis. Neque volutpat ac tincidunt vitae semper quis. A iaculis at erat pellentesque adipiscing. Integer quis auctor elit sed. Libero enim sed faucibus turpis in eu. Ultrices vitae auctor eu augue. In arcu cursus euismod quis. Eleifend mi in nulla posuere. Eget nullam non nisi est sit amet facilisis. Massa ultricies mi quis hendrerit dolor magna eget est lorem."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}



