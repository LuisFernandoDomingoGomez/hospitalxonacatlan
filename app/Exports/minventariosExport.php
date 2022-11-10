<?php

namespace App\Exports;

use App\Models\minventarios;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class minventariosExport implements FromView
{
   use Exportable;
    public function view(): view
    {
        return view('excel.minventarios', [
        	'inventarios' => minventarios::all()
        ]);
    }
}
