<?php
///llamado de los campos//
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

///Datos del correo //
 $destinatario = "al221711322@gmail.com, $correo";
 $asunto = "Gracias por contactarnos";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo\n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//Enviando mensaje
mail($destinatario, $asunto, $carta);

header('Location:mensaje-de-envio.html')
?>