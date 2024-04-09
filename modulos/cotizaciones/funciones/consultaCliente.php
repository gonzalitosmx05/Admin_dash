<?php 


include("../../../core/conexion.php");

if(isset($_POST["id"])){
        
    $id_cliente = $_POST["id"];
     
   
    
    $SQL = "SELECT * FROM clientes WHERE id = $id_cliente";

    $result = mysqli_query($conexion,$SQL);

    
    $json =array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            "id"=>$row["id"],
            "nombre"=>$row["nombre"],
            "telefono"=>$row["telefono"],
            "correo"=>$row["correo"]            
        );
    }
    
    $jsonString = json_encode($json);
    echo $jsonString;
    //echo "hecho";

}

?>