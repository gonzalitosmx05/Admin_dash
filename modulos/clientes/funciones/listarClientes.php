<?php 

include("../../../core/conexion.php");

$SQL = "SELECT * FROM clientes";

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
        "correo"=>$row["correo"],
        "registro"=>$row["registro"],        
    );
}

$jsonString = json_encode($json);
echo $jsonString;

?>