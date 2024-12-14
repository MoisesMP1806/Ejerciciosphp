<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/info.css?v=1.0">
    <title>Document</title>
</head>
<body>
    <header class="cont-menu">
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="formulario.php">Registrar Alumnos</a></li>
            <li><a href="login.php">Cerrar Sesión</a></li>
        </ul>
    </header>

    <div class="tarjeta-usuario">
        <div class="titulo">
            <h1>Usuario Autenticado</h1>
        </div>

        <div class="tarjeta">
            <div class="nombre">
                <?php
                    session_start();
                    $numeroCuenta = '1'; 
                    if (isset($_SESSION['Alumnos'][$numeroCuenta])) {
                        $datosAlumno = $_SESSION['Alumnos'][$numeroCuenta];
                        echo "Nombre: " . htmlspecialchars($datosAlumno['nombre']);
                    }
                ?>
            </div>
            <div class="cont-tar">
                <div class="titulo-info">
                    <h2>Información</h2>
                </div>
                <div class="numeroCuenta">
                    <?php
                        if (isset($datosAlumno)) {
                            echo "Número de cuenta: " . htmlspecialchars($numeroCuenta);
                        }
                    ?>
                </div>
                <div class="primerApellido">
                    <?php
                        if (isset($datosAlumno)) {
                            echo "Primer Apellido: " . htmlspecialchars($datosAlumno['primer_apellido']);
                        }
                    ?>
                </div>
                <div class="contraseña">
                    <?php
                        if (isset($datosAlumno)) {
                            echo "Contraseña: " . htmlspecialchars($datosAlumno['contraseña']);
                        }
                    ?>
                </div>
                <div class="genero">
                    <?php
                        if (isset($datosAlumno)) {
                            echo "Género: " . htmlspecialchars($datosAlumno['genero']);
                        }
                    ?>
                </div>
                <div class="fechaNacimiento">
                    <?php
                        if (isset($datosAlumno)) {
                            echo "Fecha de Nacimiento: " . htmlspecialchars($datosAlumno['fecha_nacimiento']);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="datosGuardados">
        <table class="tabla-datos">
            <thead>
                <tr class="tabla-cabecera">
                    <th class="tabla-columna">Nombre</th>
                    <th class="tabla-columna">Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['Alumnos'])) {
                    foreach ($_SESSION['Alumnos'] as $numeroCuenta => $datosAlumno) {
                        echo "<tr class='tabla-fila'>";
                        echo "<td class='tabla-dato'>" . htmlspecialchars($datosAlumno['nombre']) . "</td>";
                        echo "<td class='tabla-dato'>" . htmlspecialchars($datosAlumno['fecha_nacimiento']) . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>