<?php $__env->startSection('contenido'); ?>

     <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
               Modificación de Usuario
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
   <ol class="breadcrumb">
        <li><a href="<?php echo e('inicio'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo e('usuarios'); ?>">Usuarios</a></li>
        <li class="active">Alta Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group"action = "<?php echo e(route('modificausuario')); ?>" method = "POST">
                 <?php echo e(csrf_field()); ?> 

                  <label>Id Usuario</label>
                  <input type="text" class="form-control"  name = 'id_usuario' value="<?php echo e($usuarios->id_usuario); ?>" readonly ='readonly'>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electronico</label>
                  <input type="email" id="example-email" name="correo" class="form-control" value="<?php echo e($usuarios->correo); ?>" placeholder="tucorreo@gmail.com" required>

                  <?php if($errors->first('correo')): ?> 
                <i><span class="label label-danger label-rounded"><?php echo e($errors->first('correo')); ?></span> </i> 
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>


                                <!-- select -->
                <div class="form-group">
                  <label>Seleccione área</label>
                  <select class="form-control" name='area'>
                    <option value = '<?php echo e($area); ?>' selected><?php echo e($area); ?>></option>
                    <option value='Quirofano'>Quirofano</option>
                    <option value="Urgencias">Urgencias</option>
                    <option value="Triage">Triage</option>
                    <option value="Archivo">Archivo</option>
                    <option value="Sistemas">Sistemas</option>
                  </select>
                </div>


             <h4>Nombre de Usuario</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name = 'user' value="<?php echo e($usuarios->user); ?>" required placeholder="usuario1234567890">
              <?php if($errors->first('user')): ?> 
              <i><span class="label label-danger label-rounded"><?php echo e($errors->first('user')); ?></span> </i><?php endif; ?>  

              </div>
              <br>


              <h4>Contraseña: </h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="password" class="form-control" name='password'  value="<?php echo e($usuarios->password); ?>" required>
              <?php if($errors->first('password')): ?> 
              <i><span class="label label-danger label-rounded"><?php echo e($errors->first('password')); ?></span> </i> 
              <?php endif; ?>    
              </div>
              <br>

              <div class="form-group">  
 <img src = "<?php echo e(asset('archivos/'.$usuarios->fotoperfil)); ?>" height =150 width=150>
<label>Escoga la nueva foto de perfil: </label>
<input type="file" name='fotoperfil' class="form-control">
<?php if($errors->first('fotoperfil')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('fotoperfil')); ?></span> </i> 
<?php endif; ?>      
</div>  

<div class="form-group">
<label>Seleccione unidad medica : </label>
<select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_unidad'>
 <option value = '<?php echo e($id_unidad); ?>'><?php echo e($unidad); ?></option>
 <?php $__currentLoopData = $todasdemas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $td): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value = '<?php echo e($td->id_unidad); ?>'><?php echo e($td->nom_unidad); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </select>
</div>
                

<input type="text" class="form-control" name = 'id_trabajador' value="<?php echo e($usuarios->id_trabajador); ?>" required hidden>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type='reset' class="btn btn-warning">Limpiar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>