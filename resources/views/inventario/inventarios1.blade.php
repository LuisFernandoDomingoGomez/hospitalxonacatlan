@extends('layout.master')

@section('css')
<link href="{{asset('/laravel/css/lib/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('receta')
 <div class="page-breadcrumb">
                <div class="row">

                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                        </div>
                    </div>
            <div class="col-5 align-self-center">
                        <center><h3 class="page-title"></h3></center>
          </div>
                <center>
                   &nbsp &nbsp &nbsp  

                   <img src="{{asset('laravel/img/inventario.png')}}" width="80" height="80">
					<br><br>
                   <img src="{{asset('laravel/img/PDF1.jpg')}}" width="80" height="80">
                    <img src="{{asset('laravel/img/excel.png')}}" width="80" height="80">

                 
                    <br><br>


                    <a type="button"  href="{{'pdf/{$crit}'}}" class="btn btn-primary">Crear Reporte PDF</a>



             <a type="button"  href="{{'excel_inventario'}}" class="btn btn-primary">Crear Reporte Excel</a>
              <center>

                </div>
            </div>
<form method="GET" action="{{route('inventarios1')}}">
    <div>
        <label>
            Ingresa concepto de busqueda
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="fa fa-search">
                    
                    </span>
                </div>
        </label>
        <input type="search" name="medicamento" class="g-control form-control-alternative">
        <br>
    </div>
    <br><input type="submut" value="Visualizar todos los registros" class="btn btn-outline-primary">

    
</form>
<div class="row mt-5">
    <div class="col">
        <div class="card bg-defaul shadow">
            <div class="card-header bg-transparent border-0">
                <h3 class="text-white mb-0"> Registros de Medicamento
                    &nbsp; &nbsp;   &nbsp; &nbsp;    &nbsp; &nbsp;
                </h3>
</div>
<div>
    <a href="{{ route('formato.pdf', ['medicamento' =>$medicamento]) }}"> Descargar PDF</a>
    <br>
</div>
<br>
<div>
    <form action="{{route('hoja.excel', )"></form>
</div>



@endsection




