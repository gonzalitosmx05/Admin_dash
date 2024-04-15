<?php 

include("../../../core/conexion.php");


if(isset($_POST['id_cliente'])){
    $idCliente = $_POST['id_cliente'];    
    $idUsuario = $_POST['id_usuario'];
    $emision = $_POST['emision'];
    $expiracion = $_POST['expiracion'];
    $subtotal = $_POST['subtotal'];
    $iva = $_POST['iva'];
    $total = $_POST['total'];
    $notas = $_POST['notas'];
    $validarIva = $_POST['validariva'];

    $SQL = "INSERT INTO `cotizaciones`(`id_cliente`, `id_usuario`, `emision`, `expiracion`, `subtotal`, `iva`, `total`, `notas`, `validarIva`) 
    VALUES ('$idCliente','$idUsuario','$emision','$expiracion','$subtotal','$iva','$total','$notas','$validarIva')";
    
    $resultado = mysqli_query($conexion, $SQL);

    if(!$resultado){
        die("Error al realizar registro ".mysqli_error($conexion));        
    }

    echo "Cotizacion Registrada";

}


?>