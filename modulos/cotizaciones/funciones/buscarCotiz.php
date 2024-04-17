<?php 

include("../../../core/conexion.php");

$filtro = $_POST['filtro'];
$busqueda = $_POST['buscar'];

$SQL = "SELECT * FROM cotizaciones WHERE $filtro  LIKE '%$busqueda%'";
$result = mysqli_query($conexion, $SQL);

if(!$result){
    die("Error al consultar ".mysqli_error($conexion));
}

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        "id"=>$row["id"],
        "cliente"=>$row["id_cliente"],
        "agente"=>$row["id_usuario"],        
        "emicion"=>$row["emisio"],        
        "expiracion"=>$row["expiracion"],
        "subtotal"=>$row["subtotal"],
        "iva"=>$row["iva"],
        "total"=>$row["total"],
        "notas"=>$row["notas"]

    );
}

$jsonString = json_encode($json);
echo $jsonString;
?>