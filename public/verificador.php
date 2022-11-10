


<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<br/>
<br/>






<?php  

//print_r($_GET);


$ClientID="ATAQbq5PvOH03GDQUaRLoyLU_MztudCmweOoOhg2Y5_fYAwQDBH-EsUoMQb1OxtMznwyUplbj2hNrxCC";
$Secret="EJtXFAxUTwmiGwDgPtkcBAP5KN7rLReSgT2TpsaIMEepEbzQMw1W70zR8mC0oaVdym8GYaSATc2JJMxP";

$Login=curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");

curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($Login, CURLOPT_USERPWD,$ClientID.":".$Secret);

curl_setopt($Login, CURLOPT_POSTFIELDS,"grant_type=client_credentials");

$Respuesta=curl_exec($Login);

$objRespuesta=json_decode($Respuesta);

$AccessToken=$objRespuesta->access_token;

//print_r($AccessToken);


$venta= curl_init("https://api.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']);

curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccessToken));

curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);

$RespuestaVenta=curl_exec($venta);
//print_r($RespuestaVenta);
 $objDatosTransaccion=json_decode($RespuestaVenta);


// print_r($objDatosTransaccion->payer->payer_info->email);
///////////////////////////////////////////////////
$state=$objDatosTransaccion->state;
$email=$objDatosTransaccion->payer->payer_info->email;

$total= $objDatosTransaccion->transactions[0]->amount->total;
$currency= $objDatosTransaccion->transactions[0]->amount->currency;
$custom= $objDatosTransaccion->transactions[0]->custom;

$clave=explode("#",$custom);

$SID=$clave[0];
$claveVenta=openssl_decrypt($clave[1],COD,KEY);
//////////////////////////////////////////////////////////////////////////

curl_close($venta);
curl_close($Login);



if ($state=="approved") {

 $mensajePaypal="<h3>Pago Aprovado</h3>";

$sentencia=$pdo->prepare("UPDATE `tblventas` 
SET `PaypalDatos` =:PaypalDatos, 
 `status` = 'aprobado' WHERE `tblventas`.`ID` =:ID;");

$sentencia->bindParam(":ID",$claveVenta);
$sentencia->bindParam(":PaypalDatos",$RespuestaVenta);
$sentencia->execute();


}else{
	$mensajePaypal="<h3>Hay un problema con el pago</h3>";
}
echo $mensajePaypal;








?>


























