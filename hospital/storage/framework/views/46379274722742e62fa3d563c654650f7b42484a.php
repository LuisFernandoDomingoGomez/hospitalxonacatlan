<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('/laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('receta'); ?>
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

                   <?php $cadena=''; ?>

                <?php $__currentLoopData = $inventarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $cadena=$cadena.$i->id.'~';
                $cadena=$cadena.$i->medi_mat.'~';
                $cadena=$cadena.$i->medicamento.'~';
                $cadena=$cadena.$i->existencia;
                $cadena= $cadena."*";
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   <img src="<?php echo e(asset('laravel/img/inventario.png')); ?>" width="80" height="80">
					<br><br>
                    <div class="row">
                <div>
                <!-- TABLA DE REPORTES -->
                <table align="center">
                 <tr>
                  <!-- reporte PDF -->
                  <td>
                    <form action="<?php echo e(route('inventarios.pdf')); ?>" method="get">         
                 <div class="form-group">
                     <img src="<?php echo e(asset('laravel/img/PDF1.jpg')); ?>" width="80" height="80"><br>
                 <input type="hidden" name="arreglo" value="<?php echo $cadena;?>"> 
                 <button class="btn btn-danger btn-circle">Crear Reporte PDF</button>
                  </div>
                </form></td> 
                  <!-- reporte EXCEL -->
                 <td><form action="<?php echo e(route('inventarios.excel')); ?>" method="get">         
                 <div class="form-group">
                    <img src="<?php echo e(asset('laravel/img/excel.png')); ?>" width="80" height="80"><br>
                 <input type="hidden" name="arreglo" value="<?php echo $cadena;?>"> 
                 <button type="submit" name="create_excel" class="btn btn-success btn-circle">Crear Reporte PDF</button>
                  </div>
                </form></td>
                </tr>
                </table> <!-- FIN DE TABLA DE REPORTES -->
                </div>
              </div>
                  
              <center>

                </div>
            </div>

              
 




<?php $__env->stopSection(); ?>



<?php $__env->startSection('contenido'); ?>
            <div align="left"><!-- FORMULARIO DE BUSQUEDA -->
              <form  accept-charset="utf-8" class="box-tools">
                <div class="col-md-2">
                <select class="form-control" name="medicamento" > 
                            <option value="">-- Medicamento --</option>
                            <option value="">Todos</option>
                            <?php $__currentLoopData = $medicamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($m->medicamento); ?>"
                                <?php echo e(request()->medicamento == $m->medicamento ? 'selected' : ''); ?>><?php echo e($m->medicamento); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
                </div>
                <div class="input-group input-group-sm" style="width: 250px;">
                  <input type="text" name="crit" class="form-control pull-right" style="height: 35px;" value="<?php echo e(request()->crit); ?>" placeholder="BUSCAR">

                  <div class="input-group-btn">
                    <button type="submit" style="height: 35px;" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
                </div><!-- FIN DEL FORMULARIO DE BUSQUEDA -->
    <br><br>
    
             <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table class="table table-hover table-condensed">
        <thead>
          <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Nombre Medicamento</th> 
            <th>Existencia</th>
            <th>Acción</th>
          </tr>
        </thead>
         <?php if(count($inventarios)>0): ?>
                      <?php $__currentLoopData = $inventarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tbody>
                        <tr>
                          <td><?php echo e($i->id); ?></td>
                          <td><?php echo e($i->medi_mat); ?></td>
                          <td><?php echo e($i->medicamento); ?></td>
                          <td><?php echo e($i->existencia); ?></td>
                          <td> </td>
                        </tr>
                      </tbody>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                      <?php else: ?>
                      <tbody>
                        <tr>
                          <td align="center" colspan="5"><h4><b>NO SE ENCONTRARON REGISTROS</b></h4></td>
                        </tr>
                      </tbody>  
                      <?php endif; ?>              
    </div>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('/laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>
<script>
$(function() {
    
    $('#tablaAjax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
        ajax: {
                url: '<?php echo route('inventarios.showTable'); ?>',
                type: "POST",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
        columns: [                    
              { data: 'id', name: 'id', className:'center' },
              { data: 'medi_mat', name: 'medi_mat' },                
              { data: 'medicamento', name: 'medicamento', className:'hidden-480' },
              { data: 'existencia', name: 'existencia' },
              { data: 'id', name: 'id', className:'center'}
            ],
        columnDefs: [
        {
            targets: 4,
            createdCell: function (td, cellData, rowData, row, col) {
                show="<?php echo URL::to('inventarios/"+cellData+"'); ?>";
                edit="<?php echo URL::to('/"+cellData+"/edit'); ?>";
                deleted="<?php echo URL::to('/"+cellData+"'); ?>";
                $(td).html(buttonsTable(show,edit,deleted,true));
            }
        }
        ]






        // dom: 'Bfrtip',
        // buttons:[
        // {
        //     extend: 'excelHtml5',
        //     customize: function (xlsx){
        //         var sheet = xlsx.xl.worksheet['sheet1.xml'];
        //     }
        //     title: 'HOSPITAL MUNICIPAL  XONACATLAN VICENTE GUERRERO',
        //     text: '<span class="boton">Excel</span>',
        //     titleAttr: 'Excel' 
        // }]



       

        
    });
    
});
 </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>