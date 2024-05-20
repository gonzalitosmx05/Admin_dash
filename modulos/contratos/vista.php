<?php 
session_start();

if(isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
}

require ("../estructura/header.php");
include ("funciones/cargaClientes.php");
include ("modals/registClient.php");
include ("modals/DireClient.php");
include ("modals/historialContratos.php");
include ("modals/descContrato.php");
include ("modals/previewPDF.php");
require ("../estructura/sidebar.php");
?>

    <!--jsPDF-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<div class="p-2">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center"> 
                <p>Generar Contrato</p>
            </div>
            <div class="cadr-mb2">  <div class="card mb-2">
                <div class="card-header">
                    Informacion General
                </div>
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
                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#historialC">
                                <i class="fa-brands fa-searchengin"></i>
                               Historial de Contratos
                            </button>
                        </div>
                    </div>

                    
                </div>
                
            <div class="form-group w-50 mt-2">       
            <input type="hidden" id="CALLECLIENTE"> 
            <input type="hidden" id="folioInput">
            <input type="hidden" id="user" value ="<?php echo $user_id ?>">                         
                        <label class="d-block text-center" for="clientDirec">Calle</label>
                        <select name="clientDirec" id="clientDirec" style="width: 100%;" >
                        <option>Selecciona Domicilio</option>
                        </select>
              </div>    
          <div class="form-group d-flex">
          <div class="mr-3">
                  <label for="interiorDirectContrato">No.Interior</label>
                  <input type="text" class="form-control" id="interiorDirectContrato" placeholder="No.Int">
              </div>
              <div class="mr-3">
                  <label for="exteriorDirectContrato">No.Exterior</label>
                  <input type="text" class="form-control" id="exteriorDirectContrato" placeholder="No.Ext">
              </div>
            <div class="form-group mr-3">
              <label class="d-block text-center" for="coloniaDirectContrato">Colonia</label>
                <input type="text" class="form-control" id="coloniaDirectContrato" placeholder="Colonia">
            </div> 
            <div class="form-group mr-3">
              <label class="d-block text-center" for="ciudadDirectContrato">Ciudad</label>
              <input type="text" class="form-control" id="ciudadDirectContrato" placeholder="Ciudad">
            </div>
          </div>      
          <div class="d-flex">
            <div class="form-group mr-1">
              <label class="d-block text-center" for="estadoDirectContrato">Estado</label>
              <input type="text" class="form-control" id="estadoDirectContrato" placeholder="Estado">
            </div>      
            <div class="form-group mr-5">
              <label class="d-block text-center" for="paisDirectContrato">Pais</label>
                <input type="text" class="form-control" id="paisDirectContrato" placeholder="Pais" value="Mexico">
            </div> 
            
            <label class="d-block text-center" for="referenciaDirectContrato">Referencias de domicilio</label>
            <textarea id="referenciaDirectContrato"  class="form-control" aria-label="With textarea" rows="5"></textarea>
          
          </div>            
        </div>
            </div>
            
            <div class="cadr-mb2">  <div class="card mb-2">
                <div class="card-header">
                    Informacion Del Equipo
                </div>
                <div class="card-body">
                    <table class="table" id="tabla">
                        <thead class="bg text-black">                            
                                <th scope="col" style="width: 200px;">Marca</th>
                                <th scope="col" style="width: 200px;">Modelo</th>
                                <th scope="col" style="width: 200px;">No. Serie</th>
                                                          
                        </thead>
                        <tbody id="TBody">
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input  type="text" class=" form-control" placeholder="Marca" id="marca" name="sku[]" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class=" form-control" placeholder="Modelo" id="modelo" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="No. Serie" id="nserie" autocomplete="off" >
                                </td>
                            </tr>                        
                        </tbody>
                    </table>

                    <table class="table" id="tabla">
                        <thead class="bg text-black">                            
                                <th scope="col" style="width: 600px;">Descripcion</th>
                                <th scope="col" style="width: 200px;">Cantidad</th>
                                <th scope="col" style="width: 200px;">P.Unitario</th>
                                <th scope="col" style="width: 200px;">Subtotal</th>
                                                          
                        </thead>
                        <tbody id="TBody">
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" id="Desc_1" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" id="Cant_1" class="cantidad form-control" placeholder="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" id="PU_1" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]">
                                </td>
                                <td>
                                    <input disabled type="text" id="Sub_1" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" id="Desc_2" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" id="Cant_2" class="cantidad form-control" placeholder="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" id="PU_2" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]">
                                </td>
                                <td>
                                    <input disabled type="text" id="Sub_2" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" id="Desc_3"class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" id="Cant_3"class="cantidad form-control" placeholder="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" id="PU_3" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]">
                                </td>
                                <td>
                                    <input disabled type="text" id="Sub_3" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" id="Desc_4" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" id="Cant_4" class="cantidad form-control" placeholder="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" id="PU_4" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]">
                                </td>
                                <td>
                                    <input disabled type="text" id="Sub_4" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" id="Desc_5"id="Desc_1"class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" id="Cant_5"class="cantidad form-control" placeholder="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" id="PU_5"class="precio form-control" placeholder="0" autocomplete="off" name="precio[]">
                                </td>
                                <td>
                                    <input disabled type="text"id="Sub_5" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" id="Desc_6" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" id="Cant_6" class="cantidad form-control" placeholder="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" id="PU_6"class="precio form-control" placeholder="0" autocomplete="off" name="precio[]">
                                </td>
                                <td>
                                    <input disabled type="text" id="Sub_6"class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr> 
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" id="Desc_7"class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" id="Cant_7"class="cantidad form-control" placeholder="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" id="PU_7"class="precio form-control" placeholder="0" autocomplete="off" name="precio[]">
                                </td>
                                <td>
                                    <input disabled type="text" id="Sub_7"class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>                        
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mt-1">
                        <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Subtotal:</span>                            
                            </div>
                            <input type="text" class="form-control" id="subtotalGeneral" name="subtotalGeneral">
                        </div>                                         
                    </div>
                    <div class="d-flex justify-content-end mt-1">
                        <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">IVA:</span>                            
                            </div>
                            <input type="text" class="form-control" id="ivaGeneral" name="ivaGeneral">
                        </div>                                         
                    </div>
                    <div class="d-flex justify-content-end mt-1">
                        <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Total:</span>                            
                            </div>
                            <input type="text" class="form-control" id="totalGeneral" name="totalGeneral">
                        </div>                                         
                    </div>
                    <div class="d-flex justify-content-end mt-1 mr-3">
                        <button id="pdfButton"  type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalpreview">>
                            <i class="fa-solid fa-download"></i>
                            Generar Contrato
                        </button>                               
                    </div>

                </div>   
                
            </div>

            <div class="d-flex flex-row">
                <div class="card col mx-2">
                    <div class="card-header d-flex justify-content-between">
                        <span>Pago Del Equipo</span>                   
                    </div>                                
                    <div class="form-group w-50 mt-2">                    
                        <select name="state" id="selectpago" style="width: 100%;">
                        <option >Efectivo</option>
                        <option >Tarjeta</option>
                        <option >Cheque</option>
                        </select>                    
                    </div>
                    
                    <table class="table" id="table">
                        <thead class="bg text-black">                            
                                <th scope="col" style="width: 200px;">Anticipo #1</th>
                                <th scope="col" style="width: 200px;">Anticipo #2</th>
                                <th scope="col" style="width: 200px;">Balance</th>
                                                          
                        </thead>
                        <tbody id="balance">
                            <tr id="row" class="fila-fija">
                            <td>
                                    <input required type="text" id="A1"class="A1 form-control" placeholder="0" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="text" id="A2"class="A2 form-control"  autocomplete="off">
                                </td>
                                <td>
                                    <input disabled type="text" id="balance"class="balance form-control" placeholder="0" autocomplete="off">
                                </td>
                            </tr>                        
                        </tbody>
                    </table>                  
                    
                </div>
                <div class="card col mx-2">
                    <div class="card-header">
                        Notas
                    </div>            
                    <textarea class="form-control" aria-label="With textarea" id="notas" rows="10"></textarea>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>



<!--JQuery-->
<script src="../../assets/js/jquery-3.7.1.min.js"></script>
<script src="ajax.js"></script>
<script src="contratoPDF.js"></script>





<?php
require ("../estructura/footer.php");

?>