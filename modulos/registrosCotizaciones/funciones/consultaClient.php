<?php 


include("../../../core/conexion.php");

if(isset($_POST["id_client"])){
        
    $id_client = $_POST["id_client"];
    
    $SQL = "SELECT * FROM domicilios INNER JOIN clientes ON  domicilios.id_cliente = clientes.id WHERE domicilios.id_cliente = '$id_client'";

    $result = mysqli_query($conexion,$SQL);

    
    $json =array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            "id"=>$row["id_cliente"],
            "nombre"=>$row["nombre"],
            "telefono"=>$row["telefono"],
            "correo"=>$row["correo"],
            "di"=>$row["id"],
            "calle"=>$row["calle"],
            "ciudad"=>$row["ciudad"]
        );
    }
    
    $jsonString = json_encode($json);
    echo $jsonString;
    //echo "hecho";

}

?>