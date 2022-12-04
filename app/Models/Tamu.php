<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
     protected $fillable = [
        'nama_tamu',
        'email_tamu',
    ];

    public function undangan()
    {
        return $this->hasMany(Undangan::class);
    }
}
