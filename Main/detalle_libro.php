<?php 
include_once "../Login/partials/ConexionDB.php";
$consulta = "SELECT * FROM librostbl WHERE id=".$_GET['id'];
$Respuesta=mysqli_query($Conexion,$consulta);
$libro = $Respuesta->fetch_assoc();
$bin_img = base64_encode($libro['imagen']);

if (mysqli_num_rows($Respuesta)>0) {

	echo '
		<div class="row">
			<h1 class=" text-center">'.$libro['titulo'].'</h1>
			<img class="col-md-5" src="data:image/png;base64,'.$bin_img.'">
			<div class="col-md-7">
				<h3>Autor: '.$libro['autor'].'</h3>
				<h5>Descripción: </h5>
				<p>'.$libro['resumen'].'</p>
				<div class="row">
					<h4 class="col-md-8">'.$libro['vistas'].' vistas</h4>
					<div class="col-md-2 text-center">
						<a href="actualizar_libro.php?accion=like&id='.$libro['id'].'&likes='.$libro['likes'].'"><img src="like.png"></a>
						<p>'.$libro['likes'].'</p>
					</div>
					<div class="col-md-2 text-center">
						<a href="actualizar_libro.php?accion=dislike&id='.$libro['id'].'&dislikes='.$libro['dislikes'].'"><img src="dislike.png"></a>
						<p>'.$libro['dislikes'].'</p>
					</div>
				</div>
			</div>
		</div>';
}
?>