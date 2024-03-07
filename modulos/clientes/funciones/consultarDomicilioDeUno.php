<?php 

include("../../../core/conexion.php");


if(isset($_POST["id"])){
    
    $id = $_POST["id"];

    $SQL = "SELECT * FROM domicilios WHERE id_cliente = '$id'";    
    $result = mysqli_query($conexion, $SQL);


    if(!$result){
        die("Error al consultar ".mysqli_error($conexion));
    }


    $json = array();
    
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            "id"=>$row["id"],
            "calle"=>$row["calle"],
            "interior"=>$row["interior"],
            "exterior"=>$row["exterior"],
            "colonia"=>$row["colonia"],
            "ciudad"=>$row["ciudad"],        
            "estado"=>$row["estado"],        
            "pais"=>$row["pais"],        
            "referencias"=>$row["referencias"]      
        );
    }
    
    $jsonString = json_encode($json);
    echo $jsonString;
}



?>