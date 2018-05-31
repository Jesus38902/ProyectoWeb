<?php
     include_once('pdf.php');
	 $pdf = new pdf();
	 
	 $pdf -> AddPage();
	 
	 $miCabecera = array('Nombre','Apellido','Matricula','Edad');
	 $misDatos = array('Gabriel','Sanchez Garcia','14011124','22');
	 
	 $pdf ->cabeceraVertical($miCabecera);
	 $pdf ->datosVerticales($misDatos);
	 
	 $pdf ->cabeceraHorizontal($miCabecera);
	 $pdf ->datosHorizontales($misDatos);
	 
	 $pdf -> Output();

?>