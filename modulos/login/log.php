<?php 

include("../../core/conexion.php");


if($_POST){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $SQL = "SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$password'";

    $resultado = $conexion->query($SQL);
    $num = $resultado->num_rows;

    if($num > 0){
        $row = $resultado->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['user'] = $row['usuario'];  
        $_SESSION['nivel'] = $row['nivel'];
        $_SESSION['name'] = $row['nombre'];
        $conexion->close();    
        header('location: ../home/vista.php');
        
    }
    else{
        header('location: ../../index.php');
    }


}

?>