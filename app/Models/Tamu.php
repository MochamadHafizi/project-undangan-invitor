<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
     protected $fillable = [
        'qr_code',
        'undangan_id',
        'kategori_id',
        'nama_tamu',
        'email_tamu',
    ];

    public function undangan()
    {
        return $this->belongsTo(Undangan::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
