<?php 
	if (isset($_FILES['foto']['name'])) {        
        $tipoArchivo = $_FILES['foto']['type'];
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        $con = mysqli_connect("localhost","root","","myreview");
        $binariosImagen = mysqli_escape_string($con, $binariosImagen);
        $query = "INSERT INTO librostbl (link, titulo, autor, resumen, nombreimg, imagen, tipo) values 
        ('" . $_POST['link'] . "','" 
        	. $_POST['title'] . "','" 
        	. $_POST['author'] . "','" 
        	. $_POST['resume'] . "','"
        	. $nombreArchivo . "','" 
        	. $binariosImagen . "','" 
        	. $tipoArchivo . "');
            ";

        $res = mysqli_query($con, $query);

        if ($res) {
        	header ("Location: ../../Main/libros.php");
        } else {
        	header ("Location: ../Main/addbook.php?error=1");
        }
    } else {
    	echo "no";
    }
?>