<?php 

include("../../../core/conexion.php");

$SQL = "SELECT * FROM usuarios";

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
        "registro"=>$row["registro"],        
        "estatus"=>$row["estatus"]
    );
}

$jsonString = json_encode($json);
echo $jsonString;

?>