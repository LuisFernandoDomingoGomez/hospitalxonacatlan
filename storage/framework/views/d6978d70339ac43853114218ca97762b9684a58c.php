<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('laravel/css/lib/dataTables/editor.dataTables.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('receta'); ?>
           <div class="page-breadcrumb">
                <div class="row">
                 <div class="col-5 align-self-center">
                        <h4 class="page-title">Expedientes Digitales</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('sistema_inicio'); ?>">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Expedientes Digitales </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                
                <center>
                 <img src="<?php echo e(asset('laravel/img/icons8-carpeta-de-doctores-64.png')); ?>" width="80" height="80">
                 <br><br>
                 <a href="altaex" class="btn btn-primary">Crear Expediente
              </a>
              <center>

                </div>
            </div>
<?php $__env->stopSection(); ?>                <!-- /# column -->
   


<?php $__env->startSection('contenido'); ?>

 <div class="panel panel-default">
       
        <div class='tabs'>
		
							<ul class="nav nav-tabs " id="tabexp" role="tablist">
								  <li class="active">
									<a data-toggle="tab" href="#activ" role="tab">Activos</a>
								  </li>
								  <li class="nav-item">
									<a data-toggle="tab" href="#profile" role="tab"onclick="inactDataTables()">Inactivos</a>
								  </li>

							</ul>
               
			<div class="tab-content">	
		<div class="tab-pane fade active in" id="activ">
				
                    <div class="panel-heading"> Resultados Expedientes</div>
                    <div class="panel-body">
					<!--	<header>
					<div class="col-sm-2">
					<input type="button" class="btn btn-warning btn-sm" id="boton_resetear" value="Resetear búsqueda" disabled>
					</div>
						</header> -->
                        <table id="users" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                               <th>#</th>                                
                                <th>Nombre</th>
								<th>Apellido Paterno</th>
								<th>Apellido Materno</th>								
								<th colspan=2>Edad/ Sexo</th>
								<th>CURP</th>
								<th>Parentesco</th>	
								<th>Número de Afiliación</th>	
								<th>Ubicación</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
							<tfoot>
								<tr>
									<td class="non_searchable"></td>
									<td></td>
									<td></td>
									<td></td>
									<td class="non_searchable"></td>
									<td class="non_searchable"></td>
									<td></td>
									<td class='non_searchable'></td>
									<td></td>
									<td></td>
									<td class="non_searchable" ></td>
								</tr>
							</tfoot>
                        </table>
                    </div>
         </div>
				
				
		
				<div class="tab-pane fade" id="profile">
					<div class="panel-heading"> Resultados Expedientes Inactivos</div>
							<div class="panel-body">
							
								<table id="inactt" class="table table-hover table-condensed">
									<thead>
									<tr>
									   <th>#</th>                                
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>								
										<th colspan=2>Edad/ Sexo</th>
										<th>CURP</th>
										<th>Parentesco</th>	
										<th>Número de Afiliación</th>	
										<th>Ubicación</th>
										<th>Acciones</th>
									</tr>
									</thead>
									
									<tfoot>
										<tr>
											<td class="non_searchable"></td>
											<td></td>
											<td></td>
											<td></td>
											<td class="non_searchable"></td>
											<td class="non_searchable"></td>
											<td></td>
											<td class='non_searchable'></td>
											<td></td>
											<td></td>
											<td class="non_searchable" ></td>
										</tr>
									</tfoot>
									
								</table>
							
							</div>
				</div>
           
			</div>
  </div>
</div>

<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('js'); ?>
       <script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>
        <script>
           $(document).ready(function(){
			   
               $('#users').DataTable({
					
                    serverSide: true,
                     processing: true,
                     bAutoWidth: false,
                    
					ajax: {
                url: '<?php echo route('datatable.expedientes'); ?>',
                type: "GET",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
					
        
                    "columns": [

                        {data: 'id_expediente', name: 'expedientes.id_expediente'},
                        
                        {data: 'nom_paciente', name: 'pacientes.nom_paciente'},
						{data: 'ap_paciente', name: 'pacientes.ap_paciente'},
						{data: 'am_paciente', name: 'pacientes.am_paciente'},
						{data: 'edad' , name: 'pacientes.edad', orderable: false, searchable: false},
						{data: 'sexo' , name: 'pacientes.sexo', orderable: false, searchable: false},
						{data: 'curp' , name: 'pacientes.curp'},
						{data: 'parentesco', name: 'expedientes.parentesco'},
						{data: 'num_afiliacion' , name: 'pacientes.num_afiliacion'},
						{data: 'ubicacion', name: 'expedientes.ubicacion'},				
						
                        {data: 'btn'},
                    ],				
					
					
                    language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
					
					initComplete: function () {
						//Coloca los campos de busqueda en columna individual en el encabesado
						 var r = $('#users tfoot tr');
						 $('#users thead').append(r);
						////////////////!!!!!!!!!!!!!!!!!!!!!///////////
							this.api().columns().every(function () {
								var column = this;
								 if (column.footer().className !== 'non_searchable') {
								var input = document.createElement("input");
								input.style.width = '85%';
								$(input).appendTo($(column.footer()).empty())
								.on('keyup', function () {
									column.search($(this).val(), false, false, true).draw();
								});
								 }
							});
						},
					
                });
		   });


$(document).ready(function(){
			$('#inactt').DataTable({
                    "serverSide": true,
                     processing: true,
                     bAutoWidth: true,
					 "responsive": true,
					 ajax: {
                url: '<?php echo route('datatable.expedientesIna'); ?>',
                type: "GET",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
               
                    "columns": [

                        {data: 'id_expediente', name: 'expedientes.id_expediente'},
                        
                        {data: 'nom_paciente', name: 'pacientes.nom_paciente'},
						{data: 'ap_paciente', name: 'pacientes.ap_paciente'},
						{data: 'am_paciente', name: 'pacientes.am_paciente'},
						{data: 'edad' , name: 'pacientes.edad', orderable: false, searchable: false},
						{data: 'sexo' , name: 'pacientes.sexo', orderable: false, searchable: false},
						{data: 'curp' , name: 'pacientes.curp'},
						{data: 'parentesco', name: 'expedientes.parentesco'},
						{data: 'num_afiliacion' , name: 'pacientes.num_afiliacion'},
						{data: 'ubicacion', name: 'expedientes.ubicacion'},				
						
                        {data: 'btn'},
                    ],
					
					
                     language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
					
					initComplete: function () {
						//Coloca los campos de busqueda en columna individual en el encabesado
						 var r = $('#users tfoot tr');
						 $('#users thead').append(r);
						////////////////!!!!!!!!!!!!!!!!!!!!!///////////
							this.api().columns().every(function () {
								var column = this;
								 if (column.footer().className !== 'non_searchable') {
								var input = document.createElement("input");
								input.style.width = '85%';
								$(input).appendTo($(column.footer()).empty())
								.on('keyup', function () {
									column.search($(this).val(), false, false, true).draw();
								});
								 }
							});
						},
				
					
                });
  
				
		   });
        </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>