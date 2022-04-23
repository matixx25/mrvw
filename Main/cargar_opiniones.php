<?php

if(!isset($_GET['id'])) {
	header("Location: libros.php");
}

include_once "../Login/partials/ConexionDB.php";

$consulta = "SELECT * FROM comentarios WHERE idlibro=".$_GET['id']." ORDER BY fecha";

$Respuesta=mysqli_query($Conexion,$consulta);

while ($coment = $Respuesta->fetch_assoc()) {
	echo '
	<div class="comentario-div">
		<p><b>'.$coment['nombre'].': </b>'.$coment['comentario'].'</p>
		<p class="fecha-coment">'.$coment['fecha'].'</p>
	</div>';
}
echo '
	<form method="POST" class="comentario-div" action="agg_comentario.php?id='.$_GET['id'].'" name="coment" >
		<input class="comentario-input" type="text" name="comentario" placeholder="Escribe tu comentario" required>
		<div class="div-boton-comentar">
			<input type="submit" name="comentar" value="comentar">		
		</div>
	</form>';

?>