<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="btnPDFPreview">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Preview</h5>
                <input hidden id="pdfg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">                                                           
                <div class="form-group">
                    <div id="designHeader" class="d-flex flex-row justify-content-between mb-2">
                        <div id="logoHeader" class="w-auto">
                            <img src="../../assets/imagenes/logoCDT.png" style="width: 170px ;">
                        </div>
                        <div class="align-top"> 
                     <img src="../../assets/imagenes/logo2CDT.png" style="width: 550px;">
                     <div style="position: absolute; top: 100px; left: 380px; font-size: 35px; color: black;">2024</div>
                     <div class="texts">
                        <svg width="550" height="60" style="margin-right: 10px;">
                                <text x="215" y="20" fill="DarkRed" font-size="20px">CONTRATO</text>
                                <text x="370" y="50" fill="DarkRed" font-size="15px">FOLIO:</text>
                                    <rect x="330" y="5" width="210" height="20" rx="2" ry="2" style="fill:white;stroke:DarkRed;stroke-width:2" />                            
                                    <rect x="440" y="35" width="100" height="20" rx="2" ry="2" style="fill:white;stroke:DarkRed;stroke-width:2" />                            
                                    <text x="450" y="50" id="folio" fill="black" font-size="15px"></text>
                        </svg>
                    </div>
                        </div>
                    </div>
                    <div id="datosEncabezado" class="d-flex flex-row mb-3">
                        <div class="datos_cliente col w-auto">                            
                            <p class="fw-bold lh-1 m-0" style="font-size: small;" id="nombreCliente">Fecha de Contratación:</p>
                            <p class="fw-bold lh-1 m-0" style="font-size: small;" id="contactoCliente">Fecha de Instalación:</p>
                            <p class="fw-bold lh-1 m-0" style="font-size: 10;position: absolute; top: 25; left: 250;" id="fecha"></p>
                            <p class="fw-bold lh-1 m-0" style="font-size: 20;position: absolute; top: 37px; left: 300px;" id="contactoCliente">DATOS DEL CLIENTE</p>

                        </div>
                    </div>

                    <div class="table-responsive">

                    <!--DAROS DEL CLIENTE-->
                        <svg  width="755" height="155">
                            <rect x="5" y="3" width="748" height="150" rx="10" ry="10" style="fill:white;stroke:black;stroke-width:2" />


                            <rect x="10" y="3" width="740" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="26" width="740" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="10" y="50" width="740" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="74" width="370" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="10" y="98" width="740" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="122" width="370" height="20" rx="5" ry="5" style="fill:Lavender;" />

                            <text x="295" y="20" fill="black" font-size="15px">NOMBRE DEL CLIENTE</text>
                            <text x="290" y="40" id="nameC" fill="black" font-size="15px"></text>
                            <text x="150" y="70" fill="black" font-size="15px">DIRECCION</text>
                            <text x="140" y="90" id="dire" fill="black" font-size="15px"></text>
                            <text x="110" y="120" fill="black" font-size="15px">CORREO ELECTRONICO</text>
                            <text x="100" y="140" id="CEC" fill="black" font-size="15px"></text>


                            <text x="445" y="70" fill="black" font-size="15px">CUIDAD</text>
                            <text x="425" y="120" fill="black" font-size="15px">TELEFONO #1</text>
                            <rect x="385" y="74" width="175" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="385" y="122" width="175" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <text x="440" y="90" id="ciudC" fill="black" font-size="15px"></text>
                            <text x="420" y="140" id="Tel1" fill="black" font-size="15px"></text>


                            <text x="620" y="70" fill="black" font-size="15px">ESTADO</text>
                            <text x="595" y="120" fill="black" font-size="15px">TELEFONO #2</text>
                            <rect x="565" y="74" width="180" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="565" y="122" width="180" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <text x="610" y="90" id="estC" fill="black" font-size="15px"></text>
                            <text x="585" y="140" id="Tel2" fill="black" font-size="15px"></text>

                            
                        </svg>
                            <!--INFORMACION DEL EQUIPO-->
                            <p class="fw-bold lh-1 m-0" style="font-size: 20;position: absolute; top: 433px; left: 100px;" id="contactoCliente">INFORMACION DEL EQUIPO</p>
                            <svg  width="380" height="155" style="margin-top: 10px;">
                            <rect x="5" y="3" width="370" height="150" rx="10" ry="10" style="fill:white;stroke:black;stroke-width:2" />
                            
                            <rect x="10" y="3" width="357" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="26" width="357" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="10" y="50" width="357" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="74" width="357" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="10" y="98" width="357" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="122" width="357" height="20" rx="5" ry="5" style="fill:Lavender;" />

                            <text x="150" y="20" fill="black" font-size="15px">MARCA</text>
                            <text x="150" y="70" fill="black" font-size="15px">MODELO</text>
                            <text x="150" y="120" fill="black" font-size="15px">NO. SERIE</text>
                            <text x="140" y="40" id="Marca" fill="black" font-size="15px"></text>
                            <text x="140" y="90" id="Modelo" fill="black" font-size="15px"></text>
                            <text x="150" y="140" id="Nserie" fill="black" font-size="15px"></text>


                        </svg>
                            <!--INFORMACION DEL USUARIO-->
                            <p class="fw-bold lh-1 m-0" style="font-size: 20;position: absolute; top: 433px; left: 480px;" id="contactoCliente">INFORMACION DEL USUARIO</p>
                            <svg  width="380" height="155">
                            <rect x="5" y="3" width="370" height="150" rx="10" ry="10" style="fill:white;stroke:black;stroke-width:2" />

                            <rect x="10" y="3" width="357" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="26" width="357" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="10" y="50" width="357" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="74" width="357" height="20" rx="5" ry="5" style="fill:Lavender;" />
                            <rect x="10" y="98" width="357" height="20" rx="5" ry="5" style="fill:white;" />
                            <rect x="10" y="122" width="357" height="20" rx="5" ry="5" style="fill:Lavender;" />

                            <text x="130" y="20" fill="black" font-size="15px">CORREO/TELEFONO:</text>
                            <text x="150" y="70" fill="black" font-size="15px">USUARIO:</text>
                            <text x="130" y="120" fill="black" font-size="15px">CONTRASEÑA:</text>


                        </svg>
                        <!--RESUMEN DEL EQUIPO-->
                        <p class="fw-bold lh-1 m-0" style="font-size: 20;position: absolute; top: 10; left: 300px;" id="contactoCliente">RESUMEN DEL EQUIPO</p>
                        <svg  width="755" height="200" style="margin-top: 15px;">
                            <rect x="5" y="3" width="748" height="190" rx="10" ry="10" style="fill:white;stroke:black;stroke-width:2" />

                            <!--<rect x="20" y="3" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />-->
                            <rect x="20" y="26" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="20" y="50" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="20" y="74" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="20" y="98" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="20" y="122" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="20" y="146" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="20" y="170" width="357" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />

                            <!--<rect x="380" y="3" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />-->
                            <rect x="380" y="50" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="380" y="26" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="380" y="74" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="380" y="98" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="380" y="122" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="380" y="146" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="380" y="170" width="97" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />

                            <!--<rect x="480" y="3" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />-->
                            <rect x="480" y="26" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="480" y="50" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="480" y="74" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="480" y="98" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="480" y="122" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="480" y="146" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="480" y="170" width="133" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />

                            <!--<rect x="615" y="3" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />-->
                            <rect x="615" y="26" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="615" y="50" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="615" y="74" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="615" y="98" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="615" y="122" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="615" y="146" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />
                            <rect x="615" y="170" width="135" height="20" rx="5" ry="5" style="fill:WhiteSmoke;" />

                            <!--DESCIRPCION-->
                            <text x="25" y="37" id="desc1" fill="black" font-size="15px"></text>
                            <text x="25" y="60" id="desc2" fill="black" font-size="15px"></text>
                            <text x="25" y="85" id="desc3" fill="black" font-size="15px"></text>
                            <text x="25" y="110" id="desc4" fill="black" font-size="15px"></text>
                            <text x="25" y="135" id="desc5" fill="black" font-size="15px"></text>
                            <text x="25" y="160" id="desc6" fill="black" font-size="15px"></text>
                            <text x="25" y="185" id="desc7" fill="black" font-size="15px"></text>

                            <!--CANTIDAD-->
                            <text x="420" y="37" id="cant1" fill="black" font-size="15px"></text>
                            <text x="420" y="60" id="cant2" fill="black" font-size="15px"></text>
                            <text x="420" y="85" id="cant3" fill="black" font-size="15px"></text>
                            <text x="420" y="110" id="cant4" fill="black" font-size="15px"></text>
                            <text x="420" y="135" id="cant5" fill="black" font-size="15px"></text>
                            <text x="420" y="160" id="cant6" fill="black" font-size="15px"></text>
                            <text x="420" y="185" id="cant7" fill="black" font-size="15px"></text>

                            <!--PRESIO-->
                            <text x="530" y="37" id="PU1" fill="black" font-size="15px"></text>
                            <text x="530" y="60" id="PU2" fill="black" font-size="15px"></text>
                            <text x="530" y="85" id="PU3" fill="black" font-size="15px"></text>
                            <text x="530" y="110" id="PU4" fill="black" font-size="15px"></text>
                            <text x="530" y="135" id="PU5" fill="black" font-size="15px"></text>
                            <text x="530" y="160" id="PU6" fill="black" font-size="15px"></text>
                            <text x="530" y="185" id="PU7" fill="black" font-size="15px"></text>
                            
                            <!--SUBTOTAL-->
                            <text x="660" y="37" id="subt1" fill="black" font-size="15px"></text>
                            <text x="660" y="60" id="subt2" fill="black" font-size="15px"></text>
                            <text x="660" y="85" id="subt3" fill="black" font-size="15px"></text>
                            <text x="660" y="110" id="subt4" fill="black" font-size="15px"></text>
                            <text x="660" y="135" id="subt5" fill="black" font-size="15px"></text>
                            <text x="660" y="160" id="subt6" fill="black" font-size="15px"></text>
                            <text x="660" y="185" id="subt7" fill="black" font-size="15px"></text>
                

                            <text x="7" y="37" fill="black" font-size="15px">1</text>
                            <text x="7" y="60" fill="black" font-size="15px">2</text>
                            <text x="7" y="85" fill="black" font-size="15px">3</text>
                            <text x="7" y="110" fill="black" font-size="15px">4</text>
                            <text x="7" y="135" fill="black" font-size="15px">5</text>
                            <text x="7" y="160" fill="black" font-size="15px">6</text>
                            <text x="7" y="185" fill="black" font-size="15px">7</text>

                            <text x="120" y="20" fill="black" font-size="15px">DESCRIPCION:</text>
                            <text x="400" y="20" fill="black" font-size="15px">CANT:</text>
                            <text x="500" y="20" fill="black" font-size="15px">P.UNITARIO:</text>
                            <text x="645" y="20" fill="black" font-size="15px">SUBTOTAL:</text>

                        </svg>
                    </div>
                    <div class="pago">

            <svg width="755" height="200" style="margin-right: 10px;">
                <!-- Cuadrado exterior -->
                <rect x="5" y="5" width="750" height="200" style="fill:none;stroke:none;stroke-width:2;"/>

                <!-- ANTICIPOS Y BALANCE -->
                <rect x="20" y="20" width="100" height="25" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2" />
                <rect x="130" y="20" width="100" height="25" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2" />
                <rect x="240" y="20" width="100" height="25" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2" />

                <rect x="20" y="50" width="100" height="25" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2"/>
                <rect x="130" y="50" width="100" height="25" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2"/>
                <rect x="240" y="50" width="100" height="25" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2"/>
                <text x="25" y="40" fill="black" font-size="15px">ANTICIPO #1</text>
                <text x="135" y="40" fill="black" font-size="15px">ANTICIPO#2</text>
                <text x="245" y="40" fill="black" font-size="15px">BALANCE</text>
                <text x="25" y="70" id="anti1" fill="black" font-size="15px"></text>
                <text x="135" y="70" id="anti2" fill="black" font-size="15px"></text>
                <text x="245" y="70" id="balanc" fill="black" font-size="15px"></text>



                <!-- CARGO ANUAL -->
                <rect x="350" y="20" width="180" height="65" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2" />
                <text x="357" y="30" fill="black" font-size="9px">CARGO ANUAL POR CUENTA: 995.00</text>
                <text x="357" y="70" fill="black" font-size="9px">_________________________</text>
                <text x="420" y="80" fill="black" font-size="9px">ACEPTO</text>

                <!-- FORMA DE PAGO-->
                <rect x="20" y="110" width="130" height="25" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2" />
                <text x="25" y="130" fill="black" font-size="15px">FROMA DE PAGO</text>
                <image x="20" y="90" width="130" height="130" xlink:href="../../assets/imagenes/FP.png" />
                <rect x="23" y="175" width="30" height="15" rx="2" ry="2" style="fill:WhiteSmoke" />
                <rect x="70" y="175" width="30" height="15" rx="2" ry="2" style="fill:WhiteSmoke" />
                <rect x="115" y="175" width="30" height="15" rx="2" ry="2" style="fill:WhiteSmoke" />
                <text hidden x="28" y="175" id="pago" fill="black" font-size="15px"></text>
                <text x="30" y="185" id="cheque" fill="black" font-size="15px"></text>
                <text x="77" y="185" id="efectivo" fill="black" font-size="15px"></text>
                <text x="122" y="185" id="tarjeta" fill="black" font-size="15px"></text>


                 

                <!-- FIRMA DEL CLIENTE -->
                <text x="175" y="110" font-size="10PX" fill="black">
                    <tspan x="175" dy="1.2em">Con esta Firma acepto los terminos y condiciones de este contrato,</tspan>
                    <tspan x="175" dy="1.2em">de igual forma, estoy satisfecho(a) y conforme con el trabajo</tspan>
                    <tspan x="175" dy="1.2em">realizado y 100% terminado, estando asi conciente que dicha</tspan>
                    <tspan x="175" dy="1.2em">empresa no acepta ningun tipo de deboluciones.</tspan>
                </text>

                <rect x="175" y="165" width="347" height="30" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2" />
                <text x="280" y="185" fill="black" font-size="15px">FIRMA DEL CLIENTE</text>


             <!-- SUBTITAL, IVA Y TOTAL-->
                <text x="580" y="30" fill="black" font-size="12px">SUBTOTAL:</text>
                <text x="595" y="55" fill="black" font-size="12px">IVA:</text>
                <text x="585" y="80" fill="black" font-size="12px">TOTAL:</text>
                <rect x="645" y="20" width="80" height="15" rx="2" ry="2" style="fill:WhiteSmoke" />
                <rect x="645" y="45" width="80" height="15" rx="2" ry="2" style="fill:WhiteSmoke" />
                <rect x="645" y="70" width="80" height="15" rx="2" ry="2" style="fill:WhiteSmoke" />
                <text x="650" y="30" id="sub" fill="black" font-size="15px"></text>
                <text x="650" y="55" id="iva" fill="black" font-size="15px"></text>
                <text x="650" y="80" id="total" fill="black" font-size="15px"></text>

                <text x="550" y="110" fill="black" font-size="12px">NOTAS:</text>
                <rect x="530" y="120" width="215" height="75" rx="2" ry="2" style="fill:white;stroke:black;stroke-width:2" />
                <text x="535" y="140" id="nota" fill="black" font-size="10px"></text>
                

            </svg>        
                </div>
                
                <div class="info">

                </div>
                <img x="0" y="260" src="../../assets/imagenes/pp.png" style="width: 770px ;">
                </div>                                                
            </div>
            <div class="modal-footer">
                 <button id="pdfsave" class="btn btn-warning">
                    <i class="fa-solid fa-print"></i>
                    Imprimir
                </button>    
                <button id="saveButton" type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Cancelar
                </button>     
                                   

            </div>
        </div>
    </div>
</div>
