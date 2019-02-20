<?php
session_start();
require_once('conexion/conexion.php');

if (isset($_POST['btnlogrep'])){
	$correo = $_POST['correo'];
	$clave = $_POST['clave'];
	$sql = "SELECT * FROM usuario WHERE correo = '$correo' AND clave = '$clave'";

	$resultado = mysqli_query($con, $sql);
	if (!$resultado){
		echo "<br>Error de BD, no se pudo consultarr la base de datos \n";
		echo "<br>Error MySQL:" . mysql_errno();
		exit;
	}
	else{
		echo "<br>Consulta Ejecutada correctamente";
	}

	$fila = mysqli_fetch_assoc($resultado);

	if ($fila>0){
		$_SESSION["nombres"] = $fila['nombres'];
		$_SESSION["apellidos"] = $fila['apellidos'];
		$_SESSION["correo"] = $fila['correo'];
		$_SESSION["nick"] = $fila['nick'];
		$_SESSION["gemas"] = $fila['gemas'];
		header('Location: index.php');
	}
	else{
		echo '<script language="javascript">alert(" ***  Usuario o contraseña incorrectos");</script>'; 
		header('Location: login.php');
		
	}
}
?>