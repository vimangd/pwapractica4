<?php
    require '../functions.php';
    $conexion_PDO = dbConnect();
    $conexion_mysql = dbConnectmysqli();
    $docente = getUsuariosByRol($conexion_PDO, 1)[0];
    $nombre = $docente->nombre;

    require 'dashboard_teacher.view.php';