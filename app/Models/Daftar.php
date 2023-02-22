<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Daftar extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'author_id', 'workshop_id', 'status', 'kartu_identitas', 'alamat', 'nomor_hp'];

    protected $with = ['post', 'user'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['status'] ?? false, function($query, $status) {
            return $query->whereHas('status', function($query) use ($status) {
                $query->where('status', $status);
            });
        });

        // $query->when($filters['new'] ?? false, function($query, $new) {
        //     return $query->where('status' , 'on')->latest();
        // });
    
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'workshop_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    static function get_daftar($user_id, $workshop_id)
    {
        $data = Daftar::where([
            ['user_id', $user_id],
            ['workshop_id', $workshop_id]
        ])->first();

        return $data;
    }
}
