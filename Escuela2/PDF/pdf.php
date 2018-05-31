<?php
    require ('fpdf/fpdf.php');
	class PDF extends FPDF {
	     function cabeceraVertical($cabecera){
		     $this->SetXY(10,10);//Seleccionamos posicion
			 $this->SetFont('Arial','B',10);//Fuente, Negrita, Tamaño
			 foreach($cabecera as $columna){
			      //Parametro con valor 2, cabecera vertical
				  $this->Cell(30,7,utf8_decode($columna),1,2,'L');
			 }
		 }
		 
		 function datosVerticales($datos){
		      $this->SetXY(40,10);//40 = 10 posicionX_anterior + 30ancho Celdas de cabecera
			  $this->SetFont('Arial','',10);//Fuente, Normal, Tamaño
			  foreach($datos as $columna){
			      //Parametro con valor 2, cabecera vertical
				  $this->Cell(30,7,utf8_decode($columna),1,2,'L');
			  }
		 }
		 
		 function cabeceraHorizontal($cabecera){
		     $this->SetXY(10,70);//Seleccionamos posicion
			 $this->SetFont('Arial','B',10);//Fuente, Negrita, Tamaño
			 foreach($cabecera as $fila){
			      //Atencion!! el Parametro con valor 0, hace que sea horizontal
				  $this->Cell(24,7,utf8_decode($fila),1,0,'L');
			 }
		 }
		 
		 function datosHorizontales($datos){
		      $this->SetXY(10,77);//77 = 70 posicionY_anterior + 7 altura de las de cabecera
			  $this->SetFont('Arial','',10);//Fuente, Normal, Tamaño
			  foreach($datos as $fila){
			      //Parametro con valor 0, hace que sea horizontal
				  $this->Cell(24,7,utf8_decode($fila),1,0,'L');
			  }
		 }
	
	}

?>