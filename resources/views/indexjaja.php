<?php 

	$conexion=mysqli_connect('localhost','root','','hospitalxonacatlan');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id_usuario</td>
			<td>clues</td>
			<td>correo</td>
			<td>area</td>
			<td>user</td>	
			<td>password</td>
			<td>fotoperfil</td>	
			<td>id_unidad</td>
			<td>id_trabajador</td>	
			<td>  </td>	
			<td>  </td>	
		</tr>

		<?php 
		$sql="SELECT * from usuarios where id_usuario";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_usuario'] ?></td>
			<td><?php echo $mostrar['clues'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['area'] ?></td>
			<td><?php echo $mostrar['user'] ?></td>
			<td><?php echo $mostrar['password'] ?></td>
			<td><?php echo $mostrar['fotoperfil'] ?></td>
			<td><?php echo $mostrar['id_unidad'] ?></td>
			<td><?php echo $mostrar['id_trabajador'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>