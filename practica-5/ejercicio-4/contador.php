<?php
session_start();
if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=1;
}elseif(isset($_SESSION['contador'])){
    $_SESSION['contador']=$_SESSION['contador']+1;
};
echo "Cantidad de paginas: ";
echo $_SESSION['contador'];
echo "</br><a href='contador.php'>Otra pagina</a>";
?>