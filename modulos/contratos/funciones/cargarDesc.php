<?php 

include("../../../core/conexion.php");

if(isset($_POST)){
    $Idcont = $_POST["contId"];

$SQL = "SELECT * FROM detalle_contratos WHERE id_contrato = $Idcont";

$result = mysqli_query($conexion, $SQL);

if(!$result){
    die("Error al consultar ".mysqli_error($conexion));
}

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        "id"=>$row["id_contrato"],
        "desc"=>$row["descripcion"],
        "cantidad"=>$row["cantidad"],        
        "p_u"=>$row["p_unitario"],
        "sub"=>$row["subtotal"]

    );
}

$jsonString = json_encode($json);
echo $jsonString;
}
?>