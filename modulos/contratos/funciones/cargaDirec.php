<?php 

include("../../../core/conexion.php");

if(isset($_POST)){
    $idClient = $_POST["idSeleccionado"];

    $SQL = "SELECT * FROM domicilios WHERE id_cliente = $idClient ";

    $result = mysqli_query($conexion,$SQL);

if (!$result){
    die("Query faild".mysqli_error($conexion));
}

$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'id' => $row['id'],
        'calle' => $row['calle'],
        'interior' => $row['interior'],
        'exterior' => $row['exterior'],
        'colonia' => $row['colonia'],
        'estado' => $row['estado'],
        'pais' => $row['pais'],
        'referncias' => $row['referencias'],
    );   
}

$jsonString = json_encode($json);
echo $jsonString;
}
?>