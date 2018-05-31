<?php
    include 'C:/xampp/htdocs/Escuela2/PHP/Tools.php';
	//include 'C:\xampp\htdocs\PW\Truncar.php';
	//Creamos variables para la fecha
	$date = time();
	$day = date('d',$date);
	$month = date('m',$date);
	$year = date('Y',$date);
	
	$first_day = mktime(0,0,0,$month,1,$year);
    $title =  date('F',$first_day);
    $day_of_week = date('D',$first_day);
	$periodo="";
	
	switch($title){
    case "January": $title = "Enero";$periodo='01';break;
	case "February": $title = "Febrero";$periodo='01';break;
	case "March": $title = "Marzo";$periodo='01';break;
	case "April": $title = "Abril";$periodo='01';break;
	case "May": $title = "Mayo";$periodo='01';break;
	case "June": $title = "Junio";$periodo='01';break;
	case "July": $title = "Julio";$periodo='01';break;
	case "August": $title = "Agosto";$periodo='02';break;
	case "September": $title = "Septiembre";$periodo='02';break;
	case "October": $title = "Octubre";$periodo='02';break;
	case "November": $title = "Noviembre";$periodo='02';break;
	case "December": $title = "Diciembre";$periodo='02';break;
	}
	//Conectar a la Base de Datos
	$conexion = Conecta();
	$consulta="SELECT * FROM pago_alumno WHERE mes='$title'";//obtiene los registros del mes actual
	$resultado=pg_query($conexion,$consulta);
	$filas=pg_num_rows($resultado);
	$fila=pg_fetch_assoc($resultado);
	//---------------------------------------------------------------------------------------------------------
	$C="select id_pagoa from pago_alumno order by id_pagoa desc limit 1;";//obtiene el valor actual del id_pagoa de la tabla pago_alumno
	$R=pg_query($conexion,$C);
	$f=pg_fetch_assoc($R);
	$con=0;
	$CC="000000";
	//Se asigna un valor al contador (id_pagoa) para llevar el control
	if($f['id_pagoa']==0){
	     $con=0;
		 //echo "El contador se asigno (if) : ".$con;
	}else{
	    $con=$f['id_pagoa'];
		//echo "El contador se asigno (else) : ".$con;
	}
	
	///GENERA EL MES PARA PAGARLO A CADA ALUMNO Y POR DEFECTO DA NO PAGADO
     if($filas>0){
		//echo "Ya hay Registros";
		//REVISA QUE SI HAY UN ALUMNO NUEVO Y LO AGRAGA A LA TABLA PAGO_ALUMNO
		$C1="select matricula from alumno except select matricula from pago_alumno";
		$R1=pg_query($conexion,$C1);
		$FS1=pg_num_rows($R1);
		
		if($FS1>0){
		    //echo "hay que actualizar <br>";
			//SE REALIZA UNA DIFERENCIA PARA ENCONTRAR LOS ALUMNOS QUE HAN ENTRADO ACTUALMENTE AL SISTEMA
			$cadena1='000000';
		    $consulta2="select matricula from alumno except select matricula from pago_alumno;";
	        $resultado2=pg_query($conexion,$consulta2);
		    $con=$con+1;
		    $cons="";
		    $fecha=$year."-".$month."-01";
		    while($fila=pg_fetch_assoc($resultado2)){
		         $mat=" ";
		         $cons=" ";
			     $id_pagoa=completa($cadena1,$con);
			     $mat=$fila['matricula'];
			     //echo "".$mat."<br>";
		         $cons="INSERT INTO pago_alumno(id_pagoa,matricula,id_periodo,id_estpago,fecha,mes) VALUES('$id_pagoa','$mat','$periodo','02','$fecha','$title')";
	             $resul=pg_query($conexion,$cons);
			     $con=$con+1;
		    }
			
			
		}else{
		    //echo "No hay que actualizar <br>";
		}
	}
	else{
	    //echo"No hay Registros";
		//SE CREAN LOS REGISTROS POR MES SI NO HAY NADA EN LA TABLA
		$cadena1='000000';
		$consulta2="SELECT matricula FROM alumno order by matricula";
	    $resultado2=pg_query($conexion,$consulta2);
		$con=$con+1;
		$cons="";
		$fecha=$year."-".$month."-01";
		while($fila=pg_fetch_assoc($resultado2)){
		    $mat=" ";
		    $cons=" ";
			$id_pagoa=completa($cadena1,$con);
			$mat=$fila['matricula'];
			//echo "".$mat."<br>";
		    $cons="INSERT INTO pago_alumno(id_pagoa,matricula,id_periodo,id_estpago,fecha,mes) VALUES('$id_pagoa','$mat','$periodo','02','$fecha','$title')";
	        $resul=pg_query($conexion,$cons);
			$con=$con+1;
		}
		
	}
	echo "SE HAN GENERADO FICHAS EXITOSAMENTE";
	$mes=date("n");
	//echo "Este es el valor del mes ".$mes;
	
	pg_free_result($resultado);
	pg_close($conexion);
	
	/*$cadena1="000000";
	$cadena2=1;
	echo "cadena 1: ".$cadena1."<br>";
	echo "cadena : ".$cadena2."<br>";
	echo "cadena nueva: ".$valor=completa($cadena1,$cadena2);*/
	
   function completa($CC,$con){
       $cadena1=$CC;
	   $cadena2=$con;
	   $v1 = strlen($cadena1);//Devuelve el valor de una cadena
	   $v2 = strlen($cadena2);
	   $v3=($v1-$v2);
	   $cadena3 = substr($cadena1,0,$v3);
	   $cadena4=$cadena3.$cadena2;
	   return $cadena4;
   }
?>