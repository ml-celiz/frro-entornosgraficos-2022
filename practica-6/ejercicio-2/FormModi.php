<html>
<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    $vID = $_POST['id'];
    $vSql = "SELECT * FROM Ciudades WHERE id ='$vID' ";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
    $fila = mysqli_fetch_array($vResultado);
    if(mysqli_num_rows($vResultado) == 0){
    echo ("Ciudad Inexistente...!!! <br>"); 
    echo ("<A href='FormModiIni.html'>Continuar</A>");
    }
    else{
    ?>
    <form action="Modi.php" method="POST" name="FormModi">
    <table width="356">
        <tr>
            <td width="103"> ID: </td>
            <td width="243"> <input type="text" name="ID" value="<?php
            echo($fila['id']); ?>">
            </td>
        </tr>
        <tr>
            <td width="103"> Ciudad: </td>
            <td width="243"> <input type="text" name="ciudad" value="<?php
            echo($fila['Ciudad']); ?>">
            </td>
        </tr>
        <tr>
            <td width="103"> Pais: </td>
            <td width="243"> <input type="TEXT" name="pais" size="20" maxlength="20"
            value="<?php echo($fila['pais']); ?>">
            </td>
        </tr>
        <tr>
            <td width="103"> Habitantes: </td>
            <td width="243"> <input type="TEXT" name="hab" size="20" maxlength="20"
            value="<?php echo($fila['habitantes']); ?>">
            </td>
        </tr>
        <tr>
            <td width="103"> Superficie: </td>
            <td width="243"> <input type="TEXT" name="sup" size="20" maxlength="40"
            value="<?php echo($fila['superficie']); ?>">
            </td>
        </tr>
        <tr>
            <td width="103"> tieneMetro: </td>
            <td width="243"> <input type="TEXT" name="metro" size="20" maxlength="40"
            value="<?php echo($fila['tieneMetro']); ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
            value="Modificar">
            </td>
        </tr>
    </table>
    </form>
    <?php}
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>