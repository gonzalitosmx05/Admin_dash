<?php 

include("../../../core/conexion.php");

if(isset($_POST["nombre"])){
    $nombreCliente = strtoupper($_POST["nombre"]);
    $telefonoCliente = $_POST["telefono1"];
    $telefono2Cliente = $_POST["telefono2"];
    $correoCliente = $_POST["correo"];

    $SQL = "INSERT INTO clientes (nombre,telefono,telefono_2,correo) 
    VALUES ('$nombreCliente','$telefonoCliente','$telefono2Cliente','$correoCliente')";
    $resultado = mysqli_query($conexion, $SQL);

    if(!$resultado){
        die("Error al realizar registro ".mysqli_error($conexion));        
    }

    echo "Cliente Registrado";
} 

?>