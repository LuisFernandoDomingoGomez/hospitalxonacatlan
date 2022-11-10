@extends('layout.master')


@section('css')
<link href="{{asset('laravel/css/lib/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection


@section('receta')
           <div class="page-breadcrumb">
                <div class="row">

                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'sistema_inicio' }}">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Estudio de Gabinete</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            <div class="col-5 align-self-center">
                        <center><h3 class="page-title">Estudio de Gabinete</h3></center>
          </div>
                <center>
                    <img src="{{asset('laravel/img/icons8-libro-de-salud-96.png')}}" width="80" height="80">
                    <br><br>

             <a type="button"  href="{{'altaeg'}}" class="btn btn-primary">Crear Estudio de Gabinete</a>
              <center>

                </div>
            </div>
@endsection                <!-- /# column -->
   


@section('contenido')

<br>
         <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Resultados Estudio de Gabinete</div>
                    <div class="panel-body">
                        <table id="users" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th >Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th style="width:50px" >De</th>
                                <th>Placa Utilizada</th>
                                
                                <th>Acciones</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('js')
       <script src="{{asset('laravel/js/lib/dataTables/datatables.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('#users').DataTable({
                    "serverSide": true,
                     processing: true,
                     bAutoWidth: false,
                    "ajax": "{{ url('api/estudiogabinete') }}",
                    "columns": [

                        {data: 'Id_EstudioGabinete'},
                        {data: 'Nombre'},
                        {data: 'Apellido_P'},
                        {data: 'Apellido_M'},
                        {data: 'De'},
                        {data: 'Placa'},
                        {data: 'btn'},
                    ],
                    "language": {
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "search": "Buscar",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select >'+
                                    '<option value="10">10</option>'+
                                    '<option value="30">30</option>'+
                                    '<option value="50">50</option>'+
                                    '<option value="-1">Todos</option>'+
                                    '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords": "No hay coincidencias", 
                        "infoEmpty": "",
                        "infoFiltered": ""
                    }
                });
            });
        </script>
@endsection

