<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroCuenta = $_POST['numero-cuenta'];
    $nombre = $_POST['nombre'];
    $primerApellido = $_POST['primer-apellido'];
    $segundoApellido = $_POST['segundo-apellido'];
    $genero = $_POST['genero'];
    $fechaNacimiento = $_POST['fecha-nacimiento'];
    $contraseña = $_POST['contraseña'];

    $datosAlumno = [
        'numero_cuenta' => $numeroCuenta,
        'nombre' => $nombre,
        'primer_apellido' => $primerApellido,
        'segundo_apellido' => $segundoApellido,
        'genero' => $genero,
        'fecha_nacimiento' => $fechaNacimiento,
        'contraseña' => $contraseña
    ];

    $_SESSION['Alumnos'][$numeroCuenta] = $datosAlumno;

    echo "<h2>Datos del alumno guardados en la sesión:</h2>";
    echo "<pre>";
    print_r($_SESSION['Alumnos']);
    echo "</pre>";
}
?>