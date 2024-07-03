<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="infoctiz">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                                                           
                <div class="form-group">
                    <div id="designHeader" class="d-flex flex-row justify-content-between mb-2">
                        <div id="logoHeader" class="w-auto">
                            <img src="../../assets/imagenes/LogoTipoBanner.png" style="width: 300px;">
                        </div>
                        <div class="align-top"> 
                            <p style="font-size: xx-large;font-weight: bold;margin:0; padding-top:0;">COTIZACION</p>                            
                            <p id="folioCotizacioPreview" style="font-size: x-small;margin:0; padding-top:0;">COTIZACION #000000</p>                            
                            <p hidden id="folioCotizacioPreviewHiden" style="font-size: x-small;margin:0; padding-top:0;"></p>                            
                        </div>
                    </div>
                    <div id="datosEncabezado" class="d-flex flex-row mb-3">
                        <div class="datos_cliente col w-auto">                            
                            <p class="fw-bold lh-1 m-0" style="font-size: x-small;" id="nCliente">Cliente:</p>
                            <p class="fw-bold lh-1 m-0" style="font-size: x-small;" id="dCliente">Direccion:</p>
                            <p class="fw-bold lh-1 m-0" style="font-size: x-small;" id="cuCliente">Ciudad:</p>
                            <p class="fw-bold lh-1 m-0" style="font-size: x-small;" id="teCliente">Telefono:</p>
                            <p class="fw-bold lh-1 m-0" style="font-size: x-small;" id="coCliente">Correo:</p>
                        </div>
                        <div class="col d-flex flex-row  justify-content-end">
                            <div class="vigencias">
                                <p class="fw-bold lh-1 m-0 text-right" style="font-size: x-small;" id="feEmision">Fecha:</p>
                                <p class="fw-bold lh-1 m-0 text-right" style="font-size: x-small;" id="feVigencia">Vigencia:</p>
                                <p hidden id="Nagente"></p>
                                <p class="fw-bold lh-1 m-0 text-right" style="font-size: x-small;" id="agnte">Agente:</p>
                            </div>
                            <div class="Leyenda_Empresa w-auto">
                                <img src="../../assets/imagenes/Leyenda.png" style="width: 130px;">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" style="font-size: x-small;" id="modalTabla">                          
                            <thead class="bg-primary text-light">
                            </thead>
                            <tbody>
    
                            </tbody>                                       
                        </table>  
                    </div>
                    <div id="totales" class="text-right" style="margin-bottom:10vh;">
                        <p class="m-0" style="font-size: x-small;" id="subtotalPrw">SUBTOTAL:$</p>
                        <p class="m-0" style="font-size: x-small;" id="ivaPrw">IVA:$</p>
                        <p class="m-0" style="font-size: x-small;" id="totalPrew">TOTAL MXN:$</p>
                    </div> 
                    <div class="row m-2" id="Terminos y condiciones">
                        <textarea disabled id="terminosPrw" class="form-control" rows="5" style="font-size: x-small;width:80%;color: black; background-color: white; "></textarea>
                        <img src="../../assets/imagenes/qrDead.png" style="width: 20%;" >
                    </div>                    
                </div>                                                
            </div>
            <div class="modal-footer">   
            <button id="clonarCtiz" id-data="" class="btn btn-warning">
                <i class="fa-solid fa-external-link-alt"></i>
                   Clonar
                </button> 
                <button id="ctizImp" class="btn btn-success">
                <i class="fa-solid fa-print"></i>
                    Imprimir
                </button> 
                <button id="ctizSave" class="btn btn-primary">
                    <i class="fa-solid fa-download"></i>
                    Descargar
                </button>    
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    Cancelar
                </button>                
            </div>
        </div>
    </div>
</div>
