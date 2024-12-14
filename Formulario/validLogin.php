<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numeroCuentaIngresado = $_POST['numero-cuenta'];
    $contraseñaIngresada = $_POST['contraseña'];

    if (isset($_SESSION['Alumnos'][$numeroCuentaIngresado])) {
        $usuario = $_SESSION['Alumnos'][$numeroCuentaIngresado];

        if ($usuario['password'] === $contraseñaIngresada) {
            header('Location: info.php');
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Número de cuenta no encontrado.";
    }
}
?>