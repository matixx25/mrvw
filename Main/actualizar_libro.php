<?php

include_once "../Login/partials/ConexionDB.php";

if (isset($_GET['accion'])) {
	switch ($_GET['accion']) {
		case 'vista':
			$vistas = $_GET['vistas']+1;
			$consulta = "UPDATE librostbl SET vistas ='".$vistas."' WHERE librostbl.id='".$_GET['id']."'";
			$Respuesta=mysqli_query($Conexion,$consulta);
			header("Location: detalles.php?id=".$_GET['id']);
			break;

		case 'like':
			$likes = $_GET['likes']+1;
			$consulta = "UPDATE librostbl SET likes ='".$likes."' WHERE librostbl.id='".$_GET['id']."'";
			$Respuesta=mysqli_query($Conexion,$consulta);
			header("Location: detalles.php?id=".$_GET['id']);
			break;

		case 'dislike':
			$dislikes = $_GET['dislikes']+1;
			$consulta = "UPDATE librostbl SET dislikes ='".$dislikes."' WHERE librostbl.id='".$_GET['id']."'";
			$Respuesta=mysqli_query($Conexion,$consulta);
			header("Location: detalles.php?id=".$_GET['id']);
			break;
	}
}



?>