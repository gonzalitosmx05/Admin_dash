<?php   

include("../../../core/conexion.php");

// Consulta para obtener el último elemento
$sql = "SELECT * FROM cotizaciones ORDER BY id DESC LIMIT 1";
$result = $conexion->query($sql);
$row ;
if ($result->num_rows > 0) {
    // Mostrar el resultado
    $row = $result->fetch_assoc();
    //echo $row["id"]; // Cambia "nombre" por el nombre del campo que desees mostrar
} 


$id_cotizacion = $row["id"];

$data = json_decode(file_get_contents('php://input'), true);

// Verifica si se recibieron los datos correctamente
if ($data && isset($data['productos'])) {
    // Accede a los productos recibidos
    $productos = $data['productos'];

    // Haz lo que necesites con los productos
    // Por ejemplo, imprime cada producto
    foreach ($productos as $producto) {
       $descripcion = $producto['descripcion'] ;
       $sku=$producto['sku'];
       $cantidad=$producto['cantidad'];
       $unitario=$producto['unitario'];
       $subtotal=$producto['subtotal'];

        $sql1 = "INSERT INTO `detalles_cotizacion`(`id_cotizacion`, `descripcion`, `sku`, `cantidad`, `unitario`, `subtotal`) 
            VALUES ('$id_cotizacion','$descripcion','$sku','$cantidad','$unitario','$subtotal')";
        if ($conexion->query($sql1) === TRUE) {
            //echo "Venta registrada correctamente.";
        } else {
            //echo "Error: ";
        }
    }
} 

?>  