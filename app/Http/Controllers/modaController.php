<?php

namespace App\Http\Controllers;

use App\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class modaController extends Controller
{
   
    public function moda()
    {
       return view('moda');
    }

}
