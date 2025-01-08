// Función para cargar las provincias
async function cargarProvincias() {
    try {
      const response = await fetch("../../../assets/provincias.json"); // Ruta al archivo JSON
      const data = await response.json();
  
      const selectProvincias = document.getElementById("provincias");
      const selectCantones = document.getElementById("cantones");
      const selectParroquias = document.getElementById("parroquias");
  
      // Llena el select de provincias
      for (const key in data) {
        if (data.hasOwnProperty(key)) {
          const option = document.createElement("option");
          option.value = key; // ID de la provincia
          option.textContent = data[key].provincia; // Nombre de la provincia
          selectProvincias.appendChild(option);
        }
      }
  
      // Evento cuando se selecciona una provincia
      selectProvincias.addEventListener("change", () => {
        const provinciaId = selectProvincias.value;
        cargarCantones(data, provinciaId, selectCantones, selectParroquias);
      });
  
      // Evento cuando se selecciona un cantón
      selectCantones.addEventListener("change", () => {
        const provinciaId = selectProvincias.value;
        const cantonId = selectCantones.value;
        cargarParroquias(data, provinciaId, cantonId, selectParroquias);
      });
    } catch (error) {
      console.error("Error al cargar el JSON:", error);
    }
  }
  
  // Función para cargar cantones según la provincia seleccionada
  function cargarCantones(data, provinciaId, selectCantones, selectParroquias) {
    // Limpia los selects dependientes
    selectCantones.innerHTML = '<option value="">Seleccione un cantón</option>';
    selectParroquias.innerHTML = '<option value="">Seleccione una parroquia</option>';
    selectCantones.disabled = true;
    selectParroquias.disabled = true;
  
    if (provinciaId && data[provinciaId]?.cantones) {
      const cantones = data[provinciaId].cantones;
      for (const key in cantones) {
        const option = document.createElement("option");
        option.value = key; // ID del cantón
        option.textContent = cantones[key].canton; // Nombre del cantón
        selectCantones.appendChild(option);
      }
      selectCantones.disabled = false;
    }
  }
  
  function cargarParroquias(data, provinciaId, cantonId, selectParroquias) {
    // Limpia el select de parroquias
    selectParroquias.innerHTML = '<option value="">Seleccione una parroquia</option>';
    selectParroquias.disabled = true;
  
    if (
      provinciaId &&
      cantonId &&
      data[provinciaId]?.cantones[cantonId]?.parroquias
    ) {
      const parroquias = data[provinciaId].cantones[cantonId].parroquias;
  
      // Itera sobre el objeto de parroquias
      for (const key in parroquias) {
        if (parroquias.hasOwnProperty(key)) {
          const option = document.createElement("option");
          option.value = key; // Código de la parroquia
          option.textContent = parroquias[key]; // Nombre de la parroquia
          selectParroquias.appendChild(option);
        }
      }
  
      // Habilita el campo de selección de parroquias
      selectParroquias.disabled = false;
    } else {
      console.log("No se encontraron parroquias para este cantón.");
    }
  }
  
  
  // Cargar provincias al cargar la página
  document.addEventListener("DOMContentLoaded", cargarProvincias);
  