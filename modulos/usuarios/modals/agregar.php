<div id="agregarUsuario" class="modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="usuarioForm">
        <div class="modal-body" >        
          <div class="form-group">
            <label class="d-block text-center" for="nombreUsuario">Nombre completo</label>
              <input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre">
          </div>    
          <div class="form-group">
            <label class="d-block text-center" for="telefonoUsuario">Telefono</label>
              <input type="text" class="form-control" id="telefonoUsuario" placeholder="Telefono">
          </div>       
          <div class="form-group">
            <label class="d-block text-center" for="nivelUsuario">Nivel de usuario</label>
            <select class="form-control" id="nivelUsuario" name="filtro">
                    <option value="administrador">Administrador</option> 
                    <option value="usuario">Usuario Normal</option>                           
              </select>
          </div>
          <div class="form-group">
            <label class="d-block text-center" for="usuarioUsuario">Usuario</label>
              <input type="text" class="form-control" id="usuarioUsuario" placeholder="Usuario">
          </div>        
          <div class="form-group">
            <label class="d-block text-center" for="passUsuario">Password</label>
              <input type="password" class="form-control" id="passUsuario" placeholder="Password">
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