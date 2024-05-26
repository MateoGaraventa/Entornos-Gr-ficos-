Ejercicio 1 
Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, a través del servidor.

<?php
$destinatario = 'mateoogaraventa@gmail.com'; //correo del destinatario
$asunto = 'Prueba de correo'; //asunto
 
$mensaje = '

<!DOCTYPE html>
<html>
<head>
     <title>Correo Electronico</title>
</head>
<body>
    <h1>Ejemplo de Correo Electronico</h1>
    <p>Este es un ejemplo de correo electronico</p>
</body>
</html>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: mateoogaraventa@gmail.com' . "\r\n"; // Dirección de correo electrónico del remitente

if(mail($destinatario, $asunto, $mensaje, $headers)){
    echo "Correo enviado correctamente";
}else{
    echo "Error al enviar correo electronico";
}