<?php 

include("../../../core/conexion.php");


if(isset($_POST["id"])){
    
    $id = $_POST["id"];

    $SQL = "SELECT * FROM clientes WHERE id = '$id'";    
    $result = mysqli_query($conexion, $SQL);


    if(!$result){
        die("Error al consultar ".mysqli_error($conexion));
    }


    $json = array();
    
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            "id"=>$row["id"],
            "nombre"=>$row["nombre"],
            "telefono"=>$row["telefono"],
            "telefono2"=>$row["telefono_2"],
            "correo"=>$row["correo"],
            "registro"=>$row["registro"],        
        );
    }
    
    $jsonString = json_encode($json[0]);
    echo $jsonString;
}



?>