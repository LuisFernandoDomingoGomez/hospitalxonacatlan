
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>


<?php 
if ($_POST) {

 		$total=0;
 		$SID=session_id();
 		$Correo=$_POST['email'];

        foreach($_SESSION['CARRITO'] as $indice=>$producto) {
           	$total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
 		}

$sentencia=$pdo->prepare("INSERT INTO `tblventas`
(`ID`,`ClaveTransaccion`,`PaypalDatos`,`Fecha`,`Correo`,`Total`,`status`) 
VALUES(NULL,:ClaveTransaccion, '', NOW(),:Correo,:Total,'pendiente');");

$sentencia->bindParam(":ClaveTransaccion",$SID);
$sentencia->bindParam(":Correo",$Correo);
$sentencia->bindParam(":Total",$total);
$sentencia->execute();
$idVenta=$pdo->lastInsertId();

foreach($_SESSION['CARRITO'] as $indice=>$producto) {

$sentencia=$pdo->prepare("INSERT INTO 
`tbldetalleventa`(`ID`,`IDVENTA`,`IDPRODUCTO`,`PRECIOUNITARIO`,`CANTIDAD`,`DESCARGADO`) 
VALUES(NULL,:IDVENTA,:IDPRODUCTO,:PRECIOUNITARIO,:CANTIDAD,'0');");

		$sentencia->bindParam(":IDVENTA",$idVenta);
		$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
		$sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
		$sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
		$sentencia->execute();


}
 		//echo "<h3>".$total."</h3>";
 	}
  ?>



<!-- <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD">  -->  

	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
    </script>

<style>
@media screen and (max-width: 400px){
#paypal-button-container{
width: 100px;
}
}

@media screen and (min-width:400px){
#paypal-button-container{
width: 250px;
display: inline-block;
}
}
</style>


<div class="jumbotron text-center" >
	<h1 class="display-4"> ¡Paso Final!</h1>
	<hr class="my-4">
	<p class="lead"> Estas a punto de pagar con Paypal la cantidad de:
		<h4>$<?php echo number_format($total,2);?></h4>

		  <div id="paypal-button-container"></div>

	</p>
<p>Los productos podran ser descargados una vez que se procese el pago<br/>
<strong> (Para aclaraciones :al221711322@gmail.com)</strong>
</p>
	
</div>




<!--   <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            style: {
                layout: 'horizontal'
            }
        }).render('#paypal-button-container');
    </script> -->

<script>
paypal.Button.render({
env:'sandbox', 
style: {
label: 'checkout',
size: 'responsive',
shape: 'pill',
color: 'gold'
},


client: {
sandbox:'ATAQbq5PvOH03GDQUaRLoyLU_MztudCmweOoOhg2Y5_fYAwQDBH-EsUoMQb1OxtMznwyUplbj2hNrxCC',
production:'AZKRa1JBVbvmmEEAmgpJ2gz9KUw9A-JQnXntC4l_8A9AQKWGB-86wMsnMZAEg09lWpuZbjCFOgncExao'
},

payment: function(data, actions){
return actions.payment.create({
	payment:{
	transactions: [
{
amount: { total: '<?php echo $total;?>', currency: 'MXN'},
description:"Compra de productos a Orlando: $<?php echo number_format($total,2)?>",
custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY); ?>"
				}
			]
		}
	});
},

onAuthorize: function(data, actions) {
return actions.payment.execute().then(function(){
		console.log(data);

window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;

			});

		}
	}, 'paypal-button-container');

</script>




<?php 
include 'templates/pie.php';
?>