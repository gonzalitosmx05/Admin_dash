<?php 

include("../../core/conexion.php");

$SQL = "SELECT * FROM clientes";

$result = mysqli_query($conexion, $SQL);

?>