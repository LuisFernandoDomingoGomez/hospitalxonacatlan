<?php $__env->startSection('contenido'); ?>
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Revisar Perfil</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                       
                                    </li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			<div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php echo e(asset('archivos/'.$usuarios->fotoperfil)); ?>" width="250" />
                                    <h4 class="card-title m-t-10"><?php echo e($usuarios->user); ?></h4>
                                    <h6 class="card-subtitle">Nombre de Usuario</h6>
       
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Correo electronico </small>
                                <h6><?php echo e($usuarios->correo); ?></h6> <small class="text-muted p-t-30 db">Telefono</small>
                                <h6><?php echo e($trabajadores->telefono); ?></h6> 
                              
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
									<center><label class="col-md-20">Información Trabajador</label></center>
                                        <label class="col-md-12">Nombre Completo: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($trabajadores->nombre_tra.' '.$trabajadores->ap_tra.' '.$trabajadores->am_tra); ?>' class="form-control form-control-line"readonly>
                                        </div>
										</div>
										<div class="form-group">
										<label class="col-md-12">Cedula Profesional: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($trabajadores->cedula_profesional); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Turno: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($trabajadores->turno); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Dias Laborales: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($trabajadores->dias_laborales); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Hora Entrada - Hora de Salida: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($trabajadores->hr_entrada.' - '.$trabajadores->hr_salida); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Especialidad: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($trabajadores->especialidad); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

			<!-- End Container fluid  -->
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>