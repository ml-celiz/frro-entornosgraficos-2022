<?php
echo "
<html>
<body>
    <form action='cookienombre.php' method='POST'>
    <table>
        <tr>
            <td>Ingrese nombre:</td>
            <td><input type='text' required name='nombre'></td>
        </tr>
        <td><input type='submit'></td>
    </table>
    </form>
</body>
</html>
";
if(isset($_POST['nombre'])){
$nombre=$_POST['nombre'];
setcookie('nombre', $nombre, time()+60*60*24);
echo "Nombre: ";
echo $_COOKIE['nombre'];
}
else{
echo "Ingrese un nombre para continuar.";
};
?>