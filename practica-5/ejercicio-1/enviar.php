<?php
$destinatario = $_POST['destinatario'];
$asunto = $_POST['asunto'];
$cuerpo = $_POST['cuerpo'];
mail($destinatario,$asunto,$cuerpo);
echo "Su consulta ha sido enviada, en breve recibirá una respuesta"
?>