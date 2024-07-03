<?php 

include("../../../core/conexion.php");

$filtro = $_POST['filtro'];
$busqueda = $_POST['buscar'];

$SQL = "SELECT 
    cotizaciones.id AS id_cotizacion, 
    clientes.id AS id_cliente,
    clientes.nombre AS nombre_cliente, 
    cotizaciones.emision, 
    GROUP_CONCAT(detalles_cotizacion.descripcion SEPARATOR ', ') AS descripcion
    FROM 
    cotizaciones
    INNER JOIN 
    clientes ON cotizaciones.id_cliente = clientes.id
    JOIN 
    detalles_cotizacion ON cotizaciones.id = detalles_cotizacion.id_cotizacion
    WHERE $filtro LIKE '%$busqueda%'
    GROUP BY 
    cotizaciones.id";

    
    $SQL2 = "SELECT id_cotizacion, descripcion FROM detalles_cotizacion  WHERE $filtro  LIKE '%$busqueda%'";


    $result = mysqli_query($conexion, $SQL);
    $result2 = mysqli_query($conexion, $SQL2);

    
    if(!$result){
        die("Error al consultar ".mysqli_error($conexion));
    }

    $json = array();

    while($row = mysqli_fetch_array($result)){
       
       
        $json[] = array(
            "id_cotizacion"=>$row["id_cotizacion"],
            "id_cliente"=>$row["id_cliente"],                   
            "nombre_cliente"=>$row["nombre_cliente"],                   
            "emision"=>$row["emision"],   
            "descripcion"=>$row["descripcion"]                
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
    

?>

