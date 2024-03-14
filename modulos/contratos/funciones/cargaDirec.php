<?php 

include("../../core/conexion.php");

$SQL = "SELECT * FROM domicilios";

$result = mysqli_query($conexion, $SQL);

?>