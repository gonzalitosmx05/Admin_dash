<?php 

include("../../../core/conexion.php");

if(isset($_POST["cliente"])){
    $id_cliente = $_POST["cliente"];
    $calle = $_POST["calle"];
    $exterior = $_POST["exterior"];
    $interior = $_POST["interior"];
    $colonia = $_POST["colonia"];
    $ciudad = $_POST["ciudad"];
    $estado = $_POST["estado"];
    $pais = $_POST["pais"];
    $referencia = $_POST["referencia"];

    $SQL = "INSERT INTO domicilios (id_cliente, calle, interior, exterior, colonia, ciudad, estado, pais, referencias)
     VALUES ('$id_cliente','$calle','$interior','$exterior','$colonia','$ciudad','$estado','$pais','$referencia')";
    $resultado = mysqli_query($conexion, $SQL);

    if(!$resultado){
        die("Error al realizar registro ".mysqli_error($conexion));        
    }

    echo "Domicilio Registrado";
} 

?>