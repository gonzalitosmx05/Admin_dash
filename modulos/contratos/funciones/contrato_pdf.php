<?php
include("../../../core/conexion.php");

if(isset($_POST["cont"])){
    $Idcont = $_POST["cont"];

    // Consulta para obtener los datos principales del contrato
    $SQL_contrato = "SELECT * FROM contratos WHERE id = '$Idcont'";
    $result_contrato = mysqli_query($conexion, $SQL_contrato);

    if(!$result_contrato){
        die("Error al consultar ".mysqli_error($conexion));
    }

    $contrato = mysqli_fetch_assoc($result_contrato);

    // Consulta para obtener los detalles del contrato
    $SQL_detalle = "SELECT * FROM detalle_contratos WHERE id_contrato = '$Idcont'";
    $result_detalle = mysqli_query($conexion, $SQL_detalle);

    if(!$result_detalle){
        die("Error al consultar ".mysqli_error($conexion));
    }

    $detalles = array();

    while($row_detalle = mysqli_fetch_assoc($result_detalle)){
        $detalles[] = array(
            "desc" => $row_detalle["descripcion"],
            "cantidad" => $row_detalle["cantidad"],
            "p_u" => $row_detalle["p_unitario"],
            "sub" => $row_detalle["subtotal"]
        );
    }

    // Combinar datos del contrato y detalles en un solo array
    $json = array(
        "nombre" => $contrato["nombre_Cliente"],
        "ciudad" => $contrato["ciudad"],
        "estado" => $contrato["estado"],
        "correo" => $contrato["correo"],
        "tel1" => $contrato["telefono_1"],
        "tel2" => $contrato["telefono_2"],
        "folio" => $contrato["folio"],
        "domi" => $contrato["domicilio"],
        "marca" => $contrato["marca"],
        "modelo" => $contrato["modelo"],
        "nserie" => $contrato["no_serie"],
        "ant1" => $contrato["anticipo_1"],
        "ant2" => $contrato["anticipo_2"],
        "balance" => $contrato["balance"],
        "fecha" => $contrato["fecha_contrato"],
        "subT" => $contrato["subtotal"],
        "iva" => $contrato["iva"],
        "total" => $contrato["total"],
        "f_pago" => $contrato["f_pago"],
        "notas" => $contrato["notas"],
        "detalles" => $detalles
    );

    // Convertir a JSON y enviar la respuesta al frontend
    $jsonString = json_encode($json);
    echo $jsonString;
}
?>
