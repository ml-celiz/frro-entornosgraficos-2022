<html>
<head>
    <title>Alta Usuario</title>
</head>
<body>
    <?php
    include("conexion.inc");
    //Captura datos desde el formulario anterior
    $vID = $_POST['id'];
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHab = $_POST['hab'];
    $vSup = $_POST['sup'];
    $vMetro = $_POST['metro'];
    $vSql = "INSERT INTO Ciudades (id, ciudad, pais, habitantes, superficie , tieneMetro)
    values ('$vID','$vCiudad', '$vPais', '$vHab', '$vSup', '$vMetro')";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    echo("La Ciudad fue registrada, pronto recibirás un email confirmandote la actualización a
    nuestra pagina<br>");
    echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>