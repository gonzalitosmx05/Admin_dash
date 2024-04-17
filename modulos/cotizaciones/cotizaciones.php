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
                                <option value="notas">Conceptos</option>
                                <option value="id_usuario">Agente</option>
                                <option value="id_cliente">Cliente</option>
                            </select>
                        </div>
                        <div class=" ml-2" style="width: 100%;">   
                            <input id="barraBusqueda" class="form-control" type="text" placeholder="Buscar....">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <td class="text-center">Id</td>
                                <td class="text-center">Cliente</td>                
                                <td class="text-center">Agente</td>
                                <td class="text-center">Emision</td>                            
                                <td class="text-center">Expiración</td>
                                <td class="text-center">Subtotal</td>
                                <td class="text-center">IVA</td>
                                <td class="text-center">Total</td>
                                <td class="text-center">Notas</td>
                            </tr>
                        </thead>

                        <tbody id="Cotiz"></tbody>
                    </table>
                </div>
            </div>
           

        </div>      
    </div>
</div>


<!--JQuery-->
<script src="../../assets/js/jquery-3.7.1.min.js"></script>

<script src="cotiz.js"></script>





<?php
require ("../estructura/footer.php");

?>