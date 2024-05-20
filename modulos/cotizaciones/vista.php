<?php 
session_start();
require ("../estructura/header.php");
include("funciones/cargarClientes.php");
include("modals/preview.php");
include("modals/agregar.php");
require ("../estructura/sidebar.php");
?>
<style>
      .table-bordered th, .table-bordered td {
         border: none;
         border-right: 1px solid #dee2e6;/* color de los bordes verticales */
      }
      .table-bordered thead th {
         border-bottom: 2px solid #dee2e6; /* color del borde inferior de las celdas de encabezado */
      }
   </style>

<div class="p-2">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center">                 
                <p>Generar Cotizacion </p>
                <p id="folioCotizacion"></p> 
                <button hidden id="botonDePruebas">PRUEBAS BASICAS</button>               
                <p hidden id="agenteName"><?php echo $_SESSION['name']; ?></p>
                <p hidden id="agenteIdRegistro"><?php echo $_SESSION['id']; ?></p>
            </div>             
            <div class="card mb-2">
                <div class="card-header">
                    Informacion General
                </div>
                <div class="d-flex justify-content-center align-items-center">                    
                    <div class="form-group w-50 mt-2">                    
                        <label class="d-block text-center" for="selectCliente">Cliente</label>
                        <select name="state" id="selectCliente" style="width: 100%;">
                            <option >Selecciona al Cliente</option>
                            <?php while($var = mysqli_fetch_row($result)){?>
                            <option value="<?php echo $var[0]?>"><?php echo $var[1]?></option>
                            <?php }?>
                        </select>                    
                    </div>               
                    <div class="form-group d-block ml-3 mt-5" >
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioImpuesto" id="radioImpuesto1" value="option1" checked>
                            <label for="radioImpuesto1">IVA 8%</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioImpuesto" id="radioImpuesto2" value="option2" checked>
                            <label for="radioImpuesto2">NO INCLUIR IVA</label>
                        </div>
                    </div>
                    <div hidden class="form-group mt-2 ml-3">
                        <label for="nombreCliente">Leyenda</label>
                        <input type="text" class="form-control" id="leyendaCotizacion">
                    </div>
                    <div class="btn-group dropright mt-4 ml-3">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            OPCIONES                            
                            <i class="fa-solid fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#agregarCliente">
                                <i class="fa-solid fa-user-plus"></i>
                                Registrar Cliente
                            </button>                            
                            <button class="dropdown-item" type="button">
                                <i class="fa-brands fa-searchengin"></i>
                                Buscar Cotizacion
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Productos o Servicios
                </div>
                <div class="card-body">
                    <table class="table" id="tabla">
                        <thead class="bg-primary text-white">                            
                                <th scope="col" style="width: 45%;">Descripcion</th>
                                <th scope="col" style="width: 13.75%;">SKU</th>
                                <th scope="col" style="width: 13.75%">Cantidad</th>
                                <th scope="col" style="width: 13.75%">P.Unitario</th>
                                <th scope="col" style="width: 13.75%">Subtotal</th>
                                <th style="width: 80px;">
                                    <button type="button" id="agregar_producto" class="btn btn-success">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </th>                            
                        </thead>
                        <tbody id="TBody">
                            <tr id="TRow" class="fila-fija">
                                <td>
                                    <input required type="text" class="descripcion form-control" placeholder="Descripcion" name="descripcion[]" autocomplete="off">
                                </td>
                                <td>
                                    <input  type="text" class="sku form-control" placeholder="SKU" name="sku[]" autocomplete="off">
                                </td>
                                <td>
                                    <input required type="number" class="cantidad form-control" value="1" autocomplete="off" name="cantidad[]">
                                </td>
                                <td>
                                    <input required type="number" class="precio form-control" placeholder="0" autocomplete="off" name="precio[]"">
                                </td>
                                <td>
                                    <input disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off" name="subtotal[]">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">
                                        <i class="fas fa-times"></i>
                                    </button>
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
                            Generar Cotizacion
                        </button>                               
                    </div>

                </div>                
            </div>

            <div class="d-flex flex-row-reverse">
                <div class="form-group"></div>
            </div>

            <div class="d-flex flex-row">
                <div class="card col mx-2">
                    <div class="card-header d-flex justify-content-between">
                        <span>Notas</span>
                        
                    </div>                                
                    <textarea id="termsConditions" class="form-control" aria-label="With textarea" rows="10">-PRECIOS NO INCLUYEN IVA
                    </textarea>
                </div>
                <div hidden class="card col mx-2">
                    <div class="card-header">
                        Imagenes de Referencia
                        
                    </div>            
                    <textarea class="form-control" aria-label="With textarea" rows="10">Opcion en Desarrollo</textarea>
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