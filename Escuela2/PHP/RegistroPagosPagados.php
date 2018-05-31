<?php
    session_start();
	include'Tools.php';
	$usuario=$_SESSION["Usuario"];
	$conexion=Conecta();
	//se crean los alias de PA = pago_alumno, RB= registro_baucher, BP= baucher_pago
	$consulta="select PA.id_pagoa, RB.id_baucher, BP.fecha, BP.importe,PA.mes,PA.id_periodo 
	from pago_alumno as PA join registro_baucher as RB on PA.id_pagoa=RB.id_regbau join baucher_pago as BP on BP.id_baucher=RB.id_baucher
    where PA.matricula = '$usuario';";
	$resultado=pg_query($conexion,$consulta);
	 $NF=pg_num_rows($resultado);
	
	$C2="select nombre,apepat,apemat from alumno where matricula='$usuario'";
	$R2=pg_query($conexion,$C2);
?>

<html>
	<head>
		<title>Registro Pagos Realizados</title>
<style type="text/css">
/* Datagrid */

.descripcion{
  font-family: verdana;
  font-size: 12px;
}

.centradoAzul{
  font-family: verdana;
  font-size: 15px;
  text-align: center;
  background-color: #66AEF6;
  height: 40px;
}

}
	</style>
	</head>
	<body>
	<div>
		<div class="descripcion">
		<center><h1>Pagos Realizados</h1></center>
		<?php
		$F=pg_fetch_assoc($R2);
		echo "<center><h1>";
		echo $F['nombre']." ".$F['apepat']." ".$F['apemat'];
		echo "</h1></center>";
		if( $NF>0){
		?>
		     <table border="1px" align="center">
			<thead>
				<tr class="centradoAzul">
					<td>Folio</td>
					<td>Recibo (Baucher)</td>
					<td>Fecha Pago</td>
					<td>Cantidad</td>
					<td>Mes Pagado</td>
					<td>Periodo</td>
				</tr>
				<tbody>
					<?php
					//PA.id_pagoa, RB.id_baucher, BP.fecha, BP.importe,PA.mes 
					while($row=pg_fetch_assoc($resultado)){ ?>
						<tr>
							<td class="descripcion">
							    <?php echo "F-".$row['id_pagoa'];?>
							</td>
							<td class="descripcion">
								<?php echo $row['id_baucher'];?>
							</td>
							<td class="descripcion">
								<?php echo $row['fecha'];?>
							</td>
							<td class="descripcion">
								<?php echo $row['importe'];?>
							</td>
							<td class="descripcion">
								<center><?php echo $row['mes'];?></center>
							</td>
							<td class="descripcion">
								<?php 
								if($row['id_periodo']=='01'){
								   echo "1 ENE-JUN";                                                                                           "";
								}else{
								    echo "2 AGO-DIC";                                                                                          "";
								}
								//echo $row['id_periodo'];
								?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
		
		<?php
		}else{
		     echo "<center><h1>";
		     echo "Aun no hay Pagos Realizados";
		     echo "</h1></center>";
		}
		?>
		</div>
		</center>
		</div>
		</body>
	</html>	
	
