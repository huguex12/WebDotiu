<?php
$destino= "dotiucr@gmail.com";
$nombre= $_Post["nombre"];
$asunto= $_Post["asunto"];
$correo= $_Post["correo"];
$telefono= $_Post["telefono"];
$mensaje= $_Post["mensaje"];

$contenido = "Nombre:" . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " .$mensaje;
mail($destino,$asunto,$contenido);
header("Location:home")
 ?>
