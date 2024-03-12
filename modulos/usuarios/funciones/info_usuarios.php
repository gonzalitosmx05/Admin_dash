<?php 

/*include("../../../core/conexion.php");

if(isset($_POST["userId"])){
    $id = $_POST["userId"];
  
    $sql = "SELECT * FROM usuarios WHERE id = '$id' ";

    $result = mysqli_query($conexion,$sql);

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'telefono' => $row['telefono'],
        'resgistro' => $row['registro'],
        'estatus' => $row['estatus'],
        'nivel' => $row['nivel'],
        'usuario' => $row['usuario'],
        'pass' => $row['pass'],

    );   
    }
    
    $jsonString = json_encode($json);
    echo $jsonString;

}*/
    

include("../../../core/conexion.php");

if(isset($_POST["userId"])){
    $id = mysqli_real_escape_string($conexion, $_POST["userId"]); // Use mysqli_real_escape_string for input sanitization

    $sql = "SELECT * FROM usuarios WHERE id = '$id' ";

    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($conexion));
    }

    $json = array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'telefono' => $row['telefono'],
            'resgistro' => $row['registro'],
            'estatus' => $row['estatus'],
            'nivel' => $row['nivel'],
            'usuario' => $row['usuario'],
            'pass' => $row['pass'],
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
}

?>