
<?php 
require ("../estructura/header.php");
include("modal/agregar.php");
include("funciones/cargarClientes.php");
include("modal/domicilio.php");
include("modal/info_cliente.php");
include("modal/eliminar.php");
require ("../estructura/sidebar.php");
?>




<div class="p-2">
    <div class="card">
        <div class="card-body">
            <div class="d-flex p-2 justify-content-center">                 
                <p>Administracion de Clientes </p>
            </div>
            
            <div class="d-flex justify-content-center">
                <button  type="button" class="btn btn-success ml-1 mr-1" data-toggle="modal" data-target="#agregarCliente">
                    <i class="fa-solid fa-user-plus"></i>
                    Nuevo cliente
                </button>
                <button  type="button" class="btn btn-primary ml-1 mr-1" data-toggle="modal" data-target="#agregarDomicilio">
                    <i class="fa-solid fa-street-view"></i>
                    Registrar Domicilio
                </button>
            </div>
        </div>

        <!--
        <div class="ml-2 mr-2">
            <form class="d-flex justify-content-center">
                <select class="form-control w-25 mr-1" id="filtro" name="filtro">
                  <option value="nombre">Nombre</option> 
                  <option value="telefono">Telefono</option>                       
                </select>         
                <input type="search" id="search" placeholder="Buscar" class="form-control me-2 w-50">
                <a type="submit" class="btn btn-warning ml-1">
                    <i class='bx bx-search-alt'></i>
                </a>
            </form>
        </div>

        <div class="m-3" id="tabla_busqueda" >
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <td class="text-center">Id</td>
                        <td class="text-center">Nombre</td>                
                        <td class="text-center">Telefono</td>
                        <td class="text-center">Acciones</td>

                    </tr>
                </thead>

                <tbody id="registros_busqueda"></tbody>
            </table>
        </div>-->

        <div class="m-3">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <td class="text-center">Id</td>
                        <td class="text-center">Nombre</td>                
                        <td class="text-center">Telefono</td>
                        <td class="text-center">Correo</td>                            
                        <td class="text-center">Registro</td>
                        <td class="text-center">Acciones</td>

                    </tr>
                </thead>

                <tbody id="registros"></tbody>
            </table>
        </div>
       
    </div>
    
</div>


 <!--JQuery-->
 <script src="../../assets/js/jquery-3.7.1.min.js"></script>

<script src="ajax.js"></script>


<?php

require ("../estructura/footer.php");

?>