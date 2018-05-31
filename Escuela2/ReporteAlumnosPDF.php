<?php
     require ('fpdf/fpdf.php');
	 include 'PHP/Tools.php';
	 $pdf = new FPDF();
	 $pdf -> AddPage();
	 
	 
	 
	 /****************************ENCABEZADO**************************************/
	 /**Encabezado con la informacion de la escuela**/
	$ruta="C:/xampp/htdocs/Escuela2/IMG/logo.jpg";
	$pdf -> Image($ruta,170,5,20,20);
	$pdf -> SetFont('Arial','B',20);
    $pdf -> SetXY(50,10);
	$pdf -> Cell(15,6,'Instituto Tecnologico de Orizaba');
	$pdf -> SetFont('Arial','B',9);
	$pdf -> SetXY(50,20);
	$pdf -> Cell(15,6,'Avenida Oriente 9 No. 852 Colonia Emiliano Zapata C.P. 94320');
	$pdf -> SetXY(80,25);
	$pdf -> Cell(15,6,'Orizaba, Veracruz, México');
	$pdf -> SetXY(50,30);
	$pdf -> Cell(15,6,'Teléfono: 01(272)72 4 40 96, 01 (272) 72 4 40 16 Fax.: 01 (272) 72');
	$pdf -> SetXY(90,35);
	$pdf -> Cell(15,6,'5 17 28');
	$pdf -> SetFont('Arial','B',16);
    $pdf -> SetXY(55,45);
	$pdf -> Cell(15,6,'Reporte de Alumnos Inscritos');
	/**-----------------------------------------------------------------------------------------------**/
	 
	 
	 
	 $pdf->SetXY(10,55);//Seleccionamos posicion
	 $pdf->SetFont('Arial','B',10);//Fuente, Negrita, Tamaño
	 $pdf->Cell(20,7,'Matricula',1,0,'L');
	 
	 $pdf->SetXY(30,55);
	 $pdf->SetFont('Arial','B',10);
	 $pdf->Cell(110,7,'Nombre',1,0,'C');
	 
	 $pdf->SetXY(140,55);
	 $pdf->SetFont('Arial','B',10);
	 $pdf->Cell(20,7,'Genero',1,0,'C');
	 
	 $pdf->SetXY(160,55);
	 $pdf->SetFont('Arial','B',10);
	 $pdf->Cell(25,7,'Licenciatura',1,0,'C');
	/****************************CONTENIDO**************************************/

    //Conexiones
	//Para la matricula
	$conexion = Conecta();
   
    $C="select matricula from alumno order by matricula";
    $R=pg_query($conexion,$C);
	
	$pdf->SetXY(10,62);//77 = 70 posicionY_anterior + 7 altura de las de cabecera
	$pdf->SetFont('Arial','',10);//Fuente, Normal, Tamaño
	
	while($F=pg_fetch_assoc($R)){
	      $pdf->Cell(20,7,$F['matricula'],1,2,'L');
	}
	
	//******************Para el nombre completo************************************
	$C1="select nombre from alumno order by matricula";
    $R1=pg_query($conexion,$C1);
	
	$pdf->SetXY(30,62);//77 = 70 posicionY_anterior + 7 altura de las de cabecera
	$pdf->SetFont('Arial','',10);//Fuente, Normal, Tamaño
	
	while($F1=pg_fetch_assoc($R1)){
	      $pdf->Cell(40,7,$F1['nombre'],1,2,'L');
	}
	$C2="select apepat from alumno order by matricula";
    $R2=pg_query($conexion,$C2);
	
	$pdf->SetXY(70,62);//77 = 70 posicionY_anterior + 7 altura de las de cabecera
	$pdf->SetFont('Arial','',10);//Fuente, Normal, Tamaño
	
	while($F2=pg_fetch_assoc($R2)){
		  $pdf->Cell(35,7,$F2['apepat'],1,2,'L');
	}
	$C3="select apemat from alumno order by matricula";
    $R3=pg_query($conexion,$C3);
	
	$pdf->SetXY(105,62);//77 = 70 posicionY_anterior + 7 altura de las de cabecera
	$pdf->SetFont('Arial','',10);//Fuente, Normal, Tamaño
	
	while($F3=pg_fetch_assoc($R3)){
		  $pdf->Cell(35,7,$F3['apemat'],1,2,'L');
	}
	
	/*******************para el genero****************/
	
	$C4="select genero from alumno order by matricula";
    $R4=pg_query($conexion,$C4);
	
	$pdf->SetXY(140,62);//77 = 70 posicionY_anterior + 7 altura de las de cabecera
	$pdf->SetFont('Arial','',10);//Fuente, Normal, Tamaño
	
	while($F4=pg_fetch_assoc($R4)){
		  $pdf->Cell(20,7,$F4['genero'],1,2,'L');
	}
	
	/*******************para la licenciatura****************/
	$C5="select id_lic from alumno order by matricula";
    $R5=pg_query($conexion,$C5);
	
	$pdf->SetXY(160,62);//77 = 70 posicionY_anterior + 7 altura de las de cabecera
	$pdf->SetFont('Arial','',10);//Fuente, Normal, Tamaño
	
	while($F5=pg_fetch_assoc($R5)){
		  $pdf->Cell(25,7,$F5['id_lic'],1,2,'C');
	}
    
	$pdf -> Output();
	 
	 
		 

?>