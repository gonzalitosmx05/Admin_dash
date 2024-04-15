
$(document).ready(function(){

 
  agreDomi();
    //Funcion para actualizar totales generales de la tabla y del presupuesto total
    function actualizarTotal(){
      var total = 0;
      $('#tabla tbody tr').each(function(){
        total += parseFloat($(this).find('.subtotal').val()) || 0;    
      });
    
      $('#subtotalGeneral').val(total.toFixed(2));
      $('#ivaGeneral').val((total*.08).toFixed(2));
      $('#totalGeneral').val(((total*.08)+total).toFixed(2));
    }
    
    //Funcion para calcular los subtotales de cada fila
    $('#tabla tbody').on('change','.cantidad, .precio',function(){
      var fila = $(this).closest('tr');
      var cantidad = parseFloat(fila.find('.cantidad').val()) || 0;
      var precio = parseFloat(fila.find('.precio').val()) || 0;
      var subtotal = cantidad * precio;
      fila.find('.subtotal').val(subtotal.toFixed(2));
      actualizarTotal();
    });
    
    
 
      $('#selectCliente').change(function() {
          var idSeleccionado = $(this).val();
          console.log(idSeleccionado);
          agreDomi(idSeleccionado);
          if (idSeleccionado !== '') {
            $.ajax({
              url:"funciones/cargaDirec.php",
              type:"POST",
              data:{idSeleccionado: idSeleccionado},
              success: function(response){
                const direc = JSON.parse(response);
                    let selectOptions = $("#clientDirec");
                    selectOptions.find('option:not(:first)').remove();    
                    direc.forEach(direccion => {
                        let option = $("<option></option>").attr("value", direccion.id).text(direccion.calle);
                        selectOptions.append(option);
                      });
              }
          })
          }
         
       });

    // Iterar sobre los datos
         
    




    $("#clienteForm").submit(e => {
      e.preventDefault();

      const dataPost = {
          nombre:$("#nombreCliente").val(),
          telefono:$("#telefonoCliente").val(),
          telefono2:$("#telefono2Cliente").val(),
          correo:$("#correoCliente").val()
      };
      console.log(dataPost);
     $.ajax({
          url:"../clientes/funciones/registrar.php",
          data: dataPost,
          type: "POST",
          success: function(response){
              if(!response.error){
                  $("#clienteForm").trigger("reset");
                  $("#Registclient").modal("toggle");
              }
          }
      });
  });

  function agreDomi(idSeleccionado){
  $("#domicilioForm").submit(e => {
    e.preventDefault();
    const dataPost = {
        cliente:idSeleccionado,
        calle:$("#calleD").val(),
        exterior:$("#exteriorD").val(),
        interior:$("#interiorD").val(),
        colonia:$("#coloniaD").val(),
        ciudad:$("#ciudadD").val(),
        estado:$("#estadoD").val(),
        pais:$("#paisD").val(),
        referencia:$("#referenciaD").val()
    };

    console.log(dataPost);

    $.ajax({
      url:"../clientes/funciones/registrar_domicilio.php",
      data:dataPost,
        type: "POST",
        success: function(response){
          console.log(response);
            if(!response.error){
                $("#domicilioForm").trigger("reset");
                $("#DireClient").modal("toggle");                
            }
        }
    });

});

}

    /*$('#btnPreview') .on('click', function(){
      //Obtenemos Datos
      let datos = [];
  
      $('#tabla tbody tr').each(function(){
        var fila = [];
        fila["descripcion"] = $(this).find('.descripcion').val();
        fila["sku"] = $(this).find('.sku').val();
        fila["cantidad"] = $(this).find('.cantidad').val();
        fila["precio"] = $(this).find('.precio').val();
        fila["subtotal"] = $(this).find('.subtotal').val();
        datos.push(fila);
      });
  
      //Limpiamos Tabla
      $("#modalTabla tbody").empty();
      $("#modalTabla thead").empty();
  
  
      let encabezados = `                                  
        <th scope="col">Descripcion</th>
        <th scope="col">SKU</th>
        <th scope="col" class='text-center'>Cantidad</th>
        <th scope="col" class="text-center">P.Unitario</th>
        <th scope="col" class="text-center">Subtotal</th>                                 
      `;
  
      $('#modalTabla thead').append($.parseHTML(encabezados));
  
      $.each(datos,function(index,fila){
        let plantilla = `<tr>
          <td>${fila.descripcion}</td>
          <td>${fila.sku}</td>
          <td class='text-center'>${fila.cantidad}</td>
          <td class='text-center'>${fila.precio}</td>
          <td class='text-center'>${fila.subtotal}</td>
        </tr>`;
        $('#modalTabla tbody').append($.parseHTML(plantilla));
      });
  
      console.log(datos);
    });*/
  
  
  
    });

    $("#clientDirec").change(function(){
      clientId = $(this).val();
      direct(clientId);
    });
    
    function direct(clientId){
            $.ajax({
                url:"funciones/selectDirec.php",
                type:"POST",
                data:{clientId:clientId},
                success:function(data){
                    var direct = JSON.parse(data);
                    console.log(direct); 
                    direct.forEach(direc =>{
                      console.log(direc);
                      $("#CALLECLIENTE").val(direc.calle);
                      console.log($("#CALLECLIENTE").val());
                      $("#interiorDirectContrato").val(direc.interior);
                      console.log($("#interiorDirectContrato").val());
                      $("#exteriorDirectContrato").val(direc.exterior);
                      console.log($("#exteriorDirectContrato").val());
                      $("#coloniaDirectContrato").val(direc.colonia);
                      console.log($("#coloniaDirectContrato").val());
                      $("#ciudadDirectContrato").val(direc.ciudad);
                      console.log($("#ciudadDirectContrato").val());
                      $("#estadoDirectContrato").val(direc.estado);
                      console.log($("#estadoDirectContrato").val());
                      $("#paisDirectContrato").val(direc.pais);
                      console.log($("#paisDirectContrato").val());
                      $("#referenciaDirectContrato").val(direc.referencias);
                      console.log($("#referenciaDirectContrato").val());
    
                    }) 
                }
            })
    }

    $('#prueba_Boton_X').click(function(){
      $("#interiorD").val("si funciona");
      console.log('Si funciona');

    });