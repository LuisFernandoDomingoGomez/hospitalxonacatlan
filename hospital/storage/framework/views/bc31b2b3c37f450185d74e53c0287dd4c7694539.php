<?php $__env->startSection('contenido'); ?>

<br><br><br><br><br><br>
<span><marquee direction="left" style="background:#0DA2CA">-</marquee></span>


                <center>
                   <marquee><img src="<?php echo e(asset('laravel/img/isem.png')); ?>" width="260" height="210">
				   </marquee>
                    <br><br>

 <span><marquee direction="left" style="background:#0DA2CA">-</marquee></span>

<script type="text/javascript">
	var button = confirm("Quiere cambiar la contraseña");
	if (button) {
		location.href ="http://localhost/sistema/public/contrase%C3%B1a";
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>