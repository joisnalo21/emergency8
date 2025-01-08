// Escuchar el evento del botón para validar la cédula
document.getElementById('validar-cedula').addEventListener('click', function () {
    // Obtener el valor del campo de cédula
    const cedula = document.getElementById('cedula').value;
  
    // Validar la cédula utilizando la función verificarCI del archivo `verificarCI.js`
    const resultado = verificarCI(cedula);
  
    // Mostrar el resultado en la página
    const resultadoValidacion = document.getElementById('resultado-validacion');
    if (resultado.includes('correcta')) {
      resultadoValidacion.style.color = 'green';
    } else {
      resultadoValidacion.style.color = 'red';
    }
    resultadoValidacion.textContent = resultado;
  });
  