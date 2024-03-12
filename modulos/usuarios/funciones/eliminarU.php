<?php 

include("../../../core/conexion.php");

if($_POST["userId"]){
    $userId = $_POST['userId'];

    $sql = "DELETE FROM usuarios WHERE id='$userId'";
    $query = mysqli_query($conexion,$sql);

    
    header('Location: ../views/usuarios.php');

    echo "ID del boton recivido: $userId";
}else{
    echo "ID del boton no recivido";

}

?>