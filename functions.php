<?php
    function dbConnect() {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=sistema_de_calificaciones', 'root', 'ube2023');
        } catch(PDOException $error){
            die($error->getMessage());
        }
    }
    function dbConnectmysqli() {
        return mysqli_connect('localhost', 'root', 'ube2023', 'sistema_de_calificaciones');
    }
    function getUsuariosByRol ($conexion, $rol){
        $queryUsuarios = $conexion->prepare("SELECT nombre, email, contrasena FROM usuarios WHERE rol=$rol");
        $queryUsuarios->execute();
        return $queryUsuarios->fetchAll(PDO::FETCH_OBJ);
    }
    function getImagenes ($conexion) {
        $queryImagenes = $conexion->prepare("SELECT id, enlace FROM imagenes");
        $queryImagenes->execute();
        return $queryImagenes->fetchAll(PDO::FETCH_OBJ);
    }
    function getEstudiantes($conexion) {
        $arreglo = [];
        $arreglo_id = [];
        $arreglo_aux = [];
        $queryEstudiantes = $conexion->prepare("SELECT id, id_lugar, nombre, email FROM usuarios WHERE rol=2");
        $queryEstudiantes->execute();
        $estudiantes = $queryEstudiantes->fetchAll(PDO::FETCH_OBJ);
        foreach($estudiantes as $id => $objeto) {
            array_push($arreglo_aux, $objeto->id, $objeto->id_lugar);
            array_push($arreglo_id, $arreglo_aux);
            $arreglo_aux = [];
            array_push($arreglo_aux, $objeto->nombre, $objeto->email);
            array_push($arreglo, $arreglo_aux);
            $arreglo_aux = [];
        }
        foreach($arreglo_id as $key => $array){
            $queryInstitucion = $conexion->prepare("SELECT nombre FROM lugares WHERE id=$array[1]");
            $queryInstitucion->execute();
            $instituciones = $queryInstitucion->fetchAll(PDO::FETCH_OBJ);
        }
        return $instituciones;
    }