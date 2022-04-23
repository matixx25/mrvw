<?php 

    include 'partials/ConexionDB.php';
    
    $message="";
    //Recibir los datos y almacenarlos en variables
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Correo=$_POST['Correo'];
    $Fecha_nacimiento=$_POST['Fecha_nacimiento'];
    $Genero=$_POST['Genero'];
    $Pais=$_POST['Pais'];
    $Usuario=$_POST['Usuario'];
    $Contraseña=$_POST['Contraseña'];
    $Confirmar_contraseña=$_POST['Confirmar_contraseña'];




    // Consulta para insertar
    $Añadir= "INSERT INTO registrotbl(Nombre,Apellido,Correo,Fecha_nacimiento,Genero,Pais,Usuario,Contraseña) VALUES ('$Nombre','$Apellido','$Correo','$Fecha_nacimiento','$Genero','$Pais','$Usuario','$Contraseña')";//Inserte en la tabla"registrotbl"(datos de tabla) los valores($valores)

    $Verificar_usuario=mysqli_query($Conexion,"SELECT * FROM registrotbl WHERE Usuario='$Usuario'");//En la base de datos va a buscar en el campo "usuario" si existe el dato 
    if (mysqli_num_rows($Verificar_usuario) >0){  //Si (la catidad de veces que existe el usuario>0),mysqli_num_rows(veces en la que esta el usuario)

        echo'   <script>
            alert("El usuario ya está registrado");
            window.history.go(-1);
                </script>';//window.history.go es para regresar a la pagina anterior
        exit; //Finaliza el script y permite no añadir el usuario
    }


    $Verificar_correo=mysqli_query($Conexion,"SELECT * FROM registrotbl WHERE Correo='$Correo'");
    if (mysqli_num_rows($Verificar_correo) >0){ 

        echo'   <script>
            alert("El Correo ya está en uso");
            window.history.go(-1);
                </script>';
        exit;
    }

    if ($Contraseña==$Confirmar_contraseña){

    }else{
        echo'   <script>
            alert("¡Las contraseñas no coincide!");
            window.history.go(-1);
                </script>';
        exit;
    }



    //Ejecutar consulta
    
    $Resultado=mysqli_query($Conexion,$Añadir);//Se ejecuta la conexion y la consulta

    if (!$Resultado){

        echo "Error al registrarse";
    }else{

        echo '<script> <!-- Despues enviar a otra pagiba(index.html)-->
            alert("Usuario registrado correctamente");
            window.history.go(-1); 
                </script>';

    }







    //Cerrar conexion
    mysqli_close($Conexion);

 ?>