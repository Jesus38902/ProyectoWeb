<?php
   session_start();
   require ('fpdf/fpdf.php');
   include 'PHP/Tools.php';
   include 'Truncar.php';
   $date = time();
   $day = date('d',$date);
   $month = date('m',$date);
   $year = date('Y',$date);
	

   $first_day = mktime(0,0,0,$month,1,$year);
   $title =  date('F',$first_day);
   $day_of_week = date('D',$first_day);
   
   switch($title){
		case "January": $title = "Enero";break;
		case "February": $title = "Febrero";break;
		case "March": $title = "Marzo";break;
		case "April": $title = "Abril";break;
		case "May": $title = "Mayo";break;
		case "June": $title = "Junio";break;
		case "July": $title = "Julio";break;
		case "August": $title = "Agosto";break;
		case "September": $title = "Septiembre";break;
		case "October": $title = "Octubre";break;
		case "November": $title = "Noviembre";break;
		case "December": $title = "Diciembre";break;
	}
   
   $usuario=$_SESSION["Usuario"];
   $pdf = new FPDF();
   $conexion = Conecta();
   $periodo="";
   
   $C="select * from pago_alumno where id_estpago = '02' and matricula = '$usuario'";
   $R=pg_query($conexion,$C);
   $NF=pg_num_rows($R);
   
   
   if($NF>0){
          //echo "Debes ponerte al corriente debes ".$NF;
		  for($i=0;$i<$NF;$i++){
		      while($F=pg_fetch_assoc($R)){
			       $TA=1000;
				   $RE=0;
			       if($F['id_periodo']=='01'){
				         $periodo="1 ENE-JUN";
				   }else{
				         $periodo="2 AGO-DIC";
				   }
				   settype($day,"integer");//Asigna el dia String a Integer
				   //-------------------------------------------------------------------
				   $MES=extraer($F['mes']);
				   if($day>0 and $day<6){
				          if($title==$MES){
						     //echo "estas en la fecha permitida pagas 1000";
							 $TA=1000;
						  }
				   }else{
				         if($title==$MES){
						       if($day>5 and $day<11){
									 $TA=$TA+50;
									 $RE=50;
									// echo "pagas +".$TA;
							   }else{
							       if($day>10 and $day<16){
										$TA=$TA+100;
										$RE=100;
										//echo "pagas +".$TA;
								   }else{
								      if($day>15 and $day<21){
									      $TA=$TA+150;
										  $RE=150;
										  //echo "pagas +".$TA;
									  }
								   }
							   }
						 }else{
						        $TA=$TA+150;
								$RE=150;
						 }
				        //echo "No estas en la fecha permitida pagas 1000 + interese";
				   }
				   //-------------------------------------------------------------------
			       $pdf -> AddPage();
                   $pdf -> SetFont('Arial','B',12);
				   $consulta="SELECT nombre,apepat,apemat FROM alumno WHERE matricula='$usuario'";
				   $consulta2="SELECT l.descripcion FROM licenciatura as l join alumno as a on l.id_lic = a.id_lic where a.matricula ='$usuario'";
				   $resultado=pg_query($conexion,$consulta);
				   $resultado2=pg_query($conexion,$consulta2);
				   $fila=pg_fetch_assoc($resultado);
				   $fila2=pg_fetch_assoc($resultado2);
				   //-------------------------------------------------------------------------------------
				   $Nom=extraer($fila['nombre']);
				   $AP=extraer($fila['apepat']);
				   $AM=extraer($fila['apemat']);
				   $LIC=$fila2['descripcion'];
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
				   $pdf -> Cell(15,6,'Orizaba, Veracruz, M�xico');
				   $pdf -> SetXY(50,60);
				   $pdf -> Cell(15,6,'Tel�fono: 01(272)72 4 40 96, 01 (272) 72 4 40 16 Fax.: 01 (272) 72');
				   $pdf -> SetXY(90,65);
				   $pdf -> Cell(15,6,'5 17 28');
				   //--------------------------------------------------------------------------------------
				   $pdf -> SetFont('Arial','B',14);
				   $pdf -> SetXY(120,80);
				   $pdf -> Cell(15,6,'Importe a Pagar: $1000');
				   $pdf -> SetXY(120,90);
				   $pdf -> Cell(15,6,'Matricula: '.$usuario);
				   $pdf -> SetFont('Arial','B',12);
				   $pdf -> SetXY(15,100);
				   $pdf -> Cell(15,6,'Nombre: '.$Nom.' '.$AP.' '.$AM);
				   $pdf -> SetXY(15,110);
				   $pdf -> Cell(15,6,'Concepto: Colegiatura Mensual de '.$F['mes']);
				   $pdf -> SetXY(15,120);
				   $pdf -> Cell(15,6,'Carrera: '.$LIC);
				   $pdf -> SetXY(15,130);
				   $pdf -> Cell(15,6,'Periodo: '.$periodo." ".$year);
				   $pdf -> SetXY(15,140);
				   $pdf -> Cell(15,6,'Linea de Captura: 1815 01 '.$usuario." ".$F['id_pagoa']);
				   $pdf -> SetXY(15,150);
				   $pdf -> Cell(15,6,'Recargos: $'.$RE);
				   $pdf -> SetXY(15,160);
				   $pdf -> Cell(15,6,'Total a Pagar: $'.$TA);
				   ///
				   
				   $pdf -> SetFont('Arial','B',9);
				   $pdf -> SetXY(15,260);
				   $pdf -> Cell(15,6,'Fecha de Impresion '.$day." de ".$title." del ".$year);
			  
		    }
		  
		  }
   }else{
        $pdf -> SetFont('Arial','B',20);
				   $pdf -> SetXY(50,40);
				   $pdf -> Cell(15,6,'Felicidades No debes nada');
   }
   $pdf -> Output();//Permitir la salida*/
?>