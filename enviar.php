<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];
$apellido = $_POST['apellido'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este Mensaje fue enviado desde tu pagina web por: " . $nombre . ",\r\n\n\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n\n";
$mensaje .= "Su número telefonico es: " . $tel . " \r\n\n";
$mensaje .= "Su Mensaje: " . $_POST['mensaje'] . " \r\n\n";
$mensaje .= "\nEnviado el: " . date('d/m/Y', time());

$para = 'bfmvmetal92@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index");





?>