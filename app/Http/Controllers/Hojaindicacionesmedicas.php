<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\hindicacionesmedicas;
use App\unidades;
use DB;
use Session;


class Hojaindicacionesmedicas extends Controller
{


///// Indicaciones MEdcicas///
    public function indicacionesmedicas(){

            if(Session::get('sesionidu')=="")
        {
        Session::flash('error', 'Es necesario loguearse antes de
        continuar');
         return redirect()->route('index');
        }
        else
        {

    return view('HojadeindicacionesMedicas');
    
    }}
    

    public function guardaimed(Request $request){
        $Id_Imedicas= $request->Id_Imedicas;
        $hoja= $request->hoja;
        $Nombre= $request->Nombre;
        $Apellido_P= $request->Apellido_P;
        $Apellido_M= $request->Apellido_M;
        $Edad= $request->Edad;
        $Genero= $request->Genero;
        $T_A= $request->T_A;
        $Temp= $request->Temp;
        $Frec_C= $request->Frec_C;
        $Frec_R= $request->Frec_R;
        $Peso= $request->Peso;
        $Talla= $request->Talla;
        $Fecha_Elaboracion1= $request->Fecha_Elaboracion1;
        $Hora_Elaboracion1= $request->Hora_Elaboracion1;
        $Nota1= $request->Nota1;
        $Nombre_doctor=$request->Nombre_doctor;
        $id_unidad= $request->id_unidad;
        $Id_expediente= $request->Id_expediente;

        $imed = new indicacionesmedicas;
            $imed->Id_Imedicas = $request->Id_Imedicas;
            $imed->hoja = $request->hoja;
            $imed->Nombre = $request->Nombre;
            $imed->Apellido_P = $request->Apellido_P;
            $imed->Apellido_M = $request->Apellido_M;
            $imed->Edad= $request->Edad;
            $imed->Genero= $request->Genero;
            $imed->T_A = $request->T_A;
            $imed->Temp = $request->Temp;
            $imed->Frec_C = $request->Frec_C;
            $imed->Frec_R = $request->Frec_R;
            $imed->Peso = $request->Peso;
            $imed->Talla = $request->Talla;
            $imed->Fecha_Elaboracion1 = $request->Fecha_Elaboracion1;
            $imed->Hora_Elaboracion1 = $request->Hora_Elaboracion1;
            $imed->Nota1 = $request->Nota1;
            $imed->id_unidad = $request->id_unidad;
            $imed->Id_expediente = $request->Id_expediente;
            $imed->save();

    return redirect()->route('indicacionesmedicas');

    }

public function altaimed()
    {    

    if(Session::get('sesionidu')=="")
        {
        Session::flash('error', 'Es necesario loguearse antes de
        continuar');
         return redirect()->route('index');
        }
        else
        {
    $clavequesigue = hindicacionesmedicas::withTrashed()->orderBy('Id_Imedicas','desc')
                                ->take(1)
                                ->get();
    if(count($clavequesigue)==0)
    {
        $idns=1;
    }
    else{
        $idns = $clavequesigue[0]->Id_Imedicas+1;
    }
    $unidades = unidades::where('id_unidad','=','1')
                              ->orderBy('nom_unidad','asc')
                              ->get();
                          
      return view ("HojadeIndicacionesMedicas")
      ->with('unidades',$unidades)
      ->with('idns',$idns);
    }}
 
public function desactivaimed($Id_Imedicas)
    {
    hindicacionesmedicas::find($Id_Imedicas)->delete();
    return redirect()->route('principaln');
    }
    
    public function restauraim($Id_Imedicas)
    {
hindicacionesmedicas::withTrashed()->where('Id_Imedicas',$Id_Imedicas)->restore();
return redirect()->route('principaln');
    }
    public function eliminaim($Id_Imedicas)
    {
hindicacionesmedicas::withTrashed()->where('Id_Imedicas',$Id_Imedicas)->forceDelete();
return redirect()->route('indicacionesmedicas');
    }   
    public function revisaim($Id_Imedicas)
    {
        if(Session::get('sesionidu')=="")
        {
        Session::flash('error', 'Es necesario loguearse antes de
        continuar');
         return redirect()->route('index');
        }
        else
        {   
        $hindicacionesmedicas= hindicacionesmedicas::where('Id_Imedicas','=',$Id_Imedicas)->get();
        $unidades = unidades::where('Id_Unidad','=','1')
                              ->orderBy('nom_unidad','asc')
                              ->get();
        return view('Hojaindicacionesmedicas_revisar')
        ->with('notas',$notas[0])
        ->with('unidades',$unidades);
    }}  




}
