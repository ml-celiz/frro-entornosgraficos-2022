<?php
function comprobar_nombre_usuario($nombre_usuario){

 //Compruebo que el tamaño del string sea válido. 
 if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){ 
 echo $nombre_usuario . " no es válido<br>"; 
 return false; 
 }

 //Compruebo que los caracteres sean los permitidos 
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_"; 
 for ($i=0; $i<strlen($nombre_usuario); $i++){ 
 if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){ 
 echo $nombre_usuario . " no es válido<br>"; 
 return false; 
 } 
 } 
 echo $nombre_usuario . " es válido<br>"; 
 return true; 
}

//Llamadas
comprobar_nombre_usuario("maria") //Para corroborar ambas validaciones
comprobar_nombre_usuario("ma") //Para corroborar primer validación longitud menor que 3
comprobar_nombre_usuario("marianievesabcdefghi12345") //Para corroborar primer validación longitud mayor que 20
comprobar_nombre_usuario("{.-.,lo") //Para corroborar segunda validación de caracteres
?>