<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./estilos/formulario.css">
</head>
<body>
    <?php
        session_start();
        $usuario = [
            'numero_cuenta' => '1',
            'nombre' => 'Admin',
            'primer_apellido' => 'General',
            'contraseña' => 'adminpass123',
            'genero' => 'Otro'
        ];
        $_SESSION['Alumnos'][$usuario['numero_cuenta']] = $usuario;
    ?>
    <div class="general-login">
        <div class="general-items">
            <div class="login">
                <h1>Login</h1>
            </div>
    
            <form method="POST">
                <div class="numCuenta">
                    <label for="numero-cuenta">Número de Cuenta:</label>
                    <input type="text" name="numero-cuenta" id="numero-cuenta" placeholder="Número de cuenta" required>
                </div>

                <div class="contra">
                    <label for="contraseña">Contraseña: </label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                </div>

                <div class="entrar">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>