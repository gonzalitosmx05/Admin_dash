
//Elementos en el HTML
const pdfButton = document.getElementById('pdfButton');

//Eventos asignados
pdfButton.onclick = generarPDF;

//Funcion para Generar Archivo PDF
function generarPDF(){
    var seleccion = $('#selectCliente').val();
   $.ajax({
        url: 'funciones/consulta.php',
        type: 'POST',
        data: { variable: seleccion },
        success: function(datos) {

            console.log(datos);

    var data = JSON.parse(datos);

    console.log(data);
    data.forEach(dat =>{
    var nombre = dat.nombre;
    var TE = dat.telefono;
    var TE2 = dat.telefono_2;
    var CO = dat.correo;

    

    console.log(nombre);
    /*for (var i = 0; i < datos.length; i++) {
        var fila = datos[i];
        var columna2 = fila.nombre;

        var textoa = columna2;
        console.log(textoa);
        
    }*/

        //Importamos la libreria 
        const {jsPDF} = window.jspdf;
        //window.html2canvas = html2canvas;
        const base64Font = 'your-bas64-encoded-font-goes-here';
    
    var doc = new jsPDF('p','pt','letter');
    var text = document.getElementById('selectpago').value;
    
   // VALORES
    var DIRE = document.getElementById('CALLECLIENTE').value;
    var CIUD = document.getElementById('ciudadDirectContrato').value;
    var ESTD = document.getElementById('estadoDirectContrato').value;


   // FECHA, NUMERO DE FOLIO Y CONTRATO
   var year = new Date().getFullYear();
   var Dia = new Date().getDate();
   var mes = new Date().getMonth() + 1;


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

var numeroFolio = document.getElementById('folioInput').value;

    // DATOS DEL CONTRATO
    var COD = document.getElementById('Desc_1').value;
    var CID = document.getElementById('Cant_1').value;
    var EDE = document.getElementById('PU_1').value;
    var ED = document.getElementById('Sub_1').value;

    var DES2 = document.getElementById('Desc_2').value;
    var CAD2 = document.getElementById('Cant_2').value;
    var PU2 = document.getElementById('PU_2').value;
    var SD2 = document.getElementById('Sub_2').value;

    var DES3 = document.getElementById('Desc_3').value;
    var CAD3 = document.getElementById('Cant_3').value;
    var PU3 = document.getElementById('PU_3').value;
    var SD3 = document.getElementById('Sub_3').value;

    var DES4 = document.getElementById('Desc_4').value;
    var CAD4 = document.getElementById('Cant_4').value;
    var PU4 = document.getElementById('PU_4').value;
    var SD4 = document.getElementById('Sub_4').value;

    var DES5 = document.getElementById('Desc_5').value;
    var CAD5 = document.getElementById('Cant_5').value;
    var PU5 = document.getElementById('PU_5').value;
    var SD5 = document.getElementById('Sub_5').value;

    var DES6 = document.getElementById('Desc_6').value;
    var CAD6 = document.getElementById('Cant_6').value;
    var PU6 = document.getElementById('PU_6').value;
    var SD6 = document.getElementById('Sub_6').value;

    var DES7 = document.getElementById('Desc_7').value;
    var CAD7 = document.getElementById('Cant_7').value;
    var PU7 = document.getElementById('PU_7').value;
    var SD7 = document.getElementById('Sub_7').value;


    var marca = document.getElementById('marca').value;
    var modelo = document.getElementById('modelo').value;
    var nserie = document.getElementById('nserie').value;

    var subtotal = document.getElementById('subtotalGeneral').value;
    var iva = document.getElementById('ivaGeneral').value;
    var total = document.getElementById('totalGeneral').value;

    var A1 = parseFloat(document.getElementById('A1').value) || 0;
    var A2 = parseFloat(document.getElementById('A2').value) || 0;
    var balance = document.getElementById('balance').value;
    var notas = document.getElementById('notas').value;



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
    doc.text (year.toString(), 245, 98);
    doc.setFontSize(25);
    doc.text ("CONTRATO", 240, 125);



    doc.setFont("Helvetica","");
    doc.setFontSize(10); 
    doc.text (Dia.toString(), 160, 147);
    doc.text (mes.toString(), 195, 147);
    doc.text ("FECHA DE CONTRATACIÓN: _____/_____ " + year.toString(), 15, 150);
    doc.text ("FECHA DE INSTALACIÓN: _____/_____ "+ year.toString(), 15, 165);


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
        doc.text (Dia.toString(), 20, 638);
        doc.text (mes.toString(), 57, 638);
     
    }
    if(A2 > 0){
        doc.setFontSize(10);
        doc.text (Dia.toString(), 120, 638);
        doc.text (mes.toString(), 157, 638);
     
    }


    doc.setFontSize(10);
    doc.text ("_____/_____ " + year.toString(), 15, 640);
    doc.text ("_____/_____ "+ year.toString(), 112, 640);

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

    if(text == 'Cheque'){
        doc.text ('X', 25, 710);
        doc.roundedRect (13, 700, 30, 15, 3, 3,'S');//FORMA DE PAGO
        doc.roundedRect (50, 700, 30, 15, 3, 3,'S');
        doc.roundedRect (85, 700, 30, 15, 3, 3,'S');
    
    }else if(text = 'Efectivo'){
        doc.text ('X', 65, 710);
        doc.roundedRect (13, 700, 30, 15, 3, 3,'S');//FORMA DE PAGO
        doc.roundedRect (50, 700, 30, 15, 3, 3,'S');
        doc.roundedRect (85, 700, 30, 15, 3, 3,'S');
    }else{
        doc.text ('X', 100, 710);
        doc.roundedRect (13, 700, 30, 15, 3, 3,'S');//FORMA DE PAGO
        doc.roundedRect (50, 700, 30, 15, 3, 3,'S');
        doc.roundedRect (85, 700, 30, 15, 3, 3,'S');

    }

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
    
    

    
    //doc.text(text,200,100);

      


      const dataPost = {
        Idclient:$("#selectCliente").val(),
        cuid:$("#ciudadDirectContrato").val(),
        est:$("#estadoDirectContrato").val(),
        CE:CO,
        tel1:TE,
        tel2:TE2,
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
        folio:numeroFolio,
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



    //Mostramos el PDF sin descargar
    doc.output('pdfobjectnewwindow');
});
}
    });
}

