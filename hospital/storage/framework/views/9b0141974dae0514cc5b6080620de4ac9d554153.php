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

                   <img src="<?php echo e(asset('laravel/img/inventario.png')); ?>" width="80" height="80">
					<br><br>
                   <img src="<?php echo e(asset('laravel/img/PDF1.jpg')); ?>" width="80" height="80">
                    <img src="<?php echo e(asset('laravel/img/excel.png')); ?>" width="80" height="80">

                 
                    <br><br>


                    <a type="button"  href="<?php echo e('pdf/{$crit}'); ?>" class="btn btn-primary">Crear Reporte PDF</a>



             <a type="button"  href="<?php echo e('excel_inventario'); ?>" class="btn btn-primary">Crear Reporte Excel</a>
              <center>

                </div>
            </div>




<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>