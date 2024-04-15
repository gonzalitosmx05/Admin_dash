<?php

require('jspdf.min.js');//window.html2canvas = html2canvas;

//VALORES
$doc = new jsPDF('p','pt','letter');
$text = document.getElementById('selectpago').value;

// var CD = document.getElementById('selectCliente').value;
$DIRE = document.getElementById('clientDirec').value;
$CIUD = document.getElementById('ciudadDirectContrato').value;
$ESTD = document.getElementById('estadoDirectContrato').value;


// var CE = document.getElementById('').value;
 $CODCOD = document.getElementById('Desc_1').value;
 $CID = document.getElementById('Cant_1').value;
 $EDE = document.getElementById('PU_1').value;
 $ED = document.getElementById('Sub_1').value;

 $DES2 = document.getElementById('Desc_2').value;
 $CAD2 = document.getElementById('Cant_2').value;
 $PU2 = document.getElementById('PU_2').value;
 $SD2 = document.getElementById('Sub_2').value;

 $DES3 = document.getElementById('Desc_3').value;
 $CAD3 = document.getElementById('Cant_3').value;
 $PU3 = document.getElementById('PU_3').value;
 $SD3 = document.getElementById('Sub_3').value;

 $DES4 = document.getElementById('Desc_4').value;
 $CAD4 = document.getElementById('Cant_4').value;
 $PU4 = document.getElementById('PU_4').value;
 $SD4 = document.getElementById('Sub_4').value;

 $DES5 = document.getElementById('Desc_5').value;
 $CAD5 = document.getElementById('Cant_5').value;
 $PU5 = document.getElementById('PU_5').value;
 $SD5 = document.getElementById('Sub_5').value;

 $DES6 = document.getElementById('Desc_6').value;
 $CAD6 = document.getElementById('Cant_6').value;
 $PU6 = document.getElementById('PU_6').value;
 $SD6 = document.getElementById('Sub_6').value;

 $DES7 = document.getElementById('Desc_7').value;
 $CAD7 = document.getElementById('Cant_7').value;
 $PU7 = document.getElementById('PU_7').value;
 $SD7 = document.getElementById('Sub_7').value;


 $marca = document.getElementById('marca').value;
 $modelo = document.getElementById('modelo').value;
 $nserie = document.getElementById('nserie').value;

 $subtotal = document.getElementById('subtotalGeneral').value;
 $iva = document.getElementById('ivaGeneral').value;
 $total = document.getElementById('totalGeneral').value;

 $A1 = document.getElementById('A1').value;
 $A2 = document.getElementById('A2').value;
 $balance = document.getElementById('balance').value;
 $notas = document.getElementById('notas').value;


//IMAGENES
$logo = new Image();
$logo->src = '../../assets/imagenes/logoCDT.png';
$doc->addImage($logo, 'JPEG', 5, 0,135,140);
$logo1 = new Image();
$logo1->src = '../../assets/imagenes/logo2CDT.png';
$doc->addImage($logo1, 'JPEG',143,0,470,100);
$logo2 = new Image();
$logo2->src = '../../assets/imagenes/pp.png';
$doc->addImage($logo2, 'JPEG',0,722,620,70);
$logo3 = new Image();
$logo3->src = '../../assets/imagenes/FP.png';
$doc->addImage($logo3, 'JPEG', 15, 670,100,25);



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
doc.text('',15, 197);
doc.text ("DIRECCIÓN", 110, 209);
doc.setFillColor(221, 227, 255 );
doc.roundedRect (13, 210, 300, 15, 3, 3,'F');
doc.text(DIRE,20, 220);
doc.text ("CIUDAD", 355, 209);
doc.setFillColor(221, 227, 255 );
doc.roundedRect (317, 210, 135, 15, 3, 3,'F');
doc.text(CIUD,320, 220);
doc.text ("ESTADO", 500, 209);
doc.setFillColor(221, 227, 255 );
doc.roundedRect (458, 210, 135, 15, 3, 3,'F');
doc.text(ESTD,465, 220);
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
doc.setFillColor(229, 230, 241);
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
doc.text (SD5, 500, 222);

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

doc.setFontSize(10);
doc.text ("_____/_____ 2024", 15, 640);
doc.text ("_____/_____ 2024", 112, 640);

doc.setTextColor(0);
doc.setFillColor(0);
doc.roundedRect (13, 653, 100, 15,2,2,'S'); //FORMA DE PAGO
doc.roundedRect (125, 690, 220, 25,2,2,'S'); //FIRMA DEL CLIENTE
doc.setFillColor(198, 197, 197);
doc.text ("FIRMA DEL CLIENTE", 180, 710);

doc.setFontSize(10);
doc.text ("NOTAS:", 390, 648);
//doc.roundedRect (350, 650, 250, 60,2,2,'S'); //NOTAS

 $x1 = 350;
 $y1 = 650;
 $width1 = 250;
 $height1 = 60;

//$doc->roundedRect($x1, $y1, $width1, $height1,2,2, 'S'); 
//$doc->text($notas, $x1 + 5, $y1 + 10, ($maxWidth: $width1 - 10 ));


doc.roundedRect (13, 590, 90, 15, 2, 2,'S'); //ANTICIPO 1
doc.setFontSize(12);
doc.text(A1,36, 620);
doc.roundedRect (13, 608, 90, 20,2,2,'S'); 

doc.roundedRect (110, 590, 90, 15, 2, 2,'S'); //ANTICIPO 2
doc.setFontSize(12);
doc.text(A2,133, 620);
doc.roundedRect (110, 608, 90, 20,2,2,'S'); 

doc.roundedRect (207, 590, 90, 15, 2, 2,'S'); //BALANCE
doc.setFontSize(12);
doc.text(balance,230, 620);
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

if($text == 'Cheque'){
    doc.text ('X', 25, 710);
    doc.roundedRect (13, 700, 30, 15, 3, 3,'S');//FORMA DE PAGO
    doc.roundedRect (50, 700, 30, 15, 3, 3,'S');
    doc.roundedRect (85, 700, 30, 15, 3, 3,'S');

}else if($text == 'Efectivo'){
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

 $texto = 'Con esta Firma acepto los terminos y condiciones de este contrato, de igual forma, estoy satisfecho(a) y conforme con el trabajo realizado y 100% terminado, estando asi conciente que dicha empresa no acepta ningun tipo de devoluciones.';

//doc.text($texto, x + 5, y + 5, { maxWidth: width - 10 });


doc.addFileToVFS('Roboto-monospace.ttf', base64Font);
doc.addFont('Roboto-monospace.ttf', 'Roboto', 'monospace');


//doc.text(text,200,100);

//Mostramos el PDF sin descargar
doc.output('pdfobjectnewwindow');


?>