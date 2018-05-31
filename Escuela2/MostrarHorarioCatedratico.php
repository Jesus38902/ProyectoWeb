<?php
	session_start();
	include'PHP/Tools.php';
	$usuario=$_SESSION["Usuario"];
	$conexion=Conecta();
    $consulta="SELECT h.id_clave,m.horario,m.nombre,m.salon from materias as m,
     horario_catedratico as h where (m.clave=h.id_clave) and h.id_catedratico='$usuario'";
	$resultado=pg_query($conexion,$consulta);
    $NF=pg_num_rows($resultado);
    

     $consulta2="SELECT * from catedratico where matricula='$usuario'";
	$resultado2=pg_query($conexion,$consulta2);
	$fila=pg_fetch_assoc($resultado2);
?>

<html>
	<head>
		<title>Horario de catedratico</title>
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
		<center><h1>Horario de <?php echo " ".$fila['nombre']." ".$fila['apepat']." ".$fila['apemat'] ?></h1></center>
		<?php
		if( $NF>0){
		?>
		<table border="1px" align="center">
			<thead>
				<tr class="centradoAzul">
					<td>Clave</td>
					<td>Horario</td>
					<td>Materia</td>
					<td>Aula</td>
				</tr>
				<tbody>
					<?php
					while($row=pg_fetch_assoc($resultado)){ ?>
						<tr>
							<td class="descripcion">
							    <?php echo $row['id_clave'];?>
							</td>
							<td class="descripcion">
								<?php echo $row['horario'];?>
							</td>
							<td class="descripcion">
								<?php echo $row['nombre'];?>
							</td>
							<td class="descripcion">
								<center><?php echo $row['salon'];?></center>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
         <?php
		}else{
		     echo "<center><h1>";
		     echo "No hay Horario Asigado";
		     echo "</h1></center>";
		}
		?>			
			
		</div>
		</center
		</div>
		</body>
	</html>	
	
