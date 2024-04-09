//Elementos en el HTML
const pdfButton = document.getElementById('pdfButton');

//Eventos asignados
pdfButton.onclick = generarPDF;

//Funcion para Generar Archivo PDF
function generarPDF(){
    //Importamos la libreria 
    const {jsPDF} = window.jspdf;
    //window.html2canvas = html2canvas;
    const base64Font = 'your-bas64-encoded-font-goes-here';

    //VALORES
    var doc = new jsPDF('p','pt','letter');
    var text = document.getElementById('selectpago').value;
    
    var CD = document.getElementById('selectCliente').value;
   // var CE = document.getElementById('').value;
    var COD = document.getElementById('coloniaD').value;
    var CID = document.getElementById('ciudadD').value;
    var ED = document.getElementById('estadoD').value;

    var marca = document.getElementById('marca').value;
    var modelo = document.getElementById('modelo').value;
    var nserie = document.getElementById('nserie').value;

    var subtotal = document.getElementById('subtotalGeneral').value;
    var iva = document.getElementById('ivaGeneral').value;
    var total = document.getElementById('totalGeneral').value;

    var A1 = document.getElementById('A1').value;
    var A2 = document.getElementById('A2').value;
    var balance = document.getElementById('balance').value;


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
    doc.text ("2 0 2 4", 245, 98);
    doc.setFontSize(25);
    doc.text ("CONTRATO", 240, 125);



    doc.setFont("Helvetica","");
    doc.setFontSize(10);
    doc.text ("FECHA DE CONTRATACIÓN: _____/_____ 2024", 15, 150);
    doc.text ("FECHA DE INSTALACIÓN: _____/_____ 2024", 15, 165);


    doc.setLineWidth(3); // Grosor de la línea en puntos
    doc.setDrawColor(169, 8, 8);
    doc.setTextColor(169, 8, 8);
    doc.text ("FOLIO:", 460, 145);
    doc.rect (410, 110, 185, 15,'S');
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
    //doc.text(CD,15, 197);
    doc.text ("DIRECCIÓN", 110, 209);
    doc.setFillColor(221, 227, 255 );
    doc.roundedRect (13, 210, 300, 15, 3, 3,'F');
    doc.text(CD,15, 215);
    doc.text ("CIUDAD", 355, 209);
    doc.setFillColor(221, 227, 255 );
    doc.roundedRect (317, 210, 135, 15, 3, 3,'F');
    //doc.text(CD, 320, 215);
    doc.text ("ESTADO", 500, 209);
    doc.setFillColor(221, 227, 255 );
    doc.roundedRect (458, 210, 135, 15, 3, 3,'F');
    //doc.text(CD, 463, 215);
    doc.text ("CORREO ELECTRONICO", 100,  237);
    doc.setFillColor(221, 227, 255 );
    doc.roundedRect (13, 240, 300, 15, 3, 3,'F');
    //doc.text(CE, 15, 245);
    doc.text ("TELEFONO #1", 355, 237);
    doc.setFillColor(221, 227, 255 );
    doc.roundedRect (317, 240, 135, 15, 3, 3,'F');
    //doc.text(CD, 320, 245);
    doc.text ("TELEFONO #2", 500, 237);
    doc.setFillColor(221, 227, 255 );
    doc.roundedRect (458, 240, 135, 15, 3, 3,'F');
    //doc.text(CD, 463, 245);


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
    doc.text ("INFORMACION DEL EQUIPO:", 350, 275);
    doc.roundedRect (315, 280, 285, 90,2,2,'S');//informacion del usuario
    //doc.rect (10, 293, 285, 15,'S');
    doc.setFontSize(10);
    doc.text ("CORREO/TELEFONO:", 430, 290);
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
    doc.text ("SUBTOTAL:", 410, 410);
    doc.text ("TOTAL:", 520, 410);
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

    doc.setFillColor(243, 243, 243);
    doc.roundedRect (25, 435, 300, 19, 3, 3,'F');
    doc.roundedRect (330, 435, 50, 19, 3, 3,'F');
    doc.roundedRect (385, 435, 100, 19, 3, 3,'F');
    doc.roundedRect (490, 435, 100, 19, 3, 3,'F');

    doc.setFillColor(243, 243, 243);
    doc.roundedRect (25, 459, 300, 19, 3, 3,'F');
    doc.roundedRect (330, 459, 50, 19, 3, 3,'F');
    doc.roundedRect (385, 459, 100, 19, 3, 3,'F');
    doc.roundedRect (490, 459, 100, 19, 3, 3,'F');

    doc.setFillColor(243, 243, 243);
    doc.roundedRect (25, 483, 300, 19, 3, 3,'F');
    doc.roundedRect (330, 483, 50, 19, 3, 3,'F');
    doc.roundedRect (385, 483, 100, 19, 3, 3,'F');
    doc.roundedRect (490, 483, 100, 19, 3, 3,'F');

    doc.setFillColor(243, 243, 243);
    doc.roundedRect (25, 507, 300, 19, 3, 3,'F');
    doc.roundedRect (330, 507, 50, 19, 3, 3,'F');
    doc.roundedRect (385, 507, 100, 19, 3, 3,'F');
    doc.roundedRect(490, 507, 100, 19, 3, 3, 'F');

    doc.setFillColor(243, 243, 243);
    doc.roundedRect (25, 531, 300, 19, 3, 3,'F');
    doc.roundedRect (330, 531, 50, 19, 3, 3,'F');
    doc.roundedRect (385, 531, 100, 19, 3, 3,'F');
    doc.roundedRect (490, 531, 100, 19, 3, 3,'F');

    doc.setFillColor(243, 243, 243);
    doc.roundedRect (25, 555, 300, 19, 3, 3,'F');
    doc.roundedRect (330, 555, 50, 19, 3, 3,'F');
    doc.roundedRect (385, 555, 100, 19, 3, 3,'F');
    doc.roundedRect (490, 555, 100, 19, 3, 3,'F');


   


    //doc.setTextColor(255,0,0);
    doc.setFontSize(10);
    doc.text ("ANTICIPO #1", 25, 595);
    doc.text ("ANTICIPO #2", 125, 595);
    doc.text ("BALANCE", 225, 595);

    doc.setFontSize(15);
    doc.text ("$", 14, 623);
    doc.text ("$", 112, 623);
    doc.text ("$", 208, 623);

    doc.setFontSize(10);
    doc.text ("_____/_____ 2024", 15, 640);
    doc.text ("_____/_____ 2024", 112, 640);

    doc.setTextColor(0);
    doc.setFillColor(0);
    doc.roundedRect (13, 653, 100, 15,2,2,'F'); //FORMA DE PAGO
    doc.roundedRect (125, 690, 220, 25,2,2,'S'); //FIRMA DEL CLIENTE
    doc.setFillColor(198, 197, 197);
    doc.text ("FIRMA DEL CLIENTE", 180, 710);

    doc.setFontSize(10);
    doc.text ("NOTAS:", 390, 648);
    doc.roundedRect (350, 650, 250, 60,2,2,'S'); //NOTAS

    doc.setFillColor(0);
    //doc.cell(13, 590, 90, 15,'ANTICIPO #1',0,'C', false);
    doc.roundedRect (13, 590, 90, 15, 2, 2,'F'); //ANTICIPO 1
    doc.setFontSize(12);
    doc.text(A1,36, 620);
    doc.roundedRect (13, 608, 90, 20,2,2,'S'); 

    doc.roundedRect (110, 590, 90, 15, 2, 2,'F'); //ANTICIPO 2
    doc.setFontSize(12);
    doc.text(A2,133, 620);
    doc.roundedRect (110, 608, 90, 20,2,2,'S'); 

    doc.roundedRect (207, 590, 90, 15, 2, 2,'F'); //BALANCE
    doc.setFontSize(12);
    doc.text(balance,230, 620);
    doc.roundedRect (207, 608, 90, 20,2,2,'S'); 


    doc.roundedRect (305, 590, 135, 43,2,2,'S');//cargo por cuenta anual


    doc.setFontSize(10);
    doc.text ("SUBTOTAL:", 460, 600);
    doc.text ("IVA:", 480, 615);
    doc.text ("TOTAL:", 470, 630);

    doc.setFillColor(198, 197, 197);
    doc.roundedRect (525, 590, 72, 10, 3, 3,'F');//subtotal iva y total
    doc.roundedRect (525, 605, 72, 10, 3, 3,'F');
    doc.roundedRect (525, 620, 72, 10, 3, 3,'F');
    doc.text (subtotal, 550, 598);
    doc.text (iva, 550, 613);
    doc.text (total, 550, 628);

    if(text == 'Cheque'){
        doc.text ('X', 25, 710);
        doc.setFillColor(198, 197, 197);
        doc.roundedRect (13, 700, 30, 15, 3, 3,'F');//FORMA DE PAGO
        doc.roundedRect (50, 700, 30, 15, 3, 3,'F');
        doc.roundedRect (85, 700, 30, 15, 3, 3,'F');
    
    }else if(text = 'Efectivo'){
        doc.text ('X', 65, 710);
        doc.setFillColor(198, 197, 197);
        doc.roundedRect (13, 700, 30, 15, 3, 3,'F');//FORMA DE PAGO
        doc.roundedRect (50, 700, 30, 15, 3, 3,'F');
        doc.roundedRect (85, 700, 30, 15, 3, 3,'F');
    }else{
        doc.text ('X', 100, 710);
        doc.setFillColor(198, 197, 197);
        doc.roundedRect (13, 700, 30, 15, 3, 3,'F');//FORMA DE PAGO
        doc.roundedRect (50, 700, 30, 15, 3, 3,'F');
        doc.roundedRect (85, 700, 30, 15, 3, 3,'F');

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
    
    
    doc.addFileToVFS('Roboto-monospace.ttf', base64Font);
    doc.addFont('Roboto-monospace.ttf', 'Roboto', 'monospace');

    
    //doc.text(text,200,100);

    //Mostramos el PDF sin descargar
    doc.output('pdfobjectnewwindow');
}