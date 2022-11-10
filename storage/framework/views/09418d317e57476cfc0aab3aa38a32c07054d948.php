<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
     <tr><td>Id</td><td>medi_mat</td><td>medicamento</td><td>existencia</td></tr>
          <tr>
          	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <td><?php echo e($p->id); ?></td>
            <td><?php echo e($p->medi_mat); ?></td>
            <td><?php echo e($p->medicamento); ?></td> 
            <td><?php echo e($p->existencia); ?></td>
            
          </tr>
        
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>


</body>
</html>