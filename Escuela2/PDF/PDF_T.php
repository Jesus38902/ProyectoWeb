<?php
    include_once('lib.php');
	//include 'Truncar.php';
	include 'C:/xampp/htdocs/Escuela2/PHP/Tools.php';
	$pdf = new PDF();
	$pdf->AddPage();
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
	$pdf -> Cell(15,6,'Orizaba, Veracruz, M�xico');
	$pdf -> SetXY(50,30);
	$pdf -> Cell(15,6,'Tel�fono: 01(272)72 4 40 96, 01 (272) 72 4 40 16 Fax.: 01 (272) 72');
	$pdf -> SetXY(90,35);
	$pdf -> Cell(15,6,'5 17 28');
	$pdf -> SetFont('Arial','B',20);
    $pdf -> SetXY(50,45);
	$pdf -> Cell(15,6,'Reporte de Alumnos Inscritos');
	/**-----------------------------------------------------------------------------------------------**/
	
	$Mat=consulta('matricula','alumno');
	$Nom=consulta('nombre','alumno');
	$AP=consulta('apepat','alumno');
	$AM=consulta('apemat','alumno');
	$Sex=consulta('genero','alumno');
	$Lic=consulta('id_lic','alumno');
	
	$CMat = 'Matricula';
	$CNom = 'Nombre';
	
	$pdf->tablaHorizontal($CMat,$Mat,'matricula');
	//$pdf->tablaHorizontal($CNom,$Nom,'nombre');
	$pdf->Output();

	
    function consulta($var,$tabla){
	    $conexion = Conecta();
        $consulta="select ".$var." from ".$tabla;
        $Resultado=pg_query($conexion,$consulta);
	    $Valores = array();
	    while($Filas=pg_fetch_assoc($Resultado))
            {
                //Se crea un arreglo asociativo
                array_push($Valores,$Filas);
            }
	    return $Valores;
	
	}
?>