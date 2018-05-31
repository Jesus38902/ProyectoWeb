<?php
   function extraer ($cad){
      $String = $cad;//Cadena a recortar
	  $busca = ' ';//Caracter a buscar ' '
	  $pos = strpos($String,$busca);//Posicion del primer ' '
	  return substr($String,0,$pos);
   }
   
   function completa($CC,$con){
       $cadena1=$CC;
	   $cadena2=$con;
	   $v1 = strlen($cadena1);//Devuelve el valor de una cadena
	   $v2 = strlen($cadena2);
	   $cadena3 = substr($cadena1,0,($v1-1));
	   $cadena3=$cadena3+$cadena2;
	   return $cadena3;
   }
?>