@extends('layout.master')
@section('contenido')
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script> 

<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Nueva Cita</h4>>

                    </div>                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </li>
									<li class="breadcrumb-item">
                                        <a href="{{ 'citas' }}">Citas</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Alta</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

<br>
<div class="container-fluid">
  <div class="row">
   <div class="col-12">
  <div class="card card-body">
 <form class="form-horizontal m-t-30" action = "{{route('guardacita1')}}" method = "POST" enctype="multipart/form-data">
{{csrf_field()}}
<div class="form-group">
<label>Numero de Cita:</label>
<input type="text" class="form-control" name = 'id_cit' value="{{$idc}}" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Num Expediente: </label>
                                    <input type="text" class="form-control" name = 'id_expediente' value='{{$expedientes->id_expediente}}' readonly ='readonly' required placeholder="Ej. 1">
                              
								</div>
	 <div class="form-group">
                                    <label>Fecha: </label>
                                    <input type="date" class="form-control" name = 'fecha' value="fecha">

								</div>
     <div class="form-group">
                                <label>Hora: </label>
                                <input type="time" class="form-control" name="hora" value="00:00:00" max="23:59:00" min="00:00:00" step="1">                                
								</div>

<div class="form-group">
                        <label>Seleccione Área Medica</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect" name='area_med'>
                            <option value="Ginecologia" selected>Ginecologia</option>
                            <option value="Pediatria">Pediatria</option>
                            <option value="Cirugia">Cirugia</option>
                            <option value="Nutricion">Nutricion</option>
                            <option value="Odontologia">Odontologia</option>
                            <option value="Psicologia">Psicologia</option>
                            <option value="Consulta Externa">Consulta Externa</option>
                        </select>
</div>

 <div class="form-group">
                                <label>Seleccione Numero de Consultorio: </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'num_consul'>
                                        @foreach($consultorio as $con)
                                 <option value = '{{$con->num_consul}}'><center>{{$con->num_consul}}</center></option>
                                        @endforeach
                                    </select>              
                                </div>

 <div class="form-group">
                                <label>Seleccione Doctor: </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'doctor'>
                                        @foreach($doctor as $doc)
                                    <option value = '{{$doc->nom_doc}} {{$doc->ap_doc}} {{$doc->am_doc}}'>
                                    {{$doc->nom_doc}}
                                    {{$doc->ap_doc}}
                                    {{$doc->am_doc}}
                                    </option>
                                        @endforeach
                                    </select>              
                                </div>								

<div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>
</form>
</div>
</div>
</div>
</div>

@stop