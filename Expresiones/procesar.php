<?php

    function validar_email($correo) {
        $expresion = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        return preg_match($expresion, $correo) ? true : false;
    }
    
    function validar_curp($curp) {
        $expresion = '^[A-Z]{4}\d{6}[HM][A-Z]{2}[A-Z0-9]{3}\d$';
        return preg_match($expresion, $curp) ? true : false;
    }
    
    function validar_palabra_larga($palabra) {
        $expresion = '/^[a-zA-Z]{51,}$/';
        return preg_match($expresion, $palabra) ? true : false;
    }
    
    function escapar_simbolos_especiales($cadena) {
        return htmlspecialchars($cadena, ENT_QUOTES, 'UTF-8');
    }
    
    function validar_numero_decimal($numero) {
        $expresion = '/^\d+(\.\d+)?$/';
        return preg_match($expresion, $numero) ? true : false;
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $correo = $_POST['correo'] ?? '';
        $curp = $_POST['curp'] ?? '';
        $palabra = $_POST['palabra'] ?? '';
        $simbolos = $_POST['simbolos'] ?? '';
        $decimal = $_POST['decimal'] ?? '';
    
        echo "<h2>resultados de validacion</h2>";
        echo "<p>correo: " . (validar_email($correo) ? "valido" : "invalido") . "</p>";
        echo "<p>curp: " . (validar_curp($curp) ? "valido" : "invalido") . "</p>";
        echo "<p>palabra: " . (validar_palabra_larga($palabra) ? "valida" : "invalida") . "</p>";
        echo "<p>cadena de simbolos escapados: " . escapar_simbolos_especiales($simbolos) . "</p>";
        echo "<p>numero decimal: " . (validar_numero_decimal($decimal) ? "valido" : "invalido") . "</p>";
    }



?>