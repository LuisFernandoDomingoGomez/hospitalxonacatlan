
<?php 

	$conexion=mysqli_connect('localhost','root','','hospitalxonacatlan');

 ?>





<?php 

		$sql="SELECT * from usuarios where id_usuario=2";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){

			

	 ?>
			 <?php echo $mostrar['fotoperfil'] ?>
		
		
	<?php 
	}
	 ?>


	 