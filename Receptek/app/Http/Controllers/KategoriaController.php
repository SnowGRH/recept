<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    function ShowAll(){
        return DB::select('Select * from kategorias');
    }
}
