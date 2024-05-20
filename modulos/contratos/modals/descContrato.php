<div id="descContrato" class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">RESUMEN DEL EQUIPO</h5>
      </div>
        <div class="modal-body">                    
                    <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <td class="text-center">Descripcion</td>                
                                <td class="text-center">Cantidad</td>
                                <td class="text-center">Precio Unitario</td>
                                <td class="text-center">Subtotal</td>
                                <td hidden class="text-center">datas</td>

                            </tr>
                        </thead>

                        <tbody id="desc_cont"></tbody>
                    </table>
</div>
        </div>
        <div class="modal-footer">
        <button id="btnPDF" class="btn btn-primary" data-toggle="modal" data-target="#btnPDFPreview">PDF</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>      
      </div>
  </div>
</div>