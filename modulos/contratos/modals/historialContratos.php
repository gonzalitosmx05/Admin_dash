<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="historialC">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title">Historial de Contratos</h5>
      </div>
        <div class="modal-body">   
  

        <div class="d-flex">
                        <div class="">
                            <select class="form-control" id="filtroBusquedaCont">
                                <option value="folio">Folio</option>
                                <option value="nombre_Cliente">Cliente</option>
                                <option value="fecha_contrato">Fecha</option>
                            </select>
                        </div>
                        <div class=" ml-2" style="width: 100%;">   
                            <input id="contratoBusqueda" class="form-control" type="text" placeholder="Buscar....">
                        </div>
                    </div>

                    <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <td class="text-center">Folio</td>
                                <td class="text-center">Cliente</td>                
                                <td class="text-center">No. Serie</td>
                                <td class="text-center">Domicilio</td>
                                <td class="text-center">Fecha de Contrato</td>
                                <td class="text-center"></td>

                            </tr>
                        </thead>

                        <tbody id="Contratos"></tbody>
                    </table>
</div>

        </div>
        <div class="modal-footer">
          <button id="btnRgistrarCLiente" class="btn btn-primary" >Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>      
      </div>
  </div>
</div>