<?php
    require ('fpdf/fpdf.php');
	include 'C:/xampp/htdocs/Escuela2/Truncar.php';
    //include 'PHP/Tools.php';
    //include 'Truncar.php';
	class PDF extends FPDF {
	
		 /*function cabeceraHorizontal($cabecera){
		     $this->SetXY(10,60);//Seleccionamos posicion
			 $this->SetFont('Arial','B',10);//Fuente, Negrita, Tama�o
			 $this->SetFillColor(2,157,116);//Fondo verde de celda
			 $this->SetTextColor(240,255,240);//Letra color blanco
			 foreach($cabecera as $fila){
				  $this->Cell(40,7,utf8_decode($fila),1,0,'L',true);
			 }
		 }
		 
		 function datosHorizontales($datos){
		      $this->SetXY(10,67);
			  $this->SetFont('Arial','',10);//Fuente, Normal, Tama�o
			  $this->SetFillColor(229,229,229);//Gris tenue de celda fila
			  $this->SetTextColor(3,3,3);//Color del texto: Negro
			  $bandera = false; //Para altenar el relleno
			  foreach($datos as $fila){
			      //Usaremos CellFitSpace en lugar de Cell
				  /*$this->CellFitSpace(30,7,utf8_decode($fila['matricula']),1,0,'L',$bandera);
				  $this->CellFitSpace(30,7,utf8_decode($fila['nombre']),1,0,'L',$bandera);
				  $this->CellFitSpace(30,7,utf8_decode($fila['apepat']),1,0,'L',$bandera);*/
				  /*$this->Cell(40,7,utf8_decode($fila['nombre']),1,0,'L',$bandera);
				  $this->Ln();//Salto de linea para generar otra fila
				  $bandera =!$bandera;//Alterna el valor de la bandera
			  }
			}*/
			
			function tablaHorizontal($cabeceraHorizontal,$datos,$Cad){
			
		     $this->SetXY(10,60);//Seleccionamos posicion
			 $this->SetFont('Arial','B',10);//Fuente, Negrita, Tama�o
			 $this->SetFillColor(2,157,116);//Fondo verde de celda
			 $this->SetTextColor(240,255,240);//Letra color blanco
			 $this->Cell(40,7,$cabeceraHorizontal);
				  
		      $this->SetXY(10,67);
			  $this->SetFont('Arial','',10);//Fuente, Normal, Tama�o
			  $this->SetFillColor(229,229,229);//Gris tenue de celda fila
			  $this->SetTextColor(3,3,3);//Color del texto: Negro
			  
			  foreach($datos as $fila){
			      $relleno='$fila['.$Cad.']';
			      //Usaremos CellFitSpace en lugar de Cell
				  /*$this->CellFitSpace(30,7,utf8_decode($fila['matricula']),1,0,'L',$bandera);
				  $this->CellFitSpace(30,7,utf8_decode($fila['nombre']),1,0,'L',$bandera);
				  $this->CellFitSpace(30,7,utf8_decode($fila['apepat']),1,0,'L',$bandera);*/
				  $this->Cell(40,7,$relleno);
				  $this->Ln();//Salto de linea para generar otra fila
			  }
			}
			
			}
			  
			  /***Aqui comienza el codigo para ajustar el texto***/
			  
			  /*function CellFit($w, $h=0, $txt='',$border=0, $ln=0,$align='',$fill=false, $link='',$scale=false,$force=true){
			     //Get String width
				 $str_width=$this->GetStringWidth($txt);
				 
				 //Calculate ratio to fit cell
				 if($w==0)
				    $w = $this->w-$this->rMargin-$this->x;
				 $ratio = ($w-$this->cMargin*2)/$str_width;
				 
				 $fit = ($ratio < 1 || ($ratio > 1 && $force));
				 if($fit){
				    if($scale){
					   //Calculate horizontal scaling
					   $horiz_scale=$ratio*100.0;
					   //Set horizontal scaling
					   $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
					}else{
					    //Calculate character spacing in points
						$char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
						//Set character spacing
						$this->_out(sprintf('BT %.2F Tc ET',$char_space));
					}
					//Override user alignment ( since text will fill up cell)
					$alingn='';
				 }
				 //Pass on to Cell method
				 $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
				 
				 //Reset character spacing/horizontal scaling
				 if($fit)
				    $this->_out('BT').($scale ? '100 Tz' : '0 Tc').'ET';
			  }
			  
			  function CellFitSpace($w, $h=0, $txt='',$border=0, $ln=0,$align='',$fill=false, $link=''){
			      $this->CellFit($w, $h, $txt,$border, $ln,$align,$fill, $link,false,false);
			  }
			  
			  //Patch to also work with CJK double-byte text
			  function MBGetStringLength($s){
			      if($this->CurrentFont['type']=='Type0'){
				       $len = 0;
					   $nbbytes = strlen($s);
					   for($i=0;$i<$nbbytes;$i++){
					       if(ord($s[$i])<128){
						       $len++;
						   }else{
						      $len++;
							  $i++;
						   }
					   }
					   return $len;
				  }
				  else
				     return strlen($s);
			  }
	
	}*/

?>