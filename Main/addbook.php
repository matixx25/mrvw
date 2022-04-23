<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myreview</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wgth@400;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous" ></script>
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>


	<?php 
		session_start();
		if (!$_SESSION['auth']) {
			header("Location: ../Login/Login.php");
		} 
 	?>

	
	<nav class="menu">
		<section class="menu_container">


			<h1 class="menu_logo"><a href="index.php">Myreview</a></h1>

			
			  		<form class="container">
				    <div class="input-group">
				    	
				      <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" id="search">
				      <button class="input-group-text" id="basic-addon1"><img src="assets/search.svg" class=""></button>
				  		
				   </div>
				   </form>
			  	
			



			<ul class="menu_links">

				<li class="menu_item">
					<a class="menu_link">Foros</a>
				</li>




				<li class="menu_item menu_item--show">
					<a class="menu_link">Generos<img src="assets/arrow.svg" class="menu_arrow"></a>
					<ul class="menu_nesting">

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Narrativo</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Lírico</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Dramático</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Didáctico</a>
						</li>

						
					</ul>
				</li>

				

				

			</ul>

			<div class="menu_hamburger">
				
				<img src="assets/menu.svg" class="menu_img">
			</div>

			<div class="navigation">
				<div class="userBx">
					<div class="imgBx">
						<img src="assets/img/cara.jpg">
					</div>
					<p class="username">Matixx25</p>
				</div>
				<div class="menuToggle"></div>
					<ul class="menu2">
						<li><a href="#"><ion-icon name="person-outline"></ion-icon> Mi Perfil</a></li>
						<li><a href="#"><ion-icon name="chatbubbles-outline"></ion-icon> Mensajes</a></li>
						<li><a href="#"><ion-icon name="notifications-outline"></ion-icon> Notificasiones</a></li>
						<li><a href="#"><ion-icon name="settings-outline"></ion-icon> Configuracion</a></li>
						<li><a href="#"><ion-icon name="help-outline"></ion-icon> Ayuda y soporte</a></li>
						<li><a href="partials/logout.php"><ion-icon name="log-out-outline"></ion-icon> Cerrar Sesión</a></li>
					</ul>
			</div>
		</section>
		</nav>



	<div class="navigation2">
		<div class="menuToggle2"></div>
		<ul>
			<li class="list  active" style="--clr:#f44336;">
				<a href="libros.php">
					<span class="icon"><ion-icon name="book-outline"></ion-icon></span>
					<span class="text">Mis libros</span>
				</a>
			</li>

			<li class="list" style="--clr:#ffa117;">
				<a href="#">
					<span class="icon"><ion-icon name="heart-outline"></ion-icon></span>
					<span class="text">Favoritos</span>
				</a>
			</li>
	
			<li class="list" style="--clr:#0fc70f;">
				<a href="#">
					<span class="icon"><ion-icon name="people-outline"></ion-icon></span>
					<span class="text">Amigos</span>
				</a>
			</li>

			<li class="list" style="--clr:#2196f3;">
				<a href="addbook.php">
					<span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
					<span class="text">Publica un libro</span>
				</a>
			</li>
			<li class="list" style="--clr:#b145e9;">
				<a href="#">
					<span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
					<span class="text">Configuracion</span>
				</a>
			</li>
		</ul>
	</div>



      




	<script>
		let menuToggle = document.querySelector('.menuToggle');
		let navigation = document.querySelector('.navigation');
		menuToggle.onclick  = function() {
			navigation.classList.toggle('active')
		}
	</script>




	<script>
		const menuToggle2 = document.querySelector('.menuToggle2');
		const navigation2 = document.querySelector('.navigation2');
		menuToggle2.onclick = function(){
			navigation2.classList.toggle('open')
		}

	</script>


	

<br><br><br><br><br><br><br><br>
   <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <?php
                	if (isset($_GET['error'])) {
                        if ($_GET['error']==1) {
                        ?>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                Error, no se pudo agregar el libro
                            </div>
                <?php 
                	}
                }
                ?>


                

            <form action="../Login/partials/addbookdb.php" method="POST" enctype="multipart/form-data">


                <div class="d-flex flex-wrap main-box">


                	<div class="box-login container col-xl-12 m-6 text-left">
	                	<div class="form-col">
		                	<div class=" xl-5 m-5 text-left">
		                		<input type="text"  name="link" placeholder="link de compra del libro" name="link" required>
		                	</div>
		                </div>
		            </div>


                	<div class="box-login container col-xl-7 m-6 text-center">

                	

		                <div class="form-col">
		                    <div class=" xl-8 m-5 text-left">
		                        <input type="file"  name="foto" required>
		                    </div>
		                </div>

		                <div class="form-col">
		                    <div class=" xl-8 m-5 text-left">                 	
		                    	<input type="text"  name="title" placeholder="Titulo" required>
		                    </div>
		                </div>

		                <div class="form-col">
		                    <div class=" xl-8 m-5 text-left">                   	
		                    	<input type="text"  name="author" placeholder="Autor" required>
		                    </div>
		                </div>

		               
		                <div class="form-col">
		                	<div class=" xl-8 m-5 text-left">
		                		<textarea class="" name="resume" rows="4" cols="50" placeholder="Resumen" required></textarea>
		                	</div>
		                </div>

		                <div class="col-md">
						    <div class="form-floating">
						      <select class="" id="floatingSelectGrid" aria-label="Floating label select example">
						        <option value="narrativo">Narrativo</option>
						        <option value="lirico">Lírico</option>
						        <option value="dramatico">Dramático</option>
						        <option value="didactico">Didáctico</option>
						      </select>
						      <label for="floatingSelectGrid">¡Selecciona un genero literario para tu libro!</label><br><br>
	    					</div>
	    				</div>


	    				<div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
                    	</div>
                    </div>
                </div>
	    	</form>
	    		

                    



                    
            </div>
        </div>
    </div>

<br><br><br><br><br><br><br><br><br><br>
    <script src="assets/javascript/app.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
