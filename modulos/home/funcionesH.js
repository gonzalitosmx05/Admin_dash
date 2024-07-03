$(document).ready(function(){


    //MUESTRA LAS SOLICITUDES PENDIENTES
   $.ajax({
        url:"funciones/cargaSoli.php",
        type:"GET",
        success:function(respon){
            console.log(respon);
            const Solic = JSON.parse(respon);
                console.log(Solic);

                Solic.forEach(slc => {
                    // Crear la plantilla de la nueva tarjeta
                    let plantilla = `
                    <div class="card shadow-sm p-1 mb-2 bg-white rounded">               
            
                        <div class="card-body">                
                            <div class="row">
                                <div class="col-10">
                                    <strong>Cliente:</strong> ${slc.cliente}
                                    <br>
                                    <strong>Agente:</strong> ${slc.agente}
                                    <br>
                                    <strong>Detalles:</strong>
                                    <br>
                                    ${slc.concep}
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">                    
                                    <button type="button" id-clin=${slc.id_c} id-solis=${slc.id} id="solicitud" class="btn btn-success p-3"><i class="far fa-check-square fa-3x "></i></button>
                                </div>
                            </div>                              
                        </div>
                        </div>
                    `;
                
                    // Agregar la nueva tarjeta al contenedor
                    document.getElementById('solicitudes').insertAdjacentHTML('beforeend', plantilla);
                });
            
        }
    })
    

    //ACCIONES DEL BOTON DE LAS SOLICITUDES
    $('#solicitudes').on("click","#solicitud",function(){
        id = $(this).attr("id-solis");
        console.log(id);
        id_clint = $(this).attr("id-clin");
        console.log(id_clint);

        localStorage.removeItem('ids');

        const dat = {
            id_clint: id_clint,
            id: id
        };
                  
        // Guardar los datos en localStorage
        localStorage.setItem('ids', JSON.stringify(dat));

        // Disparar un evento personalizado para notificar al otro script
        const event = new Event('datosEnviados');
        document.dispatchEvent(event);

        // Redireccionar a cotizaciones
        window.location.href = "../cotizaciones/vista.php";
        
        console.log(dat);

       /* $.ajax({
            url:"funciones/soliTerminada.php",
            type:"POST",
            success:function(res){
                console.log(res);
                
            }
        })*/
    })
})