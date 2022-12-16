<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SusunanAcara extends Model
{
    use HasFactory;
    protected $fillable = [
        'undangan_id',
        'nama_acara',
        'jam',
    ];
}
