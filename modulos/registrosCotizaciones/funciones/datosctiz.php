<?php 

include("../../../core/conexion.php");


if(isset($_POST["id_cot"])){
    
    $id = $_POST["id_cot"];

    $SQL = "SELECT * FROM cotizaciones WHERE id = '$id'";
    $result = mysqli_query($conexion, $SQL);


    if(!$result){
        die("Error al consultar ".mysqli_error($conexion));
    }


    $json = array();
    
    while($row = mysqli_fetch_array($result)){
        $id_usuario = $row["id_usuario"];
        
        
        $SQL_agente = "SELECT nombre FROM usuarios WHERE id = '$id_usuario'";
        $result_agente = mysqli_query($conexion, $SQL_agente);

        if($result_agente && $row_agente = mysqli_fetch_array($result_agente)){
            $nombre_agente = $row_agente["nombre"];
        }
        $json[] = array(
            "id"=>$row["id"],
            "agente"=>$nombre_agente,
            "emicion"=>$row["emision"],
            "expiracion"=>$row["expiracion"],
            "subtotal"=>$row["subtotal"],
            "iva"=>$row["iva"],
            "total"=>$row["total"],
            "notas"=>$row["notas"],       
        );
    }
    
    $jsonString = json_encode($json);
    echo $jsonString;
}



?>