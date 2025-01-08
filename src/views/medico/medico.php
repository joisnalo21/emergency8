<?php 
include("../../../config/validar_rol.php"); 
verificarRol(2); // 2 es el rol de médico

// Código específico para el médico
echo "Bienvenido, Médico";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <form>
        <label for="provincias">Provincia:</label>
        <select id="provincias" name="provincias">
          <option value="">Seleccione una provincia</option>
        </select>
      
        <label for="cantones">Cantón:</label>
        <select id="cantones" name="cantones" disabled>
          <option value="">Seleccione un cantón</option>
        </select>
      
        <label for="parroquias">Parroquia:</label>
        <select id="parroquias" name="parroquias" disabled>
          <option value="">Seleccione una parroquia</option>
        </select>
      </form>

      <form id="form-cedula">
        <label for="cedula">Ingrese su cédula:</label>
        <input type="text" id="cedula" name="cedula" maxlength="10" required>
        <button type="button" id="validar-cedula">Validar Cédula</button>
        <p id="resultado-validacion" style="color: red;"></p>
      </form>
      <form action="../../controller/logout.php" method="post">
        <button type="submit">Cerrar Sesión</button>
      </form>
      <script src="script.js"></script>
      <script src="../../../assets/js/verificarCI.js"></script>
      <script src="../../../assets/js/validarCedula.js"></script>
    
</body>
</html>