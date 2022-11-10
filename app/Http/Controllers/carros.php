<?php

namespace App\Http\Controllers;

use App\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carros extends Controller
{
   
    public function carros()
    {
       return view('carros');
    }

}
