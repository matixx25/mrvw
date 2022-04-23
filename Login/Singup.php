<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Myreview register</title>
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Sacramento&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/singup.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	</head>


	<body>

	<?php
		session_start();
		if (isset($_SESSION['auth'])) {
			if ($_SESSION['auth']) {
				header("Location: ../Main/index.php");
			}
		}
	?>

		
			<!--Titulos-->
			<div>
				<h2 class="">¡REGISTRESE!</h2><br>
			</div>
			<div class="link_login">
			<span>o<a href="Login.php"> Inicie sesión</a></span><!--Muestra un enlace a login-->
			</div>
			

		<form action="Add_singup.php" class="form" method="post" > <!--form es para formulario "action: es donde vamos a mandar la informacion" "method:Es como vamos a mandar la informacion"  "novalite:Hace parte del script del final"  -->
			<div class="d-flex flex-wrap">
				<div class="box-singup container col-xl-3 m-4 text-center">


					<!--Input Nombre-->
					<div class="form-col">
			        <div class=" xl-8 m-5 text-left">
						<label>Nombre</label>
						<input class="input" type="text" name="Nombre" minlenght="5" maxlenght="60"  required>
                    </div>
                    </div>


					<!--Input Apellido-->
					<div class="form-col">
			        <div class="m-5 text-left">
				    <div class="form-group">
						<label>Apellido</label>
						<input class="input" type="text" name="Apellido" minlenght="5" maxlenght="60" required>
					</div>
                    </div>
                    </div>


					<!--Input Correo-->
					<div class="form-col">
				        <div class="m-5 text-left">
							<label>Correo</label>
							<input class="input" type="text" name="Correo" minlenght="13" maxlenght="70" required>
	                    </div>
                    </div>


					<!--Input Fecha de Nacimiento (Date)-->
					<div class="form-col">
				        <div class="m-5 text-left">
							<label>Fecha de Nacimiento</label>
							<input class="input" type="date" name="Fecha_nacimiento" min="1940-1-1" max="2050-12-31" step="10" required>	
	                    </div>
                    </div>


					<!--Select option Genero-->
					<div class="form-col">
				        <div class=" xl-3 m-5 text-left">
							<label>Genero</label>
							<select name="Genero" class="select">
								<option value="Hombre">Masculino</option>
								<option value="Mujer">Femenino</option>
								<option value="No binario">No binario</option>
							</select>
						</div>
                    </div>         
					
                </div>


				<div class="col m-5 text-center">
					<div class="col-xl-12 p-5 box-singular">
						<p>¡Escribe y lee reseñas de tus libros favoritos!</p>
	                </div>

		            <div class="col-xl-12 p-4 box-singular2">
						<p>Discute sobre tus obras favoritas en nuestro espacio social</p>
		            </div>
				</div>
	               
	            <div class="box-singup container col-xl-3 m-4 text-center" >


	            	<div class="form-col">
				        <div class="m-5 text-left">
					     
							<label>Pais</label>
							<select name="País" class="select">
								<?php
								$Conexion=mysqli_connect("localhost","root","","myreview");
								$Leer_pais="SELECT nombre FROM paisestbl";//selecciona los nombres de los paises
							    $Paises=mysqli_query($Conexion,$Leer_pais);
							    for ($i=0; $i <240 ; $i++) { 
							    $registro=mysqli_fetch_array($Paises);//permite obtener los datos de la ejecución de la consulta en un arreglo
								echo '<option value="'.$registro['nombre'].'">'.$registro['nombre'].'</option>';
							    }
							    ?>
							</select>
                    	</div>
                    </div>




						<!--Input Usuario-->
						<div class="form-col">
					        <div class="m-5 text-left">
						    	<label>Usuario</label>
								<input class="input" type="text" name="Usuario" minlenght="3" maxlenght="20" required>
		                    </div>
	                    </div>
						<!--Input Contraseña-->
						<div class="form-col">
					        <div class="m-5 text-left">
								<label>Contraseña</label>
								<input class="input" type="password" name="Contraseña" minlenght="5" maxlenght="25" required>	
		                    </div>
	                    </div>
						<!--Input Repetir Contraseña-->
						<div class="form-col">
					        <div class="m-5 text-left">
								<label>Confirmar Contraseña</label>
								<input class="input" type="password" name="Confirmar_contraseña" minlenght="5" maxlenght="25" required>
		                    </div>
	                    </div>
						<!--Input Soy Humano (Check Box)-->
						<!-- Poner capchat -->
						<!--Input Terminos y Condiciones (Check Box)-->


					<div class="">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    <p><a  href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Terminos y condiciones</a> de <b>Myreview</b></p>
					  </label>
					</div>
					
						 
						

						
						 
				


						<!--SUBMIT-->
						<div class="form-col">
					        <div class="">
								<button class="button" type="submit" name="Registrarse">Registrarse</button>
		                    </div>
	                    </div>

				</div>
					
		</form>  
	</body>
</html>