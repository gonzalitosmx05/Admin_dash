$(function(){

    cargaClientes();

    //Registrar persona
    $("#clienteForm").submit(e => {
        e.preventDefault();

        const dataPost = {
            nombre:$("#nombreCliente").val(),
            telefono:$("#telefonoCliente").val(),
            telefono2:$("#telefono2Cliente").val(),
            correo:$("#correoCliente").val()
        };

        $.ajax({
            url:"funciones/registrar.php",
            data:dataPost,
            type: "POST",
            success: function(response){
                if(!response.error){
                    $("#clienteForm").trigger("reset");
                    $("#agregarCliente").modal("toggle");
                }
            }
        });

    });
    
    //Registar Domicilio
    $("#domicilioForm").submit(e => {
        e.preventDefault();

        const dataPost = {
            cliente:$("#selectCliente").val(),
            calle:$("#calleDomicilio").val(),
            exterior:$("#exteriorDomicilio").val(),
            interior:$("#interiorDomicilio").val(),
            colonia:$("#coloniaDomicilio").val(),
            ciudad:$("#ciudadDomicilio").val(),
            estado:$("#estadoDomicilio").val(),
            pais:$("#paisDomicilio").val(),
            referencia:$("#referenciaDomicilio").val()
        };

        $.ajax({
            url:"funciones/registrar_domicilio.php",
            data:dataPost,
            type: "POST",
            success: function(response){
                if(!response.error){
                    $("#domicilioForm").trigger("reset");
                    $("#agregarDomicilio").modal("toggle");
                    console.log(response);
                }
            }
        });

    });
    //Tabla general
    function cargaClientes(){
        $.ajax({
            url: "funciones/listarClientes.php",
            type: "GET",
            success: function(response){
                const clientes = JSON.parse(response);
                let plantilla = "";
                clientes.forEach(cliente => {
                    plantilla += `
                    <tr idCliente=${cliente.id}>
                        <td>${cliente.id}</td>
                        <td>${cliente.nombre}</td>
                        <td>${cliente.telefono}</td>
                        <td>${cliente.correo}</td>
                        <td>${cliente.registro}</td>
                        <td>
                            <button class="btn btn-warning cliente-item " data-toggle="modal" data-target="#infoCliente">
                                <i class="fa-solid fa-info"></i>
                            </button>
                            <button class="btn btn-danger persona-delete">
                                <i class="fa-solid fa-xmark"></i>                            
                            </button>
                        </td>
                    </tr>
                    `;
                });
                $("#registros").html(plantilla);
                
            }
        });
    };
    //Informacion del Cliente
    $(document).on("click",".cliente-item",() => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr("idCliente");
        let plantilla = "";
        $.when(
            $.ajax({
                url: "funciones/consultarUno.php",
                data:{id},
                type:"POST",
                success: function(response){
                    if(!response.error){
                        const cliente = JSON.parse(response);
                        $("#nombreClienteInfo").val(cliente.nombre);
                        $("#telefonoClienteInfo").val(cliente.telefono);
                        $("#telefono2ClienteInfo").val(cliente.telefono2);
                        $("#correoClienteInfo").val(cliente.correo);
                        console.log("Consultado");
                    }
                }
            }),
            $.ajax({
                url: "funciones/consultarDomicilioDeUno.php",
                data:{id},
                type:"POST",
                success: function(response){
                    if(!response.error){
                        const domicilios = JSON.parse(response);                      
                        domicilios.forEach(domicilio => {
                            plantilla+=`
                            <tr idDomicilio = ${domicilio.id}>
                                <td>${domicilio.id}</td>
                                <td>${domicilio.calle}</td>
                                <td>${domicilio.exterior}</td>
                                <td>${domicilio.interior}</td>
                                <td>${domicilio.colonia}</td>
                                <td>${domicilio.estado}</td>
                                <td>${domicilio.pais}</td>
                                <td>${domicilio.referencias}</td>
                            </tr>
                            `;
                        });                       
                        console.log("Domicilios Recuperados");
                    }
                }
            })
        ).done(function(){
            $("#domiciliosRegistrados").html(plantilla);
        });

    });


});