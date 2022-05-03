<?php

$nombre = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];

$message = "Este mensaje fue enviado por : " . $nombre . ",\r\n";
$message = "Su e-mail es : " . $mail . ",\r\n";
$message = "Su numero es : " . $number . ",\r\n";
$message = "El asunto es : " . $asunto . ",\r\n";
$message = "Mensaje : " . $_POST['message'] . ",\r\n";
$message = "Enviado el : " . date('d/m/Y', time());

$para = 'lautcosta@gmail.com';
$asunto2 = 'Este mail fue enviado desde la web de Patricio ';

/* funcion mail */
mail($para, $asunto2, utf8_decode($message), $header);

header('Location:./pages/contactoSaludo.html);

?>