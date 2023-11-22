<?php 
    require 'functions.php';
    
    if (true){
        $conexion = dbConnect();
        $docente = getUsuariosByRol($conexion, 1)[0];
        $imagenes = getImagenes($conexion);
        $nombre = $docente->nombre;
        $fondo = $imagenes[0]->enlace;
        $inicio = $imagenes[1]->enlace;
        $docente = null;
        $imagenes = null;
        $conexion = null;
    }
        
    if(isset($_REQUEST["boton_acceso"])){
        // Toma los datos del formulario
        $email = $_REQUEST["email"];
        $password = $_REQUEST["contrasena"];
        $w_password = md5($password);

        $conexion = dbConnectmysqli();

        //Consulta a la base de datos
        $query = "SELECT * FROM usuarios WHERE email= '$email' AND contrasena= '$w_password' ";
        $queryTeacher = mysqli_query($conexion,$query);
        if (mysqli_num_rows($queryTeacher) > 0) {
            $usuarioDocente = mysqli_fetch_assoc($queryTeacher);
            session_start();
            
            $_SESSION['rol'] = $usuarioDocente['rol'];
            $_SESSION['email'] = $email;
            $_SESSION['estado_sesion'] = true;
            
            if ($_SESSION['rol'] = 1){
                header('Location: backend/dashboard_teacher.php');
                exit();
            } else {
                header('Location: backend/dashboard_student.php');
                exit();
            }
        } else {
            echo "Su email o constraseña no coincide con nuestros registros";

            unset($_SESSION['email']);
            $_SESSION['estado_sesion'] = false;
        }

        $queryTeacher = null;
        $conexion = null;
    }

    require 'index.view.php';
 