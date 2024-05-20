<?php 
session_start();
require ("../estructura/header.php");
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
                        <div class="" style="width: 20%;">
                            <select class="form-control" id="filtroBusqueda">
                                <option value="notasFilter">Conceptos</option>
                                <option value="id_usuarioFilter">Agente</option>
                                <option value="id_clienteFilter">Cliente</option>
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
                                <td class="text-center" style="width: 10%;">Folio</td>
                                <td class="text-center" style="width: 10%;">Cliente</td>                
                                <td class="text-center" style="width: 10%;">Emision</td>                            
                                <td class="text-center" style="width: 65%;">Conceptos</td>`
                                <td class="text-center" style="width: 5%;">Opciones</td>
                            </tr>
                        </thead>

                        <tbody id="BodyCotizaciones">

                        </tbody>
                    </table>
                </div>
            </div>
           

        </div>      
    </div>
</div>


<!--JQuery-->
<script src="../../assets/js/jquery-3.7.1.min.js"></script>

<script src="funciones.js"></script>





<?php
require ("../estructura/footer.php");

?>