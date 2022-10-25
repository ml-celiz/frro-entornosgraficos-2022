<?php
session_start();
echo "Nombre: ";
echo $_SESSION['nombre'];
echo "</br>";
echo "Contrase&ntilde;a: ";
echo $_SESSION['pass'];
echo "</br>";
echo "</br>";
echo "<a href='formu.html'>Volver al inicio</a>"
?>