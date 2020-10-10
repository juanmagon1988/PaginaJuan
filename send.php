<?php

$destino="juanmagon1988@hotmail.com";
$name = $_POST["nombre"];
$mail = $_POST["mail"];
$text = $_POST["text"];

$content = "Nombre: " .  $name . "\nMail: " . $mail . "\nMensaje: " . $text;


mail($destino, "Mail desde la página", $content);

header("Location:index.php");





?>