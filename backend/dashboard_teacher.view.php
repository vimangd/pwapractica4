<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de calificaciones</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/dashboard_teacher.style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Bienvenido docente <?= $nombre?></h1>
        </header>
        <div class="container centrar">
            <h2>Opciones</h2>
            <div class="opciones">
                <button type="submit" id="agregar" name="agregar" class="btn btn-primary">Añadir estudiante</button>
                <button id="boton_ver" name="boton_ver" class="btn btn-primary">Ver estudiantes</button>
            </div>
            <div class="container relativa color">
                <form action="registrar.php" id="form_agregar" class="absoluta hiden">
                    <h4>Datos a ingresar</h4>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div> 
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div> 
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="institution" class="form-label">Intitución</label>
                        <input type="text" class="form-control" id="institution" name="institution">
                    </div>  
                    <div class="mb-3">
                        <label for="materia" class="form-label">Asignatura</label>
                        <input type="text" class="form-control" id="materia" name="materia">
                    </div>  
                    <div class="mb-3">
                        <label for="parcial" class="form-label">Parcial</label>
                        <input type="number" class="form-control" id="parcial" name="parcial">
                    </div>
                    <div class="mb-3">
                        <label for="nota_t" class="form-label">Nota teórica</label>
                        <input type="number" class="form-control" id="nota_t" name="nota_t">
                    </div> 
                    <div class="mb-3">
                        <label for="nota_p" class="form-label">Nota práctica</label>
                        <input type="number" class="form-control" id="nota_p" name="nota_p">
                    </div> 
                    <button type="submit" id="boton_acceso" name="registrar" class="btn btn-primary">Añadir</button>
                </form>
                <div id="ver_estudiantes" class="absoluta centrar hiden">
                    <h1>Sección para ver a los estudiantes</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <script src="../scripts/mostrar_elementos.js"></script>
</body>
</html>