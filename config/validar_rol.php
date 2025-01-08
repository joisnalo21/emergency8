<?php
function verificarRol($rolEsperado) {
    session_start();

    // Verificar si la sesión y el rol están definidos
    if (!isset($_SESSION['usuario']) || !isset($_SESSION['rol'])) {
        header("location:../../../src/views/index.php");
        die();
    }

    // Validar que el rol sea el esperado
    if ($_SESSION['rol'] != $rolEsperado) {
        header("location:../../../src/views/index.php");
        die();
    }
}
?>