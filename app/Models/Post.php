<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory, Sluggable;


    protected $fillable =  ['title', 'category_id','user_id', 'status' ,'excerpt', 'slug', 'pemateri', 'tanggal', 'tanggal_selesai', 'jam', 'poster', 'jam_selesai', 'harga', 'jmlh_peserta', 'berbayar_tidak', 'online_offline','terbatas_tidak', 'terbuka_tidak', 'sertifikat', 'body'];


    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('author', function($query) use ($author) {
                $query->where('username', $author);
            });
        });

        $query->when($filters['new'] ?? false, function($query, $new) {
            return $query->where('status' , 'on')->latest();
        });
    
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function daftar()
    {
        return $this->hasMany(Daftar::class, 'workshop_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    static function author_id($id)
    {
        $author_id = Post::where('id', $id)->first();
        // dd($author_id);
        $author_id = $author_id->user_id;
        return $author_id;
    }
}
