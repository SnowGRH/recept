<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptekController extends Controller
{
    function receptleKK() {
        return DB::table('recepteks as rt')
        ->select('rt.nev','kt.nev as katnev','rt.leiras','rt.kep_eleresi_ut as kepel')
        ->join('kategorias as kt','rt.kat_id','kt.id')
        ->get();
    }
}

