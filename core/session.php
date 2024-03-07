<?php 

session_start();

if(!isset($_SESSION["usuario"]) || (trim($_SESSION["usuario"]) == "")) {
    header("location:modulos/login/vista.php");
}else{
    header("location:modulos/home/vista.php");
}

$correo=$_SESSION["usuario"];


?>