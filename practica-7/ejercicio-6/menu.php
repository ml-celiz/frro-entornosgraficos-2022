<?php
session_start();
if(isset($_SESSION['mail'])){
echo "Bienvenido alumno";
}
else{
echo "No tiene permiso para ver esta pagina.";
};
?>