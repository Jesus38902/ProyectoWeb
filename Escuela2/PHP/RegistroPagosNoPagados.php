<?php
    session_start();
	include'Tools.php';
	$usuario=$_SESSION["Usuario"];
	$conexion=Conecta();
	
	$consulta="select id_pagoa, id_periodo, mes from pago_alumno 
               where id_estpago='02' and matricula = '$usuario'";
	$resultado=pg_query($conexion,$consulta);
	$NF=pg_num_rows($resultado);
	
	$C2="select nombre,apepat,apemat from alumno where matricula='$usuario'";
	$R2=pg_query($conexion,$C2);
?>

<html>
	<head>
		<title>Registro Pagos Adeudados</title>
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
		<center><h1>Pagos Adeudados</h1></center>
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
					<td>Periodo</td>
					<td>Mes</td>
				</tr>
				<tbody>
					<?php
					//id_pagoa, id_periodo, mes 
					while($row=pg_fetch_assoc($resultado)){ ?>
						<tr>
							<td class="descripcion">
							    <?php echo "F-".$row['id_pagoa'];?>
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
							<td class="descripcion">
								<?php echo $row['mes'];?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
		
		<?php
		}else{
		     echo "<center><h1>";
		     echo "Felicidades No hay Pagos Atrasados";
		     echo "</h1></center>";
		}
		?>
		</div>
		</center>
		</div>
		</body>
	</html>	
	
