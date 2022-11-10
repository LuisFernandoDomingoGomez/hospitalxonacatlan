<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('laravel/css/lib/dataTables/editor.dataTables.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('receta'); ?>
<div class="page-breadcrumb">
                <div class="row">

                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('sistema_inicio'); ?>">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Recetas Medicas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            <div class="col-5 align-self-center">
                        <center><h3 class="page-title">Recetas Medicas</h3></center>
          </div>
                <center>
                   <img src="<?php echo e(asset('laravel/img/historial-medico1.png')); ?>" width="80" height="80">
                    <br><br>

             <a type="button" href="<?php echo e('recetapa'); ?>" class="btn btn-primary">Crear Receta Medica</a>
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
                                <a data-toggle="tab" href="#profile" role="tab" >Inactivos</a>
                              </li>

                        </ul>
           
<div class="tab-content">	
    <div class="tab-pane fade active in" id="activ">
            
        <div class="panel-heading"> Resultados Recetas</div>
            <div class="panel-body">

                    <table id="users1" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Folio</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Estatus</th>
                                <th>Doctor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td class="non_searchable"></td>
                                <td></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td class="non_searchable"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
     </div>
            
            
    
            <div class="tab-pane fade" id="profile">
                <div class="panel-heading"> Resultados Recetas Inactivos</div>
                        <div class="panel-body">                        
                            <table id="inactt" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Folio</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Estatus</th>
                                        <th>Doctor</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td class="non_searchable"></td>
                                        <td></td>
                                        <td ></td>
                                        <td ></td>
                                        <td ></td>
                                        <td ></td>
                                        <td ></td>
                                        <td class="non_searchable"></td>
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
			//    alert("Ya");
               $('#users1').DataTable({
					
                     serverSide: true,
                     processing: true,
                     bAutoWidth: false,
					ajax: {
                        url: '<?php echo route('datatable.recetas_medicasSin'); ?>',
                type: "GET",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
    
                    "columns": [
                        {data: 'Id_receta', name: 'recetas_medicas.Id_receta'},
                        {data: 'Folio', name: 'recetas_medicas.Folio'},
                        {data: 'Nombre', name: 'recetas_medicas.Nombre'},
                        {data: 'Apellido_P', name: 'recetas_medicas.Apellido_P'},
                        {data: 'Apellido_M', name: 'recetas_medicas.Apellido_M'},
                        {data: 'estatus', name: 'recetas_medicas.estatus'},	
                        {data: 'nombre_tra', name: 'trabajadores.nombre_tra'},	
                    
	
                        {data: 'btn'}
                    ],				
					
					
                    language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
					
					initComplete: function () {
						//Coloca los campos de busqueda en columna individual en el encabesado
						 var r = $('#users1 tfoot tr');
						 $('#users1 thead').append(r);
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
			//    alert("Ya");
               $('#inactt').DataTable({
					
                     serverSide: true,
                     processing: true,
                     bAutoWidth: false,
					ajax: {
                        url: '<?php echo route('datatable.recetas_medicasInaSin'); ?>',
                type: "GET",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
    
                    "columns": [
                        {data: 'Id_receta', name: 'recetas_medicas.Id_receta'},
                        {data: 'Folio', name: 'recetas_medicas.Folio'},
                        {data: 'Nombre', name: 'recetas_medicas.Nombre'},
                        {data: 'Apellido_P', name: 'recetas_medicas.Apellido_P'},
                        {data: 'Apellido_M', name: 'recetas_medicas.Apellido_M'},
                        {data: 'estatus', name: 'recetas_medicas.estatus'},	
                        {data: 'nombre_tra', name: 'trabajadores.nombre_tra'},	
                        	
	
                        {data: 'btn'}
                    ],				
					
					
                    language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
					
					initComplete: function () {
						//Coloca los campos de busqueda en columna individual en el encabesado
						 var r = $('#inactt tfoot tr');
						 $('#inactt thead').append(r);
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

<script>$.fn.dataTable.ext.errMode = 'throw';</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>