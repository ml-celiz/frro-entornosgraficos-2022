<html>
<head>
    <title>Baja</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    $vID = $_POST ['id'];
    $vSql = "SELECT * FROM Ciudades WHERE id='$vID' ";
    $vResultado = mysqli_query($link, $vSql);
    if(mysqli_num_rows($vResultado) == 0){
    echo ("Ciudad Inexistente!<br>");
    echo ("<A href='FormBajaIni.html'>Continuar</A>");
    }
    else{
    $vSql= "DELETE FROM Ciudades WHERE id = '$vID' ";
    mysqli_query($link, $vSql);
    echo("La ciudad fue borrada<br>");
    echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>