<?php 

include("../../../core/conexion.php");

$SQL = "SELECT * FROM solicitudes WHERE Terminado = 'NO' ";

$result = mysqli_query($conexion, $SQL);

if(!$result){
    die("Error al consultar ".mysqli_error($conexion));
}

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        "id"=>$row["id"],
        "id_c"=>$row["id_cliente"],
        "agente"=>$row["agente"],
        "cliente"=>$row["cliente"],        
        "concep"=>$row["conceptos"],        
    );
}

$jsonString = json_encode($json);
echo $jsonString;

?>