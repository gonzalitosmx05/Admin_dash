<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="busq_cotiz">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title">Busqueda de Cotizaciones</h5>
      </div>
        <div class="modal-body">   
        <div class="d-flex">
                        <div class="">
                            <select class="form-control" id="filtroBusquedaCotz">
                                <option value="descripcion">Conceptos</option>
                                <option value="id_cotizacion">Folio</option>
                                <option value="nombre">Cliente</option>
                            </select>
                        </div>
                        <div class=" ml-2" style="width: 100%;">   
                            <input id="CtizBusqueda" class="form-control" type="text" placeholder="Buscar....">
                        </div>
                    </div>

                    <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <td class="text-center" style="width: 10%;">Folio</td>
                                <td class="text-center" style="width: 10%;">Cliente</td>                
                                <td class="text-center" style="width: 10%;">Emision</td>                            
                                <td class="text-center" style="width: 65%;">Conceptos</td>
                                <td class="text-center"></td>
                                
                            </tr>
                        </thead>

                        <tbody id="CotizBusq"></tbody>
                    </table>
</div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>      
      </div>
  </div>
</div>