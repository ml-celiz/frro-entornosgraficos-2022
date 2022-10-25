<?php
session_start();
$link=mysqli_connect("localhost", "root", "") or die ("Problemas de conexion a la base de datos");
mysqli_select_db($link, "base2");
$mail=$_POST['mail'];
$consulta="SELECT * FROM alumnos WHERE mail='$mail'";
$resultado=mysqli_query($link, $consulta);
if(mysqli_num_rows($resultado)>0){
$_SESSION['mail']=$mail;
 echo "<a href='menu.php'>Continuar</a>";
}
else{
session_destroy();
echo "<a href='menu.php'>Continuar</a>";
}
mysqli_close($link);
?>
