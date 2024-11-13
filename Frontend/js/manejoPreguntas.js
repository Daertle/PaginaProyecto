datosPreguntas = []; //Array global para manejo de usuarios

async function traerPreguntas() {
	const response = await fetch('../../../../BackEnd/Gestion de Usuarios/listarPreguntas.php'
		, {
			method: 'GET',
		});
	// waits until the request completes...
	const res = await response.json();
	return res;
}

traerPreguntas().then(dato => {
	for (var i = 0; i < dato.length; i++) {
		filaNueva(dato[i], i);
	}

	datosPreguntas = dato;

});

function filaNueva(infoPreguntas, pos) {

    var fila = "<tr id=" + pos + ">"
        + "<td id='txtId" + pos + "' class='pl-4'>" + infoPreguntas.id_pregunta + "</td>"
        + "<td id='txtPregunta" + pos + "'>" + infoPreguntas.pregunta + "</td>"
        + "<td id='txtRepuesta" + pos + "'>" + infoPreguntas.respuesta_correcta + "</td>"
        + "<td id='txtOpcion" + pos + "'>" + infoPreguntas.opcion_texto + "</td>"
        + "<td>"
        + "<button type='button' id=" + pos + " onclick='eliminar(this.id)' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-trash'></i> </button>"
        + "</td></tr>";
    $("#tablaPreguntas").append(fila);
}


function agregarPregunta() {
    $.ajax({
        url: '../../../../BackEnd/Gestion de Usuarios/altaPreguntas.php',
        method: 'POST',
        data: {
            pregunta: $('#txtPregunta').val(),
            respuesta: $('#txtRespuesta').val(),
            opcion1: $('#txtOpcion1').val(),
            opcion2: $('#txtOpcion2').val(),
            opcion3: $('#txtOpcion3').val(),
        },
        success: function (respuesta) {
            console.log(respuesta);

            traerPreguntas().then(dato => {
                // Clear the table first
                $("#tablaPreguntas").find("tr:gt(0)").remove();
                datosPreguntas = dato;
                for (var i = 0; i < dato.length; i++) {
                    filaNueva(dato[i], i);
                }
            });
            cerrarModalAgregar();
        },
        error: function (respuesta) {
            console.log(respuesta);
        },
    });
}

function eliminar(pos) {
	if (confirm('¿Está seguro de que desea eliminar este alumno?')) {
	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/bajaPreguntas.php',
		method: 'POST',
		data: {
			dato: datosPreguntas[pos].id_pregunta
		},
		success: function (respuesta) {
			console.log(respuesta);

			traerPreguntas().then(dato => {
				// Clear the table first
				$("#tablaPreguntas").find("tr:gt(0)").remove();
				datosPreguntas = dato;
				for (var i = 0; i < dato.length; i++) {
					filaNueva(dato[i], i);
				}
			});
			cerrarModalAgregar();
		},
		error: function (respuesta) {
			console.log(respuesta);
			
		},
	});
}
}	


/*##############   MODAL  ############## */


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
	var modal = document.getElementById("modifModal");
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
function mostrarModalAgregar() {
    $('#addModal').css("display", "block");
}

function cerrarModalAgregar() {
    $('#addModal').css("display", "none");
}

