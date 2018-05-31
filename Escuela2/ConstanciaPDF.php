<?php 
session_start();
require ('fpdf/fpdf.php');
include 'PHP/Tools.php';

$txtClave=$_POST['txtClave'];
$txtNom = $_POST['txtNom'];
$txtCarrera = $_POST['txtCarrera'];
$txtSemestre = $_POST['txtSemestre'];

 $pdf = new FPDF();
 $pdf -> AddPage();
 $pdf -> SetFont('Arial','B',12);
 
if(!empty($_POST['txtClave']) and !empty($_POST['txtNom']) and !empty($_POST['txtCarrera']) and !empty($_POST['txtSemestre'])){

//--------------------------------------------------------------------------------------
				   //Encabrezado
				   $ruta="C:/xampp/htdocs/Escuela2/IMG/logo.jpg";
				   $pdf -> Image($ruta,160,5,30,30);
				   $pdf -> SetFont('Arial','B',20);
				   $pdf -> SetXY(50,40);
				   $pdf -> Cell(15,6,'Instituto Tecnologico de Orizaba');
				   $pdf -> SetFont('Arial','B',9);
				   $pdf -> SetXY(50,50);
				   $pdf -> Cell(15,6,'Avenida Oriente 9 No. 852 Colonia Emiliano Zapata C.P. 94320');
				   $pdf -> SetXY(80,55);
				   $pdf -> Cell(15,6,'Orizaba, Veracruz, México');
				   $pdf -> SetXY(50,60);
				   $pdf -> Cell(15,6,'Teléfono: 01(272)72 4 40 96, 01 (272) 72 4 40 16 Fax.: 01 (272) 72');
				   $pdf -> SetXY(90,65);
				   $pdf -> Cell(15,6,'5 17 28');
				   //--------------------------------------------------------------------------------------
				   $pdf -> SetFont('Arial','B',14);
				   $pdf -> SetXY(20,80);
				   $pdf -> Cell(15,6,'Recibo de Constancia');
				   $pdf -> SetXY(120,80);
				   $pdf -> Cell(15,6,'Importe a Pagar: $50');
				   $pdf -> SetXY(120,90);
				   $pdf -> Cell(15,6,'Matricula: '.$txtClave);
				   $pdf -> SetFont('Arial','B',12);
				   $pdf -> SetXY(15,100);
				   $pdf -> Cell(15,6,'Nombre: '.$txtNom);
				   $pdf -> SetXY(15,110);
				   $pdf -> Cell(15,6,'Carrera: '.$txtCarrera);
				   $pdf -> SetXY(15,130);
				   $pdf -> Cell(15,6,'Semestre: '.$txtSemestre);
				   $pdf -> SetXY(15,140);
				   $pdf -> Cell(15,6,'Total a Pagar: $ 50');
	
}else{
    $pdf -> SetFont('Arial','B',20);
	$pdf -> SetXY(50,40);
	$pdf -> Cell(15,6,'Informacion Incorrecta');
}
$pdf -> Output();//Permitir la salida*/
?>