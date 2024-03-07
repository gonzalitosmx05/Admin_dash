<?php 

include("../../../core/conexion.php");

if(isset($_POST["nombre"])){
    $nombre = strtoupper($_POST["nombre"]);
    $telefono = $_POST["telefono"];
    $nivel = $_POST["nivel"];
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];
    $estatus = "ACTIVO";

    $SQL = "INSERT INTO `usuarios`(`nombre`, `telefono`, `estatus`, `nivel`, `usuario`, `pass`)
     VALUES ('$nombre','$telefono','$estatus','$nivel','$usuario','$pass')";
    $resultado = mysqli_query($conexion, $SQL);

    if(!$resultado){
        die("Error al realizar registro ".mysqli_error($conexion));        
    }

    echo "Usuario Registrado";
} 

?>