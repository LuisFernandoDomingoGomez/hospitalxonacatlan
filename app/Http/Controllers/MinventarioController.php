<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\minventarios;
use Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade as PDF;
use View;


class MinventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
     $medicamentos = DB::table('minventarios')
          ->select('minventarios.medicamento')
          ->get();

         $inventarios = DB::table('minventarios')
          ->select('minventarios.*')
          ->get()->when($request->crit, function ($q) use ($request) {
            return $q->where('medicamento',$request->crit);
        })->when($request->medicamento, function ($q) use ($request) {
            return $q->where('medicamento', $request->medicamento);
        });

        //return $inventarios;
        return view('inventario.inventarios', compact('inventarios', 'medicamentos')); 

       
    }

    public function showTable()
    {
        return Datatables::of(minventarios::query('$crit'))->make(true);
    }

    public function show($id)
    {
        $data = minventarios::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('inventario.verInventario',$dat)->render();
        return ['title'=>'Detalle','html'=>$html]; 
    }


    public function edit($id)
    {
        $u = minventarios::findOrFail($id);
        
        return view('inventario.editaInventario', ["u" => $u]); 
    }


    public function update(Request $request, $id)
    {
        $u = minventarios::findOrFail($id);
        $u->name = $request->name;
        $u->save();

        return ['status'=>true,
                'out'=>'redirect',
                "route" => route('inventarios.index')];
    }

       public function Pdf(Request $request)
    {   
        $cadena = $request['arreglo'];
         $inventarios=explode("*",$cadena); 

        $pdf = PDF::loadView('pdf.inventarios', compact('inventarios'));

        return $pdf->stream('listado.pdf');
        //return view('pdf.inventarios', compact('inventario'));
        
    }

    public function Excel(Request $request)
    {   
        $cadena = $request['arreglo'];
         $inventarios=explode("*",$cadena);

        return view('excel.minventarios', compact('inventarios'));
        
    }
// public function mostrar(Request $request)
// {
//     $medicamento = $request['medicamento'];
// $inventario = buscar_inventario::orderBy('id', 'DESC')
// ->where('medicamento', 'LIKE', '%'.$medicamento.'%')
// ->paginate(8)
// return view('inventario.inventarios1', ['medicamento' =>$medicamento], compact('inventario'));
// }

}
