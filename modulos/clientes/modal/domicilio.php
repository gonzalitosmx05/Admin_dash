<div class="modal" tabindex="-1" role="dialog" id="agregarDomicilio">
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
                <label class="d-block text-center" for="selectCliente">Nombre o Razon Social</label>
                <select name="state" id="selectCliente" style="width: 100%;">
                    <option >Selecciona al Cliente</option>
                    <?php while($var = mysqli_fetch_row($result)){?>
                    <option value="<?php echo $var[0]?>"><?php echo $var[1]?></option>
                    <?php }?>
                </select>
                </div>    
            <div class="form-group">
                <label class="d-block text-center" for="calleDomicilio">Calle</label>
                <input type="text" class="form-control" id="calleDomicilio" placeholder="Calle">
            </div>     
            <div class="form-group d-flex">
                <div class="mr-1">
                    <label for="exteriorDomicilio">No.Exterior</label>
                    <input type="text" class="form-control" id="exteriorDomicilio" placeholder="No.Int">
                </div>
                <div class="">
                    <label for="interiorDomicilio">No.Interior</label>
                    <input type="text" class="form-control" id="interiorDomicilio" placeholder="No.Ext">
                </div>
            </div>      
            <div class="d-flex">
                <div class="form-group mr-1">
                <label class="d-block text-center" for="coloniaDomicilio">Colonia</label>
                    <input type="text" class="form-control" id="coloniaDomicilio" placeholder="Colonia">
                </div> 
                <div class="form-group mr-1">
                <label class="d-block text-center" for="ciudadDomicilio">Ciudad</label>
                <input type="text" class="form-control" id="ciudadDomicilio" placeholder="Ciudad">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group mr-1">
                <label class="d-block text-center" for="estadoDomicilio">Estado</label>
                <input type="text" class="form-control" id="estadoDomicilio" placeholder="Estado">
                </div>      
                <div class="form-group ">
                <label class="d-block text-center" for="paisDomicilio">Pais</label>
                    <input type="text" class="form-control" id="paisDomicilio" placeholder="Pais" value="Mexico">
                </div> 
            </div>      
            <div>
                <label class="d-block text-center" for="referenciaDomicilio">Referencias de domicilio</label>
                <textarea id="referenciaDomicilio"  class="form-control" aria-label="With textarea" rows="5"></textarea>
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