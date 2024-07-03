<?php 

include("../../../core/conexion.php");


if(isset($_POST['solage'])){
    echo "Funciona el post";
    $solage = $_POST['solage'];    
    $concepS = $_POST['concepS'];
    $agent = $_POST['agent'];
    $client = $_POST['client'];
    $ConS = $_POST['ConS'];
    $term = $_POST['term'];


    $SQL = "INSERT INTO `solicitudes`(`id_agente`, `id_cliente`, `agente`, `cliente`, `conceptos`,`Terminado`) 
    VALUES ('$solage','$ConS','$agent','$client','$concepS','$term')";
    
    $resultado = mysqli_query($conexion, $SQL);

    if(!$resultado){
        die("Error al realizar registro ".mysqli_error($conexion));        
    }

    echo "Solicitud Registrada";

}


?>

