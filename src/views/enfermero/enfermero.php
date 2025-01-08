<?php
include("../../../config/validar_rol.php");
verificarRol(3); // 3 es el rol de enfermero

// Código específico para el enfermero
echo "Bienvenido, Enfermero";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enfermero</h1>
    </form>
      <form action="../../controller/logout.php" method="post">
        <button type="submit">Cerrar Sesión</button>
      </form>
</body>
</html>