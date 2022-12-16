<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori'
    ];

    public function undangan()
    {
        return $this->hasMany(Undangan::class);
    }

    public function tamu()
    {
        return $this->hasMany(Tamu::class);
    }
}
