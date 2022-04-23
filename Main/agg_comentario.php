<?php
session_start();
if(!isset($_GET['id'])) {
	header("Location: libros.php");
}

include_once "../Login/partials/ConexionDB.php";

$consulta = "INSERT INTO comentarios(idlibro, nombre, comentario) VALUES ('".$_GET['id']."','".$_SESSION['name']."','".$_POST['comentario']."')";

echo $consulta;
$Respuesta=mysqli_query($Conexion,$consulta);

header("Location: detalles.php?id=".$_GET['id']);

?>