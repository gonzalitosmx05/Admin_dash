$(document).ready(function(){

    //mostrar cotizaciones
    $.ajax({
        url:"funciones/cargarCotizaciones.php",
        type:"GET",
        success:function(res){
        console.log(res);
        const cot = JSON.parse(res);
                let plantilla = "";
                cot.forEach(cotis => {
                    plantilla +=`
                    <tr idUsuario=${cotis.id}>
                        <td>${cotis.id}</td>
                        <td>${cotis.cliente}</td>
                        <td>${cotis.agente}</td>
                        <td>${cotis.emicion}</td>
                        <td>${cotis.expiracion}</td>
                        <td>${cotis.subtotal}</td>
                        <td>${cotis.iva}</td>
                        <td>${cotis.total}</td>
                        <td>${cotis.notas}</td>
                    </tr>
                    `;
                });
                $("#Cotiz").html(plantilla);
        }
    });

    //buscar cotizaciones
    $('#barraBusqueda').keyup(function(){
        var filtro = $('#filtroBusqueda').val();
        var buscar = $(this).val();
        console.log(filtro);

        $.ajax({
            url: 'funciones/buscarCotiz.php',
            method: 'POST',
            data: {filtro: filtro, buscar: buscar},
            success: function(response){
                const cot = JSON.parse(response);
                let plantilla = "";
                cot.forEach(cotis => {
                    plantilla +=`
                    <tr idUsuario=${cotis.id}>
                        <td>${cotis.id}</td>
                        <td>${cotis.cliente}</td>
                        <td>${cotis.agente}</td>
                        <td>${cotis.emicion}</td>
                        <td>${cotis.expiracion}</td>
                        <td>${cotis.subtotal}</td>
                        <td>${cotis.iva}</td>
                        <td>${cotis.total}</td>
                        <td>${cotis.notas}</td>
                    </tr>
                    `;
                });
                $("#Cotiz").html(plantilla);
            }
        });
    })
    
});