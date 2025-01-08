<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();

// Conexión a la base de datos
include("db.php");

// Consulta para validar usuario y contraseña
$consulta = "SELECT * FROM users WHERE user='$usuario' AND password='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $filas = mysqli_fetch_assoc($resultado);

    // Guardar en la sesión
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = $filas['id_cargo'];

    // Redirigir según el rol
    if ($filas['id_cargo'] == 1) { // Administrador
        header("location:/prueba1/src/views/admin/admin.php");
    } elseif ($filas['id_cargo'] == 2) { // Médico
        header("location:/prueba1/src/views/medico/medico.php");
    } elseif ($filas['id_cargo'] == 3) { // Enfermero
        header("location:/prueba1/src/views/enfermero/enfermero.php");
    }
} else {
    // Redirigir al login con error
    header("location:/prueba1/src/views/index.php?error=1");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>


