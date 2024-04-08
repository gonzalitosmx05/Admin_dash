<?php 
include("../../../core/conexion.php");

// Consulta para obtener el último elemento
$sql = "SELECT * FROM cotizaciones ORDER BY id DESC LIMIT 1";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Mostrar el resultado
    $row = $result->fetch_assoc();
    echo $row["id"]; // Cambia "nombre" por el nombre del campo que desees mostrar
} 

?>