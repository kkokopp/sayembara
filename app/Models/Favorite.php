<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['workshop_id', 'user_id',  'author_id'];

    protected $with = ['user', 'post'];
    
    public function post()
    {
        return $this->belongsTo(Post::class, 'workshop_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    static function check($user_id, $workshop_id)
    {
        $data = Favorite::where([
            ['user_id', $user_id],
            ['workshop_id', $workshop_id]
        ])->first();

        return $data;
    }

}
