$(function(){

    cargarRegistros();
    
    function cargarRegistros(){
        $.ajax({
            url: "funciones/cargaRegistros.php",
            type: "GET",
            success: function(response){
                const registros = JSON.parse(response);
                let plantilla = "";
                registros.forEach(registro => {
                    plantilla += `
                    <tr idCliente=${registro.id_cotizacion}>
                        <td>${registro.id_cotizacion}</td>
                        <td>${registro.nombre_cliente}</td>
                        <td>${registro.emision}</td>
                        <td>${registro.descripcion}</td>
                        <td>
                            <button class="btn btn-warning cliente-item " data-toggle="modal" data-target="#infoCliente">
                                <i class="fa-solid fa-info"></i>
                            </button>                            
                        </td>
                    </tr>
                    `;
                });
                $("#BodyCotizaciones").html(plantilla);
                
                /*$("#registros").on("click", "#delet", function () {
                    clientId = $(this).attr("data-id");
                    console.log(clientId);
                    eliminarClient(clientId);
                });*/
            }
        });
    }
});