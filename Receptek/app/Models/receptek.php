<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receptek extends Model
{
    use HasFactory;

    protected $fillable = [
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras'
    ];
}
