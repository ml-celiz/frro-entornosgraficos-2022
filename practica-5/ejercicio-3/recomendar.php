<?php
$destinatario = $_POST['mail'];
$asunto = "Tu amigo te ha recomendado este sitio!";
$cuerpo = "Hola! Tu amigo penso que nuestro sitio te gustaria.";
mail($destinatario,$asunto,$cuerpo);
?>