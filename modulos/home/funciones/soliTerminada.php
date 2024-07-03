<?php 

include("../../../core/conexion.php");

if(isset($_POST["id_soli"])){

    $id_Soli = $_POST["id_soli"];
   

$SQL = "UPDATE solicitudes SET Terminado = 'SI' WHERE id = '$id_Soli'";    
    $resultado = mysqli_query($conexion, $SQL);

    if(!$resultado){
        die("Error al realizar registro ".mysqli_error($conexion));        
    }

   
    echo "Cambio Registrado";
        
}

?>

