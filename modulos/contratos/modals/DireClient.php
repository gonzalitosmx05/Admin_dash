<div id="DireClient" class="modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registar Domicilio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="domicilioForm">
        <div class="modal-body">            
          <div class="form-group">
            <label class="d-block text-center" for="calleD">Calle</label>
              <input type="text" class="form-control" id="calleD" placeholder="Calle">
          </div>     
          <div class="form-group d-flex">
              <div class="mr-1">
                  <label for="exteriorD">No.Exterior</label>
                  <input type="text" class="form-control" id="exteriorD" placeholder="No.Int">
              </div>
              <div class="">
                  <label for="interiorD">No.Interior</label>
                  <input type="text" class="form-control" id="interiorD" placeholder="No.Ext">
              </div>
          </div>      
          <div class="d-flex">
            <div class="form-group mr-1">
              <label class="d-block text-center" for="coloniaD">Colonia</label>
                <input type="text" class="form-control" id="coloniaD" placeholder="Colonia">
            </div> 
            <div class="form-group mr-1">
              <label class="d-block text-center" for="ciudadD">Ciudad</label>
              <input type="text" class="form-control" id="ciudadD" placeholder="Ciudad">
            </div>
          </div>
          <div class="d-flex">
            <div class="form-group mr-1">
              <label class="d-block text-center" for="estadoD">Estado</label>
              <input type="text" class="form-control" id="estadoD" placeholder="Estado">
            </div>      
            <div class="form-group ">
              <label class="d-block text-center" for="paisD">Pais</label>
                <input type="text" class="form-control" id="paisD" placeholder="Pais" value="Mexico">
            </div> 
          </div>      
          <div>
            <label class="d-block text-center" for="referenciaD">Referencias de domicilio</label>
            <textarea id="referenciaD"  class="form-control" aria-label="With textarea" rows="5"></textarea>
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
