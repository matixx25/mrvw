<?php	
include_once "../Login/partials/ConexionDB.php";

$consulta = "SELECT * FROM librostbl";

$Respuesta=mysqli_query($Conexion,$consulta);

while ($libro = $Respuesta->fetch_assoc()) { //imprime las card de los libros una por una

	$bin_img = base64_encode($libro['imagen']);

	echo '
	<div class="col-md-3 libro-card">
			<div class="libro-card-contenido">
				<a class="link-detalle text-center" href="actualizar_libro.php?accion=vista&id='.$libro['id'].'&vistas='.$libro['vistas'].'">
					<img class="img-libro" src="data:image/png;base64,'.$bin_img.'">
					<h2>'.$libro['titulo'].'</h2>
					<div class="row">
						<h4 class="col-md-8">'.$libro['vistas'].' vistas</h4>
						<div class="col-md-2">
							<img src="like.png">
							<p>'.$libro['likes'].'</p>
						</div>
						<div class="col-md-2">
							<img src="dislike.png">
							<p>'.$libro['dislikes'].'</p>
						</div>
					</div>
				</a>
			</div>
		</div>';
}

?>
