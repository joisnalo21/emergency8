<?php
include("../../../config/validar_rol.php");
verificarRol(1); // 1 es el rol de administrador

// Código específico para el administrador
echo "Bienvenido, Administrador";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Administrador</h1>
    </form>
      <form action="../../controller/logout.php" method="post">
        <button type="submit">Cerrar Sesión</button>
      </form>
</body>
</html>