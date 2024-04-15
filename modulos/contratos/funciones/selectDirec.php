<?php 

include("../../../core/conexion.php");

if(isset($_POST["clientId"])){
    $ca = mysqli_real_escape_string($conexion, $_POST["clientId"]); // Use mysqli_real_escape_string for input sanitization

    $sql = "SELECT * FROM domicilios WHERE id = '$ca' ";

    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($conexion));
    }

    $json = array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'calle' => $row['calle'],
            'interior' => $row['interior'],
            'exterior' => $row['exterior'],
            'colonia' => $row['colonia'],
            'ciudad' => $row['ciudad'],
            'estado' => $row['estado'],
            'pais' => $row['pais'],
            'referencias' => $row['referencias'],
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
}
?>