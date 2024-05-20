<?php 

include("../../../core/conexion.php");

if(isset($_POST["Idclient"])){
    $Idclient = $_POST["Idclient"];
    $Iduser = $_POST["Iduser"];
    $ncliente = $_POST["Nmclient"];
    $ciud = $_POST["cuid"];
    $est = $_POST["est"];
    $ce = $_POST["CE"];
    $tel1 = $_POST["tel1"];
    $tel2 = $_POST["tel2"];
    $folio = $_POST["folio"];
    $domi = $_POST["domi"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $n_serie = $_POST["n_serie"];
    $anticipo1 = $_POST["anticipo1"];
    $anticipo2 = $_POST["anticipo2"];
    $balance = $_POST["balance"];
    $subtotal = $_POST["subtotal"];
    $iva = $_POST["iva"];
    $total = $_POST["total"];
    $f_pago = $_POST["f_pago"];
    $notas = $_POST["notas"];

    $SQL = "INSERT INTO contratos (id_cliente, id_usuario, nombre_Cliente, ciudad, estado, correo, telefono_1, telefono_2, folio, domicilio ,marca, modelo, no_serie, anticipo_1, anticipo_2, balance, subtotal, iva, total, f_pago, notas) 
    VALUES ('$Idclient','$Iduser','$ncliente','$ciud','$est','$ce','$tel1','$tel2','$folio','$domi','$marca','$modelo','$n_serie','$anticipo1','$anticipo2','$balance','$subtotal','$iva','$total','$f_pago','$notas')";
    $resultado = mysqli_query($conexion, $SQL);

    if(!$resultado){
        die("Error al realizar registro ".mysqli_error($conexion));        
    }


    

    //Recuperamos el Id del general del contrato
    $SQL_GEN_CONT = "SELECT id FROM contratos WHERE id = (SELECT MAX(id) FROM contratos)";
    $GEN_CONT_RES = mysqli_query($conexion,$SQL_GEN_CONT);
    $CONT_RES = mysqli_fetch_row($GEN_CONT_RES);
    $id_contrato = $CONT_RES[0];

   
    //Recuperamos los arrays de items para iterar y registrar
    $items1 = ($_POST['desc']);
    $items2 = ($_POST['cant']);
    $items3 = ($_POST['precio']);
    $items4 = ($_POST['subT']);
    
    
    //-----------------------FUNCIONANDO--------------------------------------

    while(true){

        //SEPARAR VALORES DE LOS ARREGLOS
        $item1 = current($items1);
        $item2 = current($items2);
        $item3 = current($items3);
        $item4 = current($items4);
        

        //Asignacion  de variables 
        $descripcion = (($item1 !== false) ? $item1: ",&nbsp;");
        $cantidad = (($item2 !== false) ? $item2: ",&nbsp;");
        $P_unitario = (($item3 !== false) ? $item3: ",&nbsp;");
        $total = (($item4 !== false) ? $item4: ",&nbsp;");

        $valores = "('$id_contrato','$descripcion','$cantidad','$P_unitario','$total'),";

        $valoresQ = substr($valores,0,-1);


        $SQL = "INSERT INTO detalle_contratos(id_contrato,descripcion,cantidad,p_unitario,subtotal) VALUES $valoresQ";

        $sqlRes = mysqli_query($conexion, $SQL) or mysql_error();

        $item1 = next ($items1);
        $item2 = next ($items2);
        $item3 = next ($items3);
        $item4 = next ($items4);

        if($item1 == false && $item2==false && $item3==false && $item4==false) break;
    };

    echo "Cliente Registrado";


}

//Creamos sentencia SQL

//Cargamos los datos a DB 

//Redirigimos a Animacion y/o a Cotizacion Creada*/
    /*  header('location: ');  */
?>
