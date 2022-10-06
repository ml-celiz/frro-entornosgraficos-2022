<?php
$destino="marialuzceliz@hotmail.com"; 
$asunto="Consulta";
$desde='From:' .$_POST['email'];
$comentario= "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Consulta: $_POST[texto]\n
\n
";
mail($destino,$asunto,$comentario,$desde);
echo "Su consulta ha sido enviada, en breve recibirá una respuesta.";
?>