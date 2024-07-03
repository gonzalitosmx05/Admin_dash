$(document).ready(function(){

    //toma el id y el nombre del cliente seleccionado
    $("#selectClienteSoli").change(function(){
        ConS = $(this).val();
        client = $(this).find('option:selected').text().toUpperCase();
        console.log(ConS,client);
      });

      //registra los datos de las solicitud a la base de datos
    $('#soli').click(function(){
        solage = $(this).attr("id-data");
        agent = $(this).attr("id-agent");
        concepS = $('#conceptosSoli').val().toUpperCase();
        console.log(solage,ConS,concepS);
        console.log(agent);

        const datas = {
            solage,
            ConS,
            concepS,
            client,
            agent,
            term:"NO"

        }
        console.log(datas);

        $.ajax({
            url:"funciones/guardarSoli.php",
            type:"POST",
            data:datas,
            success:function(respons){
                console.log(respons);
                $("#solicis").trigger("reset");
            }
        })

        window.location.reload();   
    });

    //registrar al cliente
    $('#btnRgisCLient').on('click',function(){
        const dataPost = {
            nombre:$("#nombreCNew").val().toUpperCase(),
            telefono1:$("#telefonoCNew").val().toUpperCase(),
            telefono2:$("#telefono2CNew").val().toUpperCase(),
            correo:$("#correoCNew").val().toUpperCase()
        };
    
        console.log(dataPost);
        $.ajax({
            url:"funciones/registrarCliente.php",
            data: dataPost,
            type: "POST",
            success: function(response){
                if(!response.error){
                    $("#clienteForm").trigger("reset");
                    $("#agregarCliente").modal("toggle");
                    console.log(response);
                }
            }
        });
    });
});