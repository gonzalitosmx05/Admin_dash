<div id="infoCliente" class="modal" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informacion del Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="clienteForm">
        <div class="modal-body">        
          <div class="form-group">
              <label class="d-block text-center" for="nombreClienteInfo">Nombre o Razon Social</label>
              <input required type="text" class="form-control" id="nombreClienteInfo" placeholder="Nombre">
          </div>    
          <div class="form-group">
              <label class="d-block text-center" for="telefonoClienteInfo">Telefono</label>
              <input type="text" class="form-control" id="telefonoClienteInfo" placeholder="Telefono">
          </div>     
          <div class="form-group">
              <label class="d-block text-center" for="telefonoClienteInfo">Telefono 2</label>
              <input type="text" class="form-control" id="telefono2ClienteInfo" placeholder="Telefono 2">
          </div>                
          <div class="form-group">
              <label class="d-block text-center" for="correoClienteInfo">Correo</label>
              <input type="email" class="form-control" id="correoClienteInfo" placeholder="Correo">
          </div>                    
        </div>
        
        <div class="form-group m-2">        
            <label class="d-block text-center">Domicilios del Cliente</label>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <td class="text-center">Id</td>
                        <td class="text-center">Calle</td>                
                        <td class="text-center">Exterior</td>
                        <td class="text-center">Interior</td>                            
                        <td class="text-center">Colonia</td>
                        <td class="text-center">Estado</td>
                        <td class="text-center">Pais</td>
                        <td class="text-center">Referencias</td>

                    </tr>
                </thead>

                <tbody id="domiciliosRegistrados"></tbody>
            </table>        
        </div>   
      </div>
    </form>
  </div>
</div>