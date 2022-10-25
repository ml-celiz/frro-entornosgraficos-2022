<html>
<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    $vID = $_POST['ID'];
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHab = $_POST['hab'];
    $vSup = $_POST['sup'];
    $vMetro = $_POST['metro'];
    $vSql = "UPDATE Ciudad set id='$vID', ciudad='$vCiudad', pais='$vPais', superficie='$vSup', tieneMetro='$vMetro' where
    id='$vID'";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    echo("La ciudad fue modificada<br>");
    echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
    mysqli_close($link);
    ?>
</body>
</html>