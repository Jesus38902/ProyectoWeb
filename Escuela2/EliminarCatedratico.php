<?php
include 'PHP/Tools.php';
$txtMatricula = $_POST['txtClave'];


if(!empty($txtMatricula)){
    $conexion = Conecta();
    $consulta="DELETE FROM catedratico WHERE matricula = '$txtMatricula'";
    $resultado=pg_query($conexion, $consulta);
    pg_free_result($resultado);
    pg_close($conexion);
    echo "Catedratico Eliminado con Exito";
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
    <?php
}else{
    
    echo "Datos incorrectos";
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
    <?php
}
?>