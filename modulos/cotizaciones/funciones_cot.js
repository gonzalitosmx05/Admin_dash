
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
  
  //Boton para agregar nueva fila en tabla 
  $('#agregar_producto').click(function(){
      let plantillaFila = `
        <tr id="TRow" class="fila-fija">
          <td>
            <input name="descripcion[]" required type="text" class="descripcion form-control" placeholder="Descripcion" autocomplete="off">
          </td>
          <td>
            <input name="sku" type="text" class="sku form-control" placeholder="SKU" autocomplete="off">
          </td>
          <td>
            <input name="cantidad[]" required type="number" class="cantidad form-control" value="1" autocomplete="off">
          </td>
          <td>
            <input name="precio[]" required type="number" class="precio form-control" placeholder="0" autocomplete="off">
          </td>
          <td>
            <input name="subtotal[]" disabled type="text" class="subtotal form-control" placeholder="0" autocomplete="off">
          </td>
          <td>
            <button type="button" class="eliminarFila btn btn-danger">
              <i class="fas fa-times"></i>
            </button>
          </td>`;
      
      $('#tabla tbody').append($.parseHTML(plantillaFila));    
  
      actualizarTotal();
  });
  
  //Eliminar fila de la tabla (se uso un on click ya que es mas robusto la funcion click directa da fallos)
  $('#tabla tbody').on('click','.eliminarFila',function(){
    $(this).closest('tr').remove();
    actualizarTotal();
  });
  
  $('#btnPreview') .on('click', function(){
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
      <th scope="col" style="width: 45%;">Descripcion</th>
      <th scope="col" style="width: 13.75%;">SKU</th>
      <th scope="col" style="width: 13.75%;" class='text-center'>Cantidad</th>
      <th scope="col" style="width: 13.75%;" class="text-center">P.Unitario</th>
      <th scope="col" style="width: 13.75%;" class="text-center">Subtotal</th>                                 
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

    console.log('Si actualizo');
  });



  });