<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $with=['user','kategori'];
    protected $fillable = [
        'user_id',
        'kategori_id',
        'judul',
        'deskripsi',
        'waktu',
        'jam',
        'tempat',
    ];

    public function tamu()
    {
        return $this->hasMany(Tamu::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
