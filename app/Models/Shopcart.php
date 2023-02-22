<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopcart extends Model
{
    use HasFactory;

    protected $fillable =  ['title', 'post_id','user_id', 'slug', 'harga'];


    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    static function get_cart($slug, $user_id)
    {
        $data = Shopcart::where([
            ['slug' , $slug],
            ['user_id', $user_id]
            ])->first();

        return $data;
    }
}
