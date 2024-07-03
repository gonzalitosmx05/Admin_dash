<?php 

include("../../../core/conexion.php");


if(isset($_POST["id_cot"])){
    
    $id = $_POST["id_cot"];

    $SQL = "SELECT * FROM detalles_cotizacion id_cotizacion WHERE id_cotizacion = '$id'";
    $result = mysqli_query($conexion, $SQL);


    if(!$result){
        die("Error al consultar ".mysqli_error($conexion));
    }


    $json = array();
    
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            "id"=>$row["id_cotizacion"],
            "desc"=>$row["descripcion"],
            "sku"=>$row["sku"],
            "cantidad"=>$row["cantidad"],
            "uni"=>$row["unitario"],
            "subt"=>$row["subtotal"],        
        );
    }
    
    $jsonString = json_encode($json);
    echo $jsonString;
}



?>