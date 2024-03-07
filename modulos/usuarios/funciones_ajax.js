$(function(){

    cargaUsuarios();

    $("#usuarioForm").submit(e => {
        e.preventDefault();

        const dataPost = {
            nombre:$("#nombreUsuario").val(),
            telefono:$("#telefonoUsuario").val(),
            nivel:$("#nivelUsuario").val(),
            usuario:$("#usuarioUsuario").val(),
            pass:$("#passUsuario").val()     
        };

        $.ajax({
            url:"funciones/registrar.php",
            data: dataPost,
            type: "POST",
            success: function(response){
                if(!response.error){
                    $("#usuarioForm").trigger("reset");
                    $("#agregarUsuario").modal("toggle");
                    console.log(dataPost);
                }
            }
        });

    });

    function cargaUsuarios(){
        $.ajax({
            url: "funciones/listarUsuarios.php",
            type: "GET",
            success: function(response){
                const usuarios = JSON.parse(response);
                let plantilla = "";
                usuarios.forEach(usuario => {
                    plantilla +=`
                    <tr idUsuario=${usuario.id}>
                        <td>${usuario.id}</td>
                        <td>${usuario.nombre}</td>
                        <td>${usuario.telefono}</td>
                        <td>${usuario.registro}</td>
                        <td>${usuario.estatus}</td>
                        <td>
                            <button class="btn btn-warning cliente-item " data-toggle="modal" data-target="#infoUsuario">
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

});