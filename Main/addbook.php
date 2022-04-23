<!DOCTYPE html>
<html>
<head>
<!-- End WOWSlider.com -->
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myreview</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/add_book.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wgth@400;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous" ></script>
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body>
	

	
	<nav class="menu">
		<section class="menu_container">


			<a href="index.php"><h1 class="menu_logo">Myreview</h1></a>

			
			  <form class="container-fluid">
				    <div class="input-group">
				      
				      <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
				      <button class="input-group-text" id="basic-addon1"><img src="assets/search.svg" class=""></button>
				   </div>
			  </form>
			



			<ul class="menu_links">

				<li class="menu_item">
					<a class="menu_link">Home</a>
				</li>



				<li class="menu_item menu_item--show">
					<a class="menu_link">Perfil <img src="assets/arrow.svg" class="menu_arrow"></a>
					<ul class="menu_nesting">

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">F</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">T</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">C</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">P</a>
						</li>
					</ul>
				</li>


					<li class="menu_item menu_item--show">
						<a class="menu_link">About<img src="assets/arrow.svg" class="menu_arrow"></a>
						<ul class="menu_nesting">

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 1</a>
							</li>

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 2</a>
							</li>

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 3</a>
							</li>

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 4</a>
							</li>
						</ul>
					</li>

				<li class="menu_item">
					<a class="menu_link">Contact</a>
				</li>

			</ul>
		</section>
	</nav>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

                	<div class="form-group">
                		<input type="text" class="form-control" name="link" placeholder="link compra del libro" name="link" required>
                	</div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="foto" required>
                    </div>

                    <div class="form-group">
                    	
                    	<input type="text" class="form-control" name="title" placeholder="Titulo" required>
                    </div>

                    <div class="form-group">
                    	
                    	<input type="text" class="form-control" name="author" placeholder="Autor" required>
                    </div>


                    <textarea class="form-control" name="resume" rows="4" cols="50" placeholder="Resumen" required></textarea>



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
