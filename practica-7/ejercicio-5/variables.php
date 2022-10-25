<?php
session_start();
$nombre=$_POST['nombre'];
$pass=$_POST['pass'];
$_SESSION['nombre']=$nombre;
$_SESSION['pass']=$pass;
echo "<a href='mostrar.php'>Continuar</a>";
?>