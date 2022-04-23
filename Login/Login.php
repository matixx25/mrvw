<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myreview login</title>

	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #2b3139;">
	<?php

		session_start();
		if (isset($_SESSION['auth'])) {
			if ($_SESSION['auth']) {
				header("Location: ../Main/index.php");
			}
		}

	?>
	



<form method="post" action="Validate_login.php" name="Login"  >
	<div class="d-flex flex-wrap main-box">
		<div class="box-login container col-xl-4 m-6 text-center">
				<div class="form-col">
			        <div class=" xl-8 m-5 text-left">
						<input type="text" name="Correo" class="input" placeholder="Myreview@gmail.com" minlenght="5" maxlenght="60"required>
                    </div>
                    </div>

                <div class="form-col">
			        <div class=" xl-8 m-5 text-left">
						<input type="password" class="input" name="Contraseña" placeholder="Password" minlenght="5" maxlenght="60" required>
                    </div>
                    </div>

				<div class="form-col">
					<div class=" xl-3 m-2 text-left">
						<button class="send" type="submit" name="Registrarse">Iniciar sesión</button>
		            </div>
	            </div>

	            <span>¿No tienes cuenta?<a href="Singup.php">Registrate</a></span><!--Muestra un enlace a Register-->
		</div>


		<div class="box-introduccion container col-xl-6 m-5">
				<div class="form-col">
			        <div class="text-center">
						<h1 class="title">Myreview</h1>
                    </div>
                </div>

                <div class="form-col">
			        <div class="description xl-3 m-5 text-center">
						<p>Con Myreview compartes tu opinión frente a los libros y tus experiencias con diversas personas alrededor del mundo</p>
                    </div>
                 </div>
		</div>
	</div>
</form>
</body>
</html>