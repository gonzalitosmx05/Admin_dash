
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
    

    $('#table').on('change','.A1, .A2',function(){
      var fila = $(this).closest('tr');
      var A1 = parseFloat(fila.find('#A1').val()) || 0;
      var A2 = parseFloat(fila.find('#A2').val()) || 0;
      var balance = A1 + A2;
      fila.find('#balance').val(balance.toFixed(2));
      console.log(balance);
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
                window.location.reload();                
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

    $('#pdfButton').click(function(){
      
        var numFolio = Math.floor(Math.random() * 90000) + 10000;
        var folioInput = document.getElementById('folioInput');

        folioInput.value = numFolio
    });
    /*
      const dataPost = {
        Idclient:$("#selectCliente").val(),
        cuid:$("#ciudadDirectContrato").val(),
        est:$("#estadoDirectContrato").val(),
        CE:$("#selectCliente").val(),
        tel1:$("#selectCliente").val(),
        tel2:$("#selectCliente").val(),
        Iduser:$("#user").val(),
        Nmclient:$("#selectCliente option:selected").text(),
        marca:$("#marca").val(),
        modelo:$("#modelo").val(),
        n_serie:$("#nserie").val(),
        anticipo1:$("#A1").val(),
        anticipo2:$("#A2").val(),
        balance:$("#balance").val(),
        subtotal:$("#subtotalGeneral").val(),
        iva:$("#ivaGeneral").val(),
        total:$("#totalGeneral").val(),
        f_pago:$("#selectpago").val(),
        notas:$("#notas").val(),
        folio:$("#folioInput").val(),
        domi: $("#clientDirec option:selected").text(),
        desc: [],
        cant:[],
        precio:[],
        subT:[]
      };
      
      $('input[name="descripcion[]"]').each(function() {
          var valor = $(this).val();
          dataPost.desc.push(valor); 
      });

      $('input[name="cantidad[]"]').each(function() {
        var valor = $(this).val();
        dataPost.cant.push(valor); 
    });

      $('input[name="precio[]"]').each(function() {
        var valor = $(this).val();
        dataPost.precio.push(valor); 
    });

      $('input[name="subtotal[]"]').each(function() {
        var valor = $(this).val();
        dataPost.subT.push(valor); 
    });

    console.log(dataPost);

    $.ajax({
      url:"funciones/registroContrato.php",
      data:dataPost,
        type: "POST",
        success: function(response){
          console.log(response);
        }
    });

    });*/


    //MOSTRAR LA TABLA DE CONTRATOS Y BUSQUEDA DE CONTRATOS
  
      //mostrar Contratos
      $.ajax({
          url:"funciones/cargarContratos.php",
          type:"GET",
          success:function(res){
          console.log(res);
          const cont = JSON.parse(res);
                  let plantilla = "";
                  cont.forEach(contrato => {
                      plantilla +=`
                      <tr idUsuario=${contrato.id}>
                          <td>${contrato.folio}</td>
                          <td>${contrato.cliente}</td>
                          <td>${contrato.n_serie}</td>
                          <td>${contrato.domicilio}</td>
                          <td>${contrato.fc}</td>
                          <td> <button id="desc" data-id="${contrato.id}" type="button" class="btn btn-success editbtn" style="color:white;" data-toggle="modal" data-target="#descContrato">
                          <i class="fa-solid fa-info"></i></button></td>

                      </tr>
                      `;
                      
                  });
                  $("#Contratos").html(plantilla);
          }
      });

            //buscar Contratos
      $('#historialC').on('shown.bs.modal', function () {

        $('#contratoBusqueda').keyup(function(){
            var filtro = $('#filtroBusquedaCont').val();
            var buscar = $(this).val();
            console.log(filtro);
    
            $.ajax({
                url: 'funciones/buscarContrato.php',
                method: 'POST',
                data: {filtro: filtro, buscar: buscar},
                success: function(res){
                  const cont = JSON.parse(res);
                  let plantilla = "";
                  cont.forEach(contrato => {
                      plantilla +=`
                        <tr idUsuario=${contrato.id}>
                            <td>${contrato.folio}</td>
                            <td>${contrato.cliente}</td>
                            <td>${contrato.n_serie}</td>
                            <td>${contrato.domicilio}</td>
                            <td>${contrato.fc}</td>
                            <td> <button id="desc" data-id="${contrato.id}" type="button" class="btn btn-success editbtn" style="color:white;" data-toggle="modal" data-target="#descContrato">
                            <i class="fa-solid fa-info"></i></button></td>
                        </tr>
                        `;

                    });
                    $("#Contratos").html(plantilla);
                }
            });
        });
      });

      $("#Contratos").on("click", "#desc", function () {
        contId = $(this).attr("data-id");
        console.log(contId);
            $.ajax({
              url:"funciones/cargarDesc.php",
            type:"POST",
            data:{contId: contId},
              success:function(response){
                const cont = JSON.parse(response);
                let plantilla = "";
                cont.forEach(contrato => {
                    plantilla +=`
                      <tr idUsuario=${contrato.id}>
                          <td>${contrato.desc}</td>
                          <td>${contrato.cantidad}</td>
                          <td>${contrato.p_u}</td>
                          <td>${contrato.sub}</td>
                          <td hidden id="datas">${contId}</td>
                      </tr>
                      `;
                      
                      
                  });
                  $("#desc_cont").html(plantilla);
              }
          })

          pdfwe(contId);
    });

    

//PREVIEW DEL PDF
    function pdfwe(contId){
      $("#descContrato").on('click','#btnPDF', function() {
       var cont = contId;
       console.log(cont);
       $.ajax({
        url: "funciones/contrato_pdf.php",
        type: "POST",
        data: { cont: cont },
        success: function(response) {
            console.log(response);
            var data = JSON.parse(response);
            console.log(data);            
            // Acceder a las propiedades del objeto directamente
            $("#nameC").text(data.nombre);
            console.log($("#nameC").text());
            $("#dire").text(data.domi);
            console.log($("#dire").text());
            $("#ciudC").text(data.ciudad);
            console.log($("#ciudC").text());
            $("#estC").text(data.estado);
            console.log($("#estC").text());
            $("#CEC").text(data.correo);
            console.log($("#CEC").text());
            $("#Tel1").text(data.tel1);
            console.log($("#Tel1").text());
            $("#Tel2").text(data.tel2);
            console.log($("#Tel2").text());
            $("#folio").text(data.folio);
            console.log($("#folio").text());
            $("#Marca").text(data.marca);
            console.log($("#Marca").text());
            $("#Modelo").text(data.modelo);
            console.log($("#Modelo").text());
            $("#Nserie").text(data.nserie);
            console.log($("#Nserie").text());
            $("#anti1").text("$ "+data.ant1);
            console.log($("#anti1").text());
            $("#anti2").text("$ "+data.ant2);
            console.log($("#anti2").text());
            $("#balanc").text("$ "+data.balance);
            console.log($("#balanc").text());
            $("#fecha").text(data.fecha);
            console.log($("#fecha").text());
            $("#nota").text(data.notas);
            console.log($("#nota").text());            
            $("#sub").text("$ "+data.subT);
            console.log($("#sub").text());
            $("#iva").text("$ "+data.iva);
            console.log($("#iva").text());
            $("#total").text("$ "+data.total);
            console.log($("#total").text());
            $("#pago").text(data.f_pago);
            console.log($("#pago").text());

            var pago = data.f_pago;

            if (pago === "Cheque") {
                $("#cheque").text("X");
            } else if (pago === "Efectivo") {
                $("#efectivo").text("X");
            } else if (pago === "Tarjeta") {
                $("#tarjeta").text("X");
            }

            var detalles = data.detalles;

            // Variables individuales para cada detalle
            var descDetalle1, descDetalle2, descDetalle3, descDetalle4, descDetalle5, descDetalle6, descDetalle7;
        var cantidadDetalle1, cantidadDetalle2, cantidadDetalle3, cantidadDetalle4, cantidadDetalle5, cantidadDetalle6, cantidadDetalle7;
        var p_uDetalle1, p_uDetalle2, p_uDetalle3, p_uDetalle4, p_uDetalle5, p_uDetalle6, p_uDetalle7;
        var subDetalle1, subDetalle2, subDetalle3, subDetalle4, subDetalle5, subDetalle6, subDetalle7;

        detalles.forEach(function(detalle, index) {
            // Acceder a las propiedades de cada detalle y asignarlas a las variables individuales
            if (index === 0) {
                descDetalle1 = detalle.desc;
                cantidadDetalle1 = detalle.cantidad;
                p_uDetalle1 = detalle.p_u;
                subDetalle1 = detalle.sub;
            } else if (index === 1) {
                descDetalle2 = detalle.desc;
                cantidadDetalle2 = detalle.cantidad;
                p_uDetalle2 = detalle.p_u;
                subDetalle2 = detalle.sub;
            } else if (index === 2) {
                descDetalle3 = detalle.desc;
                cantidadDetalle3 = detalle.cantidad;
                p_uDetalle3 = detalle.p_u;
                subDetalle3 = detalle.sub;
            } else if (index === 3) {
                descDetalle4 = detalle.desc;
                cantidadDetalle4 = detalle.cantidad;
                p_uDetalle4 = detalle.p_u;
                subDetalle4 = detalle.sub;
            } else if (index === 4) {
                descDetalle5 = detalle.desc;
                cantidadDetalle5 = detalle.cantidad;
                p_uDetalle5 = detalle.p_u;
                subDetalle5 = detalle.sub;
            } else if (index === 5) {
                descDetalle6 = detalle.desc;
                cantidadDetalle6 = detalle.cantidad;
                p_uDetalle6 = detalle.p_u;
                subDetalle6 = detalle.sub;
            } else if (index === 6) {
                descDetalle7 = detalle.desc;
                cantidadDetalle7 = detalle.cantidad;
                p_uDetalle7 = detalle.p_u;
                subDetalle7 = detalle.sub;
            }
        });

        // Ahora puedes usar las variables individuales como necesites
        $("#desc1").text(descDetalle1);
        console.log(descDetalle1);
        $("#desc2").text(descDetalle2);
        console.log(descDetalle2);
        $("#desc3").text(descDetalle3);
        console.log(descDetalle3);
        $("#desc4").text(descDetalle4);
        console.log(descDetalle4);
        $("#desc5").text(descDetalle5);
        console.log(descDetalle5);
        $("#desc6").text(descDetalle6);
        console.log(descDetalle6);
        $("#desc7").text(descDetalle7);
        console.log(descDetalle7);
        $("#cant1").text(cantidadDetalle1);
        console.log(cantidadDetalle1);
        $("#cant2").text(cantidadDetalle2);
        console.log(cantidadDetalle2);
        $("#cant3").text(cantidadDetalle3);
        console.log(cantidadDetalle3);
        $("#cant4").text(cantidadDetalle4);
        console.log(cantidadDetalle4);
        $("#cant5").text(cantidadDetalle5);
        console.log(cantidadDetalle5);
        $("#cant6").text(cantidadDetalle6);
        console.log(cantidadDetalle6);
        $("#cant7").text(cantidadDetalle7);
        console.log(cantidadDetalle7);
        $("#PU1").text(p_uDetalle1);
        console.log(p_uDetalle1);
        $("#PU2").text(p_uDetalle2);
        console.log(p_uDetalle2);
        $("#PU3").text(p_uDetalle3);
        console.log(p_uDetalle3);
        $("#PU4").text(p_uDetalle4);
        console.log(p_uDetalle4);
        $("#PU5").text(p_uDetalle5);
        console.log(p_uDetalle5);
        $("#PU6").text(p_uDetalle6);
        console.log(p_uDetalle6);
        $("#PU7").text(p_uDetalle7);
        console.log(p_uDetalle7);
        $("#subt1").text(subDetalle1);
        console.log(subDetalle1);
        $("#subt2").text(subDetalle2);
        console.log(subDetalle2);
        $("#subt3").text(subDetalle3);
        console.log(subDetalle3);
        $("#subt4").text(subDetalle4);
        console.log(subDetalle4);
        $("#subt5").text(subDetalle5);
        console.log(subDetalle5);
        $("#subt6").text(subDetalle6);
        console.log(subDetalle6);
        $("#subt7").text(subDetalle7);
        console.log(subDetalle7);
        
    
        }
    });
    //HACER UNA CONSULTA A LAS DOS TABLAS DE CONTRATOS, PARA IMPRIMIR LOS DATOS DEL CONTRATO EN EL PDFOREVIEW.
      //AL FINALIZAR TENEMOS QUE HACER LO MISMO PERO YA CON EL DISEÑO DEL PEDF NORMAL PARA QUE SOLO SE DESCARGUE AL DARLE CLICK EN EL BOTON DEL MODAL DEL PREVIEW DEL PDF.
    
     }); 

   }

   $("#btnPDFPreview").on('click','#saveButton', function() {
    window.location.reload();   

  });
   
   $("#btnPDFPreview").on('click','#pdfsave', function() {
    PDFsave();
    window.location.reload();  
  });
    //Funcion para Generar Archivo PDF
function PDFsave(){
      //Importamos la libreria 
      const {jsPDF} = window.jspdf;
      //window.html2canvas = html2canvas;
      const Qrcode = window.Qrcode;
  
  var doc = new jsPDF('p','pt','letter');
  var Cheque = $("#cheque").text();
  var Efectivo = $("#efectivo").text();
  var Tarjeta = $("#tarjeta").text();
  var nombre = $("#nameC").text();
  //var domicilio = $("#dire").text();
  //var ciudad = $("#ciudC").text();
  //var estado = $("#estC").text();
  var CO = $("#CEC").text();
  var TE = $("#Tel1").text();
  var TE2 = $("#Tel2").text();
  console.log(CO);
  
 // VALORES
  var DIRE = $("#dire").text();
  var CIUD = $("#ciudC").text();
  var ESTD = $("#estC").text();

 // FECHA, NUMERO DE FOLIO Y CONTRATO
// Supongamos que 'fecha' es la fecha obtenida de tu consulta
var fechaOriginal = $("#fecha").text();

// Convertir la fecha a un objeto Date
var fechaObjeto = new Date(fechaOriginal);

// Obtener los componentes de la fecha
var dia = fechaObjeto.getDate() + 1;
var mes = fechaObjeto.getMonth() + 1; // Sumar 1 porque los meses van de 0 a 11
var anio = fechaObjeto.getFullYear();

// Formatear la fecha en el formato deseado (DD/MM/YYYY)
var fechaFormateada = dia + '/' + mes + '/' + anio;

console.log(fechaFormateada); // Output: '10/5/2024'



 // Generar un número de folio único combinando la fecha actual con un número aleatorio
/*function generarNumeroFolio() {
  var fechaActual = new Date();
  var dia = fechaActual.getDate();
  var mes = fechaActual.getMonth() + 1; // Sumar 1 porque los meses van de 0 a 11
  var año = fechaActual.getFullYear();
  var numeroAleatorio = Math.floor(Math.random() * 1000); // Número aleatorio entre 0 y 999

  var numeroFolio = año + "-" + mes + "-" + dia + "-" + numeroAleatorio;
  return numeroFolio;
}*/

var numeroFolio = $("#folio").text();

  // DATOS DEL CONTRATO
  var COD = $("#desc1").text();
  var CID = $("#cant1").text();;
  var EDE =  $("#PU1").text();
  var ED = $("#subt1").text();

  var DES2 = $("#desc2").text();
  var CAD2 = $("#cant2").text();;
  var PU2 =  $("#PU2").text();
  var SD2 = $("#subt2").text();

  var DES3 = $("#desc3").text();
  var CAD3 = $("#cant3").text();;
  var PU3 =  $("#PU3").text();
  var SD3 = $("#subt3").text();

  var DES4 = $("#desc4").text();
  var CAD4 = $("#cant4").text();;
  var PU4 =  $("#PU4").text();
  var SD4 = $("#subt4").text();

  var DES5 = $("#desc5").text();
  var CAD5 = $("#cant5").text();;
  var PU5 =  $("#PU5").text();
  var SD5 = $("#subt5").text();

  var DES6 = $("#desc6").text();
  var CAD6 = $("#cant6").text();;
  var PU6 =  $("#PU6").text();
  var SD6 = $("#subt6").text();

  var DES7 = $("#desc7").text();
  var CAD7 = $("#cant7").text();;
  var PU7 =  $("#PU7").text();
  var SD7 = $("#subt7").text();


  var marca = $("#marca").text();
  var modelo = $("#modelo").text();
  var nserie = $("#nserie").text();

  var subtotal = $("#sub").text();
  var iva = $("#iva").text();
  var total = $("#total").text();

  var A1 = $("#anti1").text();
  var A2 = $("#anti2").text();
  var balance = $("#balnc").text();
  var notas = $("#nota").text();



  //IMAGENES
  var logo = new Image();
  logo.src = '../../assets/imagenes/logoCDT.png';
  doc.addImage(logo, 'JPEG', 5, 0,135,140);
  var logo1 = new Image();
  logo1.src = '../../assets/imagenes/logo2CDT.png';
  doc.addImage(logo1, 'JPEG',143,0,470,100);
  var logo2 = new Image();
  logo2.src = '../../assets/imagenes/pp.png';
  doc.addImage(logo2, 'JPEG',0,722,620,70);
  var logo3 = new Image();
  logo3.src = '../../assets/imagenes/FP.png';
  doc.addImage(logo3, 'JPEG', 15, 670,100,25);



  //RECTANGULOS DE INFORMACION
  //Contrato y Folio
  doc.setFont("Helvetica", "bold");
  doc.setFontSize(40);
  doc.text (anio.toString(), 245, 98);
  doc.setFontSize(25);
  doc.text ("CONTRATO", 240, 125);



  doc.setFont("Helvetica","");
  doc.setFontSize(10); 
  doc.text (dia.toString(), 160, 147);
  doc.text (mes.toString(), 195, 147);
  doc.text ("FECHA DE CONTRATACIÓN: _____/_____ " + anio.toString(), 15, 150);
  doc.text ("FECHA DE INSTALACIÓN: _____/_____ "+ anio.toString(), 15, 165);


  doc.setLineWidth(3); // Grosor de la línea en puntos
  doc.setDrawColor(169, 8, 8);
  doc.setTextColor(169, 8, 8);
  doc.text ("FOLIO:", 460, 146);
  doc.rect (410, 110, 185, 15,'S');
  doc.setTextColor(0);
  doc.text (numeroFolio, 510, 146);
  doc.rect (500, 135, 95, 15,'S');

  //Datos e Informacion del Usuario
  doc.setLineWidth(1); // Grosor de la línea en puntos
  doc.setDrawColor(0);
  doc.setTextColor(0);

  doc.setFillColor(196, 194, 220);
  doc.setFont("Helvetica","");
  doc.setFontSize(13);
  doc.text ("DATOS DEL CLIENTE", 240, 165);
  doc.roundedRect (10, 170, 590, 90,2,2,'S'); //datos del clientes
  doc.setFontSize(10);
  doc.text ("NOMBRE DEL CLIENTE", 240, 180);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (13, 183, 583, 15, 3, 3,'F');
  doc.text(nombre,250, 197);
  doc.text ("DIRECCIÓN", 110, 209);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (13, 210, 300, 15, 3, 3,'F');
  doc.text(DIRE,50, 220);
  doc.text ("CIUDAD", 355, 209);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (317, 210, 135, 15, 3, 3,'F');
  doc.text(CIUD,360, 220);
  doc.text ("ESTADO", 500, 209);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (458, 210, 135, 15, 3, 3,'F');
  doc.text(ESTD,500, 220);
  doc.text ("CORREO ELECTRONICO", 100,  237);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (13, 240, 300, 15, 3, 3,'F');
  doc.text(CO, 40, 250);
  doc.text ("TELEFONO #1", 355, 237);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (317, 240, 135, 15, 3, 3,'F');
  doc.text(TE, 345, 250);
  doc.text ("TELEFONO #2", 500, 237);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (458, 240, 135, 15, 3, 3,'F');
  doc.text(TE2, 508, 250);


  doc.setFontSize(13);
  doc.text ("INFORMACION DEL EQUIPO:", 50, 275);
  doc.roundedRect (10, 280, 285, 90,2,2,'S');//informacion del equipo
  doc.setFontSize(10);
  //doc.rect (10, 293, 285, 15,'S');
  doc.text ("MARCA:", 130, 290);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (13, 293, 278, 15, 3, 3,'F');
  doc.text(marca, 130, 302);
  //doc.rect (10, 280, 285, 15,'S');
  doc.text ("MODELO:", 125, 317);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (13, 320, 278, 15, 3, 3,'F');
  doc.text(modelo, 130, 330);
  //doc.rect (10, 280, 285, 15,'S');
  doc.text ("NO. SERIE:", 120, 347);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (13, 350, 278, 15, 3, 3,'F');
  doc.text(nserie, 130, 360);


  doc.setFontSize(13);
  doc.text ("INFORMACION DEL USUARIO:", 350, 275);
  doc.roundedRect (315, 280, 285, 90,2,2,'S');//informacion del usuario
  //doc.rect (10, 293, 285, 15,'S');
  doc.setFontSize(10);
  doc.text ("CORREO/TELEFONO:", 380, 290);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (318, 293, 250, 15, 3, 3,'F');
  //doc.rect (10, 280, 285, 15,'S');
  doc.text ("USUARIO:", 400, 317);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (318, 320, 250, 15, 3, 3,'F');
  //doc.rect (10, 280, 285, 15,'S');
  doc.text ("CONTRASEÑA:", 400, 347);
  doc.setFillColor(221, 227, 255 );
  doc.roundedRect (318, 350, 250, 15, 3, 3,'F');

  //doc.rect (10, 280, 285, 15,'S');
  doc.text ("NUBE:", 550, 317);
  doc.setFillColor(221, 227, 255 );
  doc.rect (587, 308, 10, 10,'F');
  //doc.rect (10, 280, 285, 15,'S');
  doc.text ("NUBE:", 550, 347);
  doc.setFillColor(221, 227, 255 );
  doc.rect (587, 336, 10, 10,'F');


  //Detalles y Resumen de equipo
  doc.setFontSize(13);
  doc.text ("RESUMEN DEL EQUIPO:", 230, 390);
  doc.roundedRect (10, 395, 590, 185,2,2,'S');//resumen del equipo
  doc.setFontSize(10);
  doc.text ("DESCRIPCCIÓN:", 130, 410);
  doc.text ("CANT:", 340, 410);
  doc.text ("P. UNITARIO:", 410, 410);
  doc.text ("SUBTOTAL:", 520, 410);
  doc.text ("1", 15, 425);
  doc.text ("2", 15, 449);
  doc.text ("3", 15, 473);
  doc.text ("4", 15, 497);
  doc.text ("5", 15, 521);
  doc.text ("6", 15, 545);
  doc.text ("7", 15, 569);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (25, 411, 300, 19, 3, 3,'F');
  doc.roundedRect (330, 411, 50, 19, 3, 3,'F');
  doc.roundedRect (385, 411, 100, 19, 3, 3,'F');
  doc.roundedRect (490, 411, 100, 19, 3, 3,'F');
  doc.text (COD, 35, 425);
  doc.text (CID, 340, 425);
  doc.text (EDE, 395, 425);
  doc.text (ED, 500, 425);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (25, 435, 300, 19, 3, 3,'F');
  doc.roundedRect (330, 435, 50, 19, 3, 3,'F');
  doc.roundedRect (385, 435, 100, 19, 3, 3,'F');
  doc.roundedRect (490, 435, 100, 19, 3, 3,'F');
  doc.text (DES2, 35, 449);
  doc.text (CAD2, 340, 449);
  doc.text (PU2, 395, 449);
  doc.text (SD2, 500, 449);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (25, 459, 300, 19, 3, 3,'F');
  doc.roundedRect (330, 459, 50, 19, 3, 3,'F');
  doc.roundedRect (385, 459, 100, 19, 3, 3,'F');
  doc.roundedRect (490, 459, 100, 19, 3, 3,'F');
  doc.text (DES3, 35, 473);
  doc.text (CAD3, 340, 473);
  doc.text (PU3, 395, 473);
  doc.text (SD3, 500, 473);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (25, 483, 300, 19, 3, 3,'F');
  doc.roundedRect (330, 483, 50, 19, 3, 3,'F');
  doc.roundedRect (385, 483, 100, 19, 3, 3,'F');
  doc.roundedRect (490, 483, 100, 19, 3, 3,'F');
  doc.text (DES4, 35, 497);
  doc.text (CAD4, 340, 497);
  doc.text (PU4, 395, 497);
  doc.text (SD4, 500, 497);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (25, 507, 300, 19, 3, 3,'F');
  doc.roundedRect (330, 507, 50, 19, 3, 3,'F');
  doc.roundedRect (385, 507, 100, 19, 3, 3,'F');
  doc.roundedRect(490, 507, 100, 19, 3, 3, 'F');
  doc.text (DES5, 35, 522);
  doc.text (CAD5, 340, 522);
  doc.text (PU5, 395, 522);
  doc.text (SD5, 500, 522);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (25, 531, 300, 19, 3, 3,'F');
  doc.roundedRect (330, 531, 50, 19, 3, 3,'F');
  doc.roundedRect (385, 531, 100, 19, 3, 3,'F');
  doc.roundedRect (490, 531, 100, 19, 3, 3,'F');
  doc.text (DES6, 35, 545);
  doc.text (CAD6, 340, 545);
  doc.text (PU6, 395, 545);
  doc.text (SD6, 500, 545);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (25, 555, 300, 19, 3, 3,'F');
  doc.roundedRect (330, 555, 50, 19, 3, 3,'F');
  doc.roundedRect (385, 555, 100, 19, 3, 3,'F');
  doc.roundedRect (490, 555, 100, 19, 3, 3,'F');
  doc.text (DES7, 35, 569);
  doc.text (CAD7, 340, 569);
  doc.text (PU7, 395, 569);
  doc.text (SD7, 500, 569);


 


  //doc.setTextColor(255,0,0);
  doc.setFontSize(10);
  doc.text ("ANTICIPO #1", 25, 600);
  doc.text ("ANTICIPO #2", 125, 600);
  doc.text ("BALANCE", 225, 600);
  doc.text ("FORMA DE PAGO", 22, 665);


  doc.setFontSize(15);
  doc.text ("$", 14, 623);
  doc.text ("$", 112, 623);
  doc.text ("$", 208, 623);


  if(A1 > 0){
      doc.setFontSize(10);
      doc.text (dia.toString(), 20, 638);
      doc.text (mes.toString(), 57, 638);
   
  }
  if(A2 > 0){
      doc.setFontSize(10);
      doc.text (dia.toString(), 120, 638);
      doc.text (mes.toString(), 157, 638);
   
  }


  doc.setFontSize(10);
  doc.text ("_____/_____ " + anio.toString(), 15, 640);
  doc.text ("_____/_____ "+ anio.toString(), 112, 640);

  doc.setTextColor(0);
  doc.setFillColor(0);
  doc.roundedRect (13, 653, 100, 15,2,2,'S'); //FORMA DE PAGO
  doc.roundedRect (125, 690, 220, 25,2,2,'S'); //FIRMA DEL CLIENTE
  doc.setFillColor(198, 197, 197);
  doc.text ("FIRMA DEL CLIENTE", 180, 710);

  doc.setFontSize(10);
  doc.text ("NOTAS:", 390, 648);
  //doc.roundedRect (350, 650, 250, 60,2,2,'S'); //NOTAS

  const x1 = 350;
  const y1 = 650;
  const width1 = 250;
  const height1 = 60;

  doc.roundedRect(x1, y1, width1, height1,2,2, 'S'); 
  doc.text(notas, x1 + 5, y1 + 10, { maxWidth: width1 - 10 });


  doc.roundedRect (13, 590, 90, 15, 2, 2,'S'); //ANTICIPO 1
  doc.setFontSize(12);
  doc.text(A1.toString(),36, 620);
  doc.roundedRect (13, 608, 90, 20,2,2,'S'); 

  doc.roundedRect (110, 590, 90, 15, 2, 2,'S'); //ANTICIPO 2
  doc.setFontSize(12);
  doc.text(A2.toString(),133, 620);
  doc.roundedRect (110, 608, 90, 20,2,2,'S'); 

  doc.roundedRect (207, 590, 90, 15, 2, 2,'S'); //BALANCE
  doc.setFontSize(12);
  //doc.text(balance,230, 620);
  doc.roundedRect (207, 608, 90, 20,2,2,'S'); 


  doc.roundedRect (305, 590, 135, 43,2,2,'S');//cargo por cuenta anual


  doc.setFontSize(10);
  doc.text ("SUBTOTAL:", 460, 600);
  doc.text ("IVA:", 480, 615);
  doc.text ("TOTAL:", 470, 630);

  doc.setFillColor(243, 243, 243);
  doc.roundedRect (525, 590, 72, 10, 3, 3,'F');//subtotal iva y total
  doc.roundedRect (525, 605, 72, 10, 3, 3,'F');
  doc.roundedRect (525, 620, 72, 10, 3, 3,'F');
  doc.text (subtotal, 550, 598);
  doc.text (iva, 550, 613);
  doc.text (total, 550, 628);


    doc.text (Cheque.toString(), 25, 710);
    doc.text (Efectivo.toString(), 65, 710);
    doc.text (Tarjeta.toString(), 100, 710);
    doc.roundedRect (13, 700, 30, 15, 3, 3,'S');//FORMA DE PAGO
    doc.roundedRect (50, 700, 30, 15, 3, 3,'S');
    doc.roundedRect (85, 700, 30, 15, 3, 3,'S');


   
    



  const x = 120;
  const y = 650;
  const width = 220;
  const height = 35;

  doc.setFontSize(7);
  doc.text("CARGO ANUAL POR CUENTA: 995.00",310, 600);
  doc.text("________________________________",310, 620);
  doc.text("ACEPTO",355, 630);
  doc.setDrawColor(255, 255, 255); 
  doc.rect(x, y, width, height, 'S'); 
  
  const texto = 'Con esta Firma acepto los terminos y condiciones de este contrato, de igual forma, estoy satisfecho(a) y conforme con el trabajo realizado y 100% terminado, estando asi conciente que dicha empresa no acepta ningun tipo de devoluciones.';

  doc.text(texto, x + 5, y + 5, { maxWidth: width - 10 });
  

  //descargar PDF
  doc.save("Contrato_" + numeroFolio + ".pdf");}

 






  

   