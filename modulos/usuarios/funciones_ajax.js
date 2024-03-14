$(function(){

    cargaUsuarios();
    eliminarUser();
    infoUser();
   
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
                    cargaUsuarios();
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
                            <button class="btn btn-warning cliente-item" id="info" data-id="${usuario.id}" data-toggle="modal" data-target="#infoUsuario">
                                <i class="fa-solid fa-info"></i>
                            </button>
                            <button type="submit" id="delet" data-id="${usuario.id}" class="btn btn-danger persona-delete" data-toggle="modal" data-target="#delet_user">
                                <i class="fa-solid fa-xmark"></i>                            
                            </button>
                        </td>
                    </tr>
                    `;
                });
                $("#registros").html(plantilla);

               $("#registros").on("click", "#info", function () {
                    userId = $(this).attr("data-id");
                    infoUser(userId);                
                });

                $("#registros").on("click", "#delet", function () {
                    userId = $(this).attr("data-id");
                    console.log(userId);
                    eliminarUser(userId);
                });
            }
        });
    };

    function eliminarUser(userId){
        $("#delet_user").submit(function(){
            $.ajax({
                url:"funciones/eliminarU.php",
                type:"POST",
                data:{userId:userId},
                success: function(res){
                    if(!res.error){
                        console.log(res);
                    }
                }
            })
        })
    }

   
    function infoUser(userId){
        $("#infoUsuario").on("show.bs.modal",function(){
            $.ajax({
                url:"funciones/info_usuarios.php",
                type:"POST",
                data:{userId:userId},
                success:function(data){
                    console.log(data);
                    var user = JSON.parse(data);
                    user.forEach(user =>{
                    $("#nombre").val(user.nombre);
                    $("#telefono").val(user.telefono);
                    $("#nivel").val(user.nivel);
                    $("#usuario").val(user.usuario);
                    $("#pass").val(user.pass);  
                    }) 
                }
            })
        })
    }

});