<?php
include 'Tools.php';
$usuario=$_POST['Usuario'];
$clave=$_POST['Clave'];
$_SESSION['Usuario']=$_POST['Usuario'];
$_SESSION['Clave']=$_POST['Clave'];

//Conectar a la Base de Datos
$conexion = Conecta();
$consulta="SELECT * FROM usuario WHERE id_user='$usuario' and contrasena='$clave'";
$resultado=pg_query($conexion,$consulta);
$filas=pg_num_rows($resultado);
$fila=pg_fetch_assoc($resultado);

function Men(){
    if($filas>0){
		if($fila['tipo_user']=='ADMINISTRADOR       '){
		     return true;
		}else{
		if($fila['tipo_user']=='ALUMNO              '){
		    return true;
		}
		}
	}
	else{
	    echo "Error, El Usuario o la Contraseña son Incorrectos";
		return false;
	}
}
pg_free_result($resultado);
pg_close($conexion);
?>