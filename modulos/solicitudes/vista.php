<?php 
session_start();
require ("../estructura/header.php");
include("funciones/cargarClientes.php");
include("modals/agregarclient.php");
require ("../estructura/sidebar.php");
?>


<div class="p-2">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center">                 
                <p>Solicitar Cotizaciones </p>
                <p id="folioCotizacion"></p> 
                <button hidden id="botonDePruebas">PRUEBAS BASICAS</button>               
                <p hidden id="agenteName"><?php echo $_SESSION['name']; ?></p>
                <p hidden id="agenteIdRegistro"><?php echo $_SESSION['id']; ?></p>
            </div>                         

            <div class="card" id="solicis">
                <div class="card-header">                
                    <label for="barraBusqueda">
                        Cliente
                    </label>
                    <div class="d-flex">
                    <div class="form-group w-50 mt-2">                    
                        <select name="state" id="selectClienteSoli" style="width: 100%;">
                            <option >Selecciona al Cliente</option>
                            <?php while($var = mysqli_fetch_row($result)){?>
                            <option value="<?php echo $var[0]?>"><?php echo $var[1]?></option>
                            <?php }?>
                        </select>                    
                    </div>

                    <div class="btn-group dropright mt-2 ml-5">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            OPCIONES                            
                            <i class="fa-solid fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#agregarCliente">
                                <i class="fa-solid fa-user-plus"></i>
                                Registrar Cliente
                            </button>                            
                        </div>
                    </div>
                        
                    </div>
                </div>

                <div class="card-body">
                <h5>Conceptos</h5>
                <textarea class="form-control" id="conceptosSoli" name="conceptosSoli" rows="10"></textarea>
                <br>
                <button id="soli" id-data="<?php echo $_SESSION['id']; ?>" id-agent="<?php echo $_SESSION['name']; ?>" class="btn btn-success">
                <i class='bx bx-send'></i>
                Solicitar
            </button> 
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