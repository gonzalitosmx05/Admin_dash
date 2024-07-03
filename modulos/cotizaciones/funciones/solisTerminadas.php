<?php 

include("../../../core/conexion.php");

if(isset($_POST["idDs"])){
    
    $idN = $_POST["idDs"];

    $SQL = "UPDATE solicitudes SET Terminado = 'SI' WHERE id = $idN";

$result = mysqli_query($conexion, $SQL);

if(!$result){
    die("Error al consultar ".mysqli_error($conexion));
}


}

echo "SOLICITUD TERMINADA";


?>