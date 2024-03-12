<div class="modal fade bd-example-modal-lg" id="infoUsuario" role="dialog" tabindex="1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" method="POST">
        <div class="modal-body" >        
          <div class="form-group">
            <label class="d-block text-center" for="nombre">Nombre completo</label>
              <input type="text" class="form-control" id="nombre" >
          </div>    
          <div class="form-group">
            <label class="d-block text-center" for="telefono">Telefono</label>
              <input type="text" class="form-control" id="telefono" >
          </div>       
          <div class="form-group">
            <label class="d-block text-center" for="nivel">Nivel de usuario</label>
            <input type="text" class="form-control" id="nivel" >
          </div>
          <div class="form-group">
            <label class="d-block text-center" for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" >
          </div>        
          <div class="form-group">
            <label class="d-block text-center" for="pass">Password</label>
              <input type="text" class="form-control" id="pass">
          </div>                       
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>