<?php 

include("../../../core/conexion.php");

if($_POST["clientId"]){
    $IdCliente = $_POST['clientId'];

    $sql = "DELETE  FROM clientes WHERE id='$IdCliente'";
    $query = mysqli_query($conexion,$sql);

    

    echo "ID del boton recivido: $IdCliente";

}
else{
    echo "ID del boton no recivido";

}

?>