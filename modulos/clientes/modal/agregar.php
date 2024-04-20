<div class="modal" tabindex="-1" role="dialog" id="agregarCliente">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="clienteForm">
        <div class="modal-body">        
          <div class="form-group">
              <label class="d-block text-center" for="nombreCliente">Nombre o Razon Social</label>
              <input required type="text" class="form-control" id="nombreCliente" placeholder="Nombre">
          </div>    
          <div class="form-group">
              <label class="d-block text-center" for="telefonoCliente">Telefono</label>
              <input type="text" class="form-control" id="telefonoCliente" placeholder="Telefono">
          </div>     
          <div class="form-group">
              <label class="d-block text-center" for="telefono2Cliente">Telefono 2</label>
              <input type="text" class="form-control" id="telefono2Cliente" placeholder="Telefono 2">
          </div>                
          <div class="form-group">
              <label class="d-block text-center" for="correoCliente">Correo</label>
              <input type="email" class="form-control" id="correoCliente" placeholder="Correo">
          </div>                    
        </div>
        <div class="modal-footer">
          <button id="btnRgistrarCLiente" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>      
      </div>
    </form>
  </div>
</div>