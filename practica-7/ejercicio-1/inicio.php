<?php session_start() ?>
<?php
if(!empty($_GET["e"])){
    if($_GET["e"]=="azul"){
    $_SESSION["estilo"] = "azul";
    }
    elseif($_GET["e"]=="rojo"){
    $_SESSION["estilo"] = "rojo";
    }
    elseif($_GET["e"]=="amarillo"){
    $_SESSION["estilo"] = "amarillo";
    }
}
?>
<html>
<head>
<?php
if(!empty($_SESSION["estilo"]) AND $_SESSION["estilo"]== "azul")
echo'<link href="azul.css" rel="stylesheet" type="text/css">';
elseif(!empty($_SESSION["estilo"]) AND $_SESSION["estilo"]== "rojo")
echo'<link href="rojo.css" rel="stylesheet" type="text/css">';
elseif(!empty($_SESSION["estilo"]) AND $_SESSION["estilo"]== "amarillo")
echo'<link href="amarillo.css" rel="stylesheet" type="text/css">';
?>
</head>
<body>
dkfjghdkjghdf
dfgklj
dfgjdfg
<a href='ejercicio1.php?e=azul'>Color azul</a>
<a href='ejercicio1.php?e=rojo'>Color rojo</a>
<a href='ejercicio1.php?e=amarillo'>Color amarillo</a>
</body>
</html>
<?php
session_destroy();
?>