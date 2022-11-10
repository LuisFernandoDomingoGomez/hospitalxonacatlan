<?php $__env->startSection('contenido'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title" align="center">PUBLICIDAD</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
       </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
             <div class="box-header">
                 
              <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Correcto!</h4>
                <p><?php echo e($message); ?></p>
              </div>
              <?php endif; ?>


              <div class="row">
                <div class="col-xs-2">
                  <a  href="<?php echo e(route('publicidad.create')); ?>" type="button" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Promociones</a>
                </div>
              </div><br>
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead align="center" style="background-color:#3c8dbc;color:#fff; font-family: sans-serif;">
                   <tr>
                          <th width="150px">GALERIA</th>
                        </tr>
                      </thead>

                      <?php if(count($publicidad)>0): ?>
                      <?php $__currentLoopData = $publicidad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tbody>
                        <tr>
                          
                         
                          <td>
                          
                          
                           <a href="<?php echo e(route('publicidad.show',['id'=>$p->banner_id])); ?>" class="btn bg-maroon btn-sm"><i class="fa fa-file-photo-o"></i></a>
                           
                          
                           
                           
                          </form></td>
                        </tr>
                      </tbody>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                      <?php else: ?>
                      <tbody>
                        <tr>
                          <td align="center" colspan="8"><h4><b>NO SE ENCONTRARON REGISTROS</b></h4></td>
                        </tr>
                      </tbody>   
                      <?php endif; ?>             


                      </table>
            </div>
            </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.box-body -->
</div><!-- /.box -->






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>