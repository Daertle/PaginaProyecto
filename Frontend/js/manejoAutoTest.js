function evaluarRespuestas() {
    let form = document.getElementById('testForm');
    let inputs = form.getElementsByTagName('input');
    let puntuacion = 0;
    let totalPreguntas = 0;
    
  
    // Limpiar clases anteriores de las respuestas
    let labels = form.getElementsByTagName('label');
    for (let label of labels) {
      label.classList.remove('correcto', 'incorrecto');
    }
  
    // Iterar sobre las preguntas y opciones
    for (let i = 0; i < inputs.length; i++) {
      if (inputs[i].type === 'hidden') {
        let respuestaCorrecta = inputs[i].value;
        let preguntaId = inputs[i].name.replace('respuesta_correcta_', '');
        
        // Buscar la opción seleccionada para esta pregunta
        let seleccionada = form.querySelector(`input[name='pregunta_${preguntaId}']:checked`);
        
        // Obtener todas las opciones para esta pregunta
        let opciones = form.querySelectorAll(`input[name='pregunta_${preguntaId}']`);
        
        if (seleccionada) {
          totalPreguntas++;
          
          // Marcar la respuesta seleccionada
          if (seleccionada.value === respuestaCorrecta) {
            // Respuesta correcta
            seleccionada.nextElementSibling.classList.add('correcto');
            puntuacion++;
          } else {
            // Respuesta incorrecta
            seleccionada.nextElementSibling.classList.add('incorrecto');
            
            // Mostrar cuál era la correcta
            opciones.forEach(opcion => {
              if (opcion.value === respuestaCorrecta) {
                opcion.nextElementSibling.classList.add('correcto');
              }
            });
          }
        }
      }
    }
  
    // Mostrar la puntuación final
    let puntuacionElement = document.getElementById('puntuacion');
    puntuacionElement.innerText = `Tu puntuación es: ${puntuacion} de ${totalPreguntas}`;
    
    // Deshabilitar los inputs después de enviar
    let opciones = form.querySelectorAll('input[type="radio"]');
    opciones.forEach(opcion => {
      opcion.disabled = true;
    });
    
    // Deshabilitar el botón de enviar
    let submitButton = form.querySelector('button');
    if (submitButton) {
      submitButton.disabled = true;
    }
}