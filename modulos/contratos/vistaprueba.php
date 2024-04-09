<?php 
session_start();
require ("../estructura/header.php");
include ("funciones/cargaClientes.php");
include ("modals/registClient.php");
include ("modals/DireClient.php");
require ("../estructura/sidebar.php");
?>
<div class="d-flex justify-content-center align-items-center">                    
                    <div class="form-group w-50 mt-2">                    
                        <label class="d-block text-center" for="selectCliente">Cliente</label>
                        <select name="state" id="selectCliente" style="width: 100%;" >
                        <option >Selecciona al Cliente</option>
                            <?php while($var = mysqli_fetch_row($result)){?>
                            <option value="<?php echo $var[0]?>"><?php echo $var[1]?></option>
                            <?php }?>
                        </select>
                    </div>               
                    <div class="btn-group dropright mt-4 ml-3">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            OPCIONES                            
                            <i class="fa-solid fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#Registclient">
                                <i class="fa-solid fa-user-plus"></i>
                                Registrar Cliente
                            </button>                            
                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#DireClient">
                                <i class="fa-brands fa-searchengin"></i>
                                Registrar Direccion
                            </button>
                        </div>
                    </div>

                    
                </div>
                
                <div class="form-group w-50 mt-2">                    
                        <label class="d-block text-center" for="clientDirec">Calle</label>
                        <select name="state" id="clientDirec" style="width: 100%;" >
                        <option >Selecciona Domicilio</option>
                        </select>
              </div>    
          <div class="form-group d-flex">
          <div class="mr-3">
                  <label for="interiorD">No.Interior</label>
                  <input type="text" class="form-control" id="interiorD" placeholder="No.Int">
              </div>
              <div class="mr-3">
                  <label for="exteriorD">No.Exterior</label>
                  <input type="text" class="form-control" id="exteriorD" placeholder="No.Ext">
              </div>
            <div class="form-group mr-3">
              <label class="d-block text-center" for="coloniaD">Colonia</label>
                <input type="text" class="form-control" id="coloniaD" placeholder="Colonia">
            </div> 
            <div class="form-group mr-3">
              <label class="d-block text-center" for="ciudadD">Ciudad</label>
              <input type="text" class="form-control" id="ciudadD" placeholder="Ciudad">
            </div>
          </div>      
          <div class="d-flex">
            <div class="form-group mr-1">
              <label class="d-block text-center" for="estadoD">Estado</label>
              <input type="text" class="form-control" id="estadoD" placeholder="Estado">
            </div>      
            <div class="form-group mr-5">
              <label class="d-block text-center" for="paisD">Pais</label>
                <input type="text" class="form-control" id="paisD" placeholder="Pais" value="Mexico">
            </div> 
            
            <label class="d-block text-center" for="referenciaD">Referencias de domicilio</label>
            <textarea id="referenciaD"  class="form-control" aria-label="With textarea" rows="5"></textarea>
            <script src="../../assets/js/jquery-3.7.1.min.js"></script>
<script src="ajax.js"></script>