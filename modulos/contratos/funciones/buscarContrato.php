<?php 

include("../../../core/conexion.php");

$filtro = $_POST['filtro'];
$busqueda = $_POST['buscar'];

$SQL = "SELECT * FROM contratos WHERE $filtro  LIKE '%$busqueda%'";
$result = mysqli_query($conexion, $SQL);

if(!$result){
    die("Error al consultar ".mysqli_error($conexion));
}

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        "id"=>$row["id"],
        "cliente"=>$row["nombre_Cliente"],
        "folio"=>$row["folio"],        
        "n_serie"=>$row["no_serie"],
        "domicilio"=>$row["domicilio"],
        "fc"=>$row["fecha_contrato"]

    );
}

$jsonString = json_encode($json);
echo $jsonString;
?>