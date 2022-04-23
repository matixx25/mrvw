<?php 
	include 'partials/ConexionDB.php'; //Conexion con la base de datos
	$Correo=$_POST['Correo'];
	$Contraseña=$_POST['Contraseña'];
	$Respuesta=mysqli_query($Conexion,"SELECT * FROM registrotbl WHERE Correo='$Correo' and Contraseña='$Contraseña' ");//Consulta que selecciona todos los datos de la tabla si hay un correo existente y una contraseña

	$usuario = $Respuesta->fetch_assoc();//Convierte el objeto a algo leible por php
	if(mysqli_num_rows($Respuesta)>0){//La condicion verifica si hay un usuario existente
		session_start();//se inicia la sesión
		$_SESSION['auth'] = true;//Si hay alguien logeado la autentificasion de la sesion es verdadero
		$_SESSION['name'] = $usuario['Nombre'];//Guarda el nombre en ka sesion
		$_SESSION['email'] = $usuario['Correo'];
		header("location: ../Main/index.php");//Lo redirecciona a el index
		//exit;
	}else{
		echo '
			<script>

				alert("Datos incorrectos,por favor verifiquelos");
				window.location ="Login.php";
			</script>';
		//exit;
	}

 ?>