<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SusunanAcara extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_acara',
        'jam',
        'pengisi_acara'
    ];
}
