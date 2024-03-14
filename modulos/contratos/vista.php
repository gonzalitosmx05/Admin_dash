<?php 
session_start();
require ("../estructura/header.php");
include ("funciones/cargaClientes.php");
include ("modals/registClient.php");
include ("modals/DireClient.php");
require ("../estructura/sidebar.php");
?>


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
                                Escojer Direccion
                            </button>
                        </div>
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
                                    <input  type="text" class=" form-control" placeholder="Marca" name="sku[]" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class=" form-control" placeholder="Modelo" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="No. Serie" autocomplete="off" >
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
                                    <input required type="text" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" class="cantidad form-control" value="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]"">
                                </td>
                                <td>
                                    <input disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" class="cantidad form-control" value="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]"">
                                </td>
                                <td>
                                    <input disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" class="cantidad form-control" value="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]"">
                                </td>
                                <td>
                                    <input disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" class="cantidad form-control" value="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]"">
                                </td>
                                <td>
                                    <input disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" class="cantidad form-control" value="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]"">
                                </td>
                                <td>
                                    <input disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                            </tr>
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" class="cantidad form-control" value="0" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]"">
                                </td>
                                <td>
                                    <input disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
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
                        <button id="btnPreview"  type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalpreview">>
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
                        <select name="state" id="selectCliente" style="width: 100%;">
                        <option >Efectivo</option>
                        <option >Tarjeta</option>
                        <option >Cheque</option>
                        </select>                    
                    </div>
                    
                    <table class="table" id="tabla">
                        <thead class="bg text-black">                            
                                <th scope="col" style="width: 200px;">Anticipo #1</th>
                                <th scope="col" style="width: 200px;">Anticipo #2</th>
                                <th scope="col" style="width: 200px;">Balance</th>
                                                          
                        </thead>
                        <tbody id="TBody">
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input  type="text" class="sku form-control"  name="sku[]" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class="cantidad form-control"  autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class="precio form-control"  autocomplete="off" >
                                </td>
                            </tr>                        
                        </tbody>
                    </table>                  
                    
                </div>
                <div class="card col mx-2">
                    <div class="card-header">
                        Notas
                    </div>            
                    <textarea class="form-control" aria-label="With textarea" rows="10"></textarea>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>



<!--JQuery-->
<script src="../../assets/js/jquery-3.7.1.min.js"></script>

<script src="ajax.js"></script>





<?php
require ("../estructura/footer.php");

?>