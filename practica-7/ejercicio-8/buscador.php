<?php
$link=mysqli_connect("localhost", "root", "") or die ("Problemas de conexion a la base de datos");
mysqli_select_db($link, "prueba");
$palabra=$_POST['palabra'];
$consulta="SELECT * FROM buscador WHERE canciones LIKE '%".$palabra."%'";
$resultado=mysqli_query($link, $consulta);
if(mysqli_num_rows($resultado)>0){
    while($fetch=mysqli_fetch_assoc($resultado)){
        echo " Titulo de la cancion: ";
        echo $fetch['canciones'];
        echo "</br>";   
    }
echo "<a href='buscador.html'>Volver.</a>";
}
else{
echo "No hay canciones que coincidan con la palabra. <a href='buscador.html'>Volver.</a>";
};
mysqli_close($link);
?>