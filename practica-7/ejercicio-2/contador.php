<?php
$archivo = "contador.dat";
$abrir = fopen($archivo, "a+");
$cont = fread($abrir, filesize($archivo));
$abrir = fopen($archivo, "w");
$cont = $cont + 1; 
$guardar = fwrite($abrir, $cont); 
fclose($abrir);
if ($cont == 1) {
  echo "Bienvenido";
  return;
}
echo "<font face='arial' size='3'> Cantidad de visitas:" . $cont . "</font>";