<?php 

include("../../../core/conexion.php");

    $variable = $_POST['variable'];

    $SQL = "SELECT * FROM clientes WHERE id = '$variable' ";

    $result = mysqli_query($conexion,$SQL);

if (!$result){
    die("Query faild".mysqli_error($conexion));
}

$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'telefono' => $row['telefono'],
        'telefono_2' => $row['telefono_2'],
        'correo' => $row['correo'],
    );   
}

$datos = json_encode($json);
echo $datos;
?>