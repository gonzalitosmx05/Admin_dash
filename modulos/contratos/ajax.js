
$(document).ready(function(){

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