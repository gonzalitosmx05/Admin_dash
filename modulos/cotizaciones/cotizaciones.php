<?php 
session_start();
require ("../estructura/header.php");
include("funciones/cargarClientes.php");
include("modals/preview.php");
include("modals/agregar.php");
require ("../estructura/sidebar.php");
?>


<div class="p-2">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center">                 
                <p>Registro de cotizaciones </p>
                <p id="folioCotizacion"></p> 
                <button hidden id="botonDePruebas">PRUEBAS BASICAS</button>               
                <p hidden id="agenteName"><?php echo $_SESSION['name']; ?></p>
                <p hidden id="agenteIdRegistro"><?php echo $_SESSION['id']; ?></p>
            </div>                         

            <div class="card">
                <div class="card-header">                
                    <label for="barraBusqueda">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Buscar
                    </label>
                    <div class="d-flex">
                        <div class="">
                            <select class="form-control" id="filtroBusqueda">
                                <option>Conceptos</option>
                                <option>Agente</option>
                                <option>Cliente</option>
                            </select>
                        </div>
                        <div class=" ml-2" style="width: 100%;">   
                            <input id="barraBusqueda" class="form-control" type="text" placeholder="Buscar....">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table></table>
                </div>
            </div>
           

        </div>      
    </div>
</div>


<!--JQuery-->
<script src="../../assets/js/jquery-3.7.1.min.js"></script>

<script src="funciones_cot.js"></script>





<?php
require ("../estructura/footer.php");

?>