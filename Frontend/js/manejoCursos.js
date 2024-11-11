datosClase = []; //Array global para manejo de usuarios

async function traerCursos() {
	const response = await fetch('../../../../BackEnd/Gestion de Usuarios/listarCursos.php'
		, {
			method: 'GET',
		});
	// waits until the request completes...
	const res = await response.json();
	return res;
}

traerCursos().then(dato => {
	for (var i = 0; i < dato.length; i++) {
		filaNueva(dato[i], i);
	}
	datosClase = dato;
});

function filaNueva(infoCurso, pos) {
	var fila = "<tr id=" + pos + ">"
		+ "<td id='txtCodigo" + pos + "' class='pl-4'>" + infoCurso.Codigo + "</td>"
		+ "<td id='txtDocumentoAlumno" + pos + "' class='pl-4'>" + infoCurso.documentoAlumno + "</td>"
		+ "<td id='txtDocumentoInstructor" + pos + "' class='pl-4'>" + infoCurso.documentoInstructor + "</td>"
		+ "<td id='txtMatricula" + pos + "' class='pl-4'>" + infoCurso.Matricula + "</td>"
		+ "<td id='txtPrecio" + pos + "' class='pl-4'>" + infoCurso.precio + "</td>"
		+ "<td id='txtDocumento" + pos + "' class='pl-4'>" + infoCurso.fecha + "</td>"
		+ "<td id='txhHora" + pos + "' class='pl - 4'>" + infoCurso.hora + "</td>"
		+ "<td id='txtTipoLibreta" + pos + "' class='pl-4'>" + infoCurso.tipoLibreta + "</td>"
		+ "<td id='txtResultado" + pos + "' class='pl-4'>" + infoCurso.resultado + "</td>"
		+ "<td id=='txtTipoCurso" + pos + "' class='pl-4'>" + infoCurso.Tipo + "</td>"
		+ "<td>"
		+ "<button type='button' id=" + pos + " onclick='eliminar(this.id)' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-trash'></i> </button>"
		+ "<button type='button' onclick='mostrarModal(" + pos + ")' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-edit'></i> </button>"
		+ "</td></tr>";
	$("#tablaCursos").append(fila);
}


function agregarCursos() {
	
	let verificaA = verificarCedulaAlumno();
	let verificaI = verificarCedulaInstructor();

	if (verificaA == "false") {
		alert("Esa cedula Estudiante es Inexistente");
		return;
	} 

	if (verificaI == "false") {
		alert("Esa cedula de Instructor es Inexistente");
		return;
	}
	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/altaCurso.php',
		method: 'POST',
		data: {
			cantidad: $('#txtCantidad').val(),
			documentoAlumno: $('#txtDocumentoAlumno').val(),
			documentoInstructor: $('#txtDocumentoInstructor').val(),
			matricula: $('#txtMatricula').val(),
			precio: $('#txtPrecio').val(),
			tipoLibreta: $('#txtLibreta').val(),
			tipo: $('#txtTipoCurso').val(),
		},
		success: function (respuesta) {
			console.log(respuesta);

			traerCursos().then(dato => {
				// Clear the table first
				$("#tablaCursos").find("tr:gt(0)").remove();
				datosClase = dato;
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
	if (confirm('¿Está seguro de que desea eliminar este curso?')) {
		$.ajax({
			url: '../../../../BackEnd/Gestion de Usuarios/bajaCurso.php',
			method: 'POST',
			data: {
				dato: datosClase[pos].Codigo 	
			},
			success: function (respuesta) {
				console.log(respuesta);
			},
			error: function (respuesta) {
				console.log(respuesta);
			},
		});
		$("#" + pos).remove();
	}
}

function guardarCambios(pos) {
	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/modificarCurso.php',
		method: 'POST',
		data: {
			codigo: datosClase[pos].Codigo,
			dato: $('#txtDato').val(),
			nuevo: $('#txtNuevo').val()
		},
		success: function (respuesta) {
			console.log(respuesta);
		},
		error: function (respuesta) {
			console.log(respuesta);
		},
	});

	$casos = $('#txtDato').val();

	if ($casos == "documentoAlumno") {
		$('#txtDocumentoAlumno' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "documentoInstructor") {
		$('#txtDocumentoInstructor' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "matricula") {
		$('#txtMatricula' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "precio") {
		$('#txtPrecio' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "fecha") {
		$('#txtFecha' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "hora") {
		$('#txtHora' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "tipoLibreta") {
		$('#txtTipoLibreta' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "tipoCurso") {
		$('#txtTipoCurso' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "resultado") {
		$('#txtResultado' + pos).text($('#txtNuevo').val());
	}
	cerrarModal();
}

/*##############   MODAL  ############## */

function mostrarModal(pos) {
	$('#modifModal').css("display", "block");
	$('#btnGuardar').click(function () { guardarCambios(pos); });
}

// Cerrar el modal
function cerrarModal() {
	$('#modifModal').css("display", "none");
	$('#btnGuardar').unbind('click');
}

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

function verificarCedulaAlumno() {
	let verifico = false;

	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/verificadorCI.php',
		method: 'POST',
		data: {
			cedula: $('#txtDocumentoAlumno').val()
		},
		success: function (response) {
			verifico = response;
		},
		async: false
	});
	return verifico;
}

function verificarCedulaInstructor() {
	let verifico = false;

	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/verificadorCI.php',
		method: 'POST',
		data: {
			cedula: $('#txtDocumentoInstructor').val()
		},
		success: function (response) {
			verifico = response;
		},
		async: false
	});
	return verifico;
}

// Función para mostrar/ocultar el campo de texto en el modal de modificar
function mostrarCampoTexto() {
    var datoCambiado = document.getElementById("txtDato").value;
    var campoTextoContainer = document.getElementById("campoTextoContainer");

    if (datoCambiado === "fecha" || datoCambiado === "hora" || datoCambiado === "documentoAlumno" || datoCambiado === "documentoInstructor" || datoCambiado === "matricula" || datoCambiado === "precio") {
        campoTextoContainer.style.display = "none";
    } else {
        campoTextoContainer.style.display = "block";
    }
}

// Función para mostrar/ocultar el campo de fecha de nacimiento en el modal de modificar
function mostrarCampoFecha() {
    var datoCambiado = document.getElementById("txtDato").value;
    var fechaInput = document.getElementById("fechaContainer");

    if (datoCambiado === "fecha") {
        fechaInput.style.display = "block";
    } else {
        fechaInput.style.display = "none";
    }
}

function mostrarCampoDocumento(){
	var datoCambiado = document.getElementById("txtDato").value;
	var documentoContainer = document.getElementById("documentoContainer");

	if (datoCambiado === "documentoAlumno" || datoCambiado === "documentoInstructor") {
		documentoContainer.style.display = "block";
	} else {
		documentoContainer 	.style.display = "none";
	}
}

function mostrarCampoHora(){
	var datoCambiado = document.getElementById("txtDato").value;
	var horaContainer = document.getElementById("horaContainer");

	if (datoCambiado === "hora") {
		horaContainer.style.display = "block";
	} else {
		horaContainer.style.display = "none";
	}
}

function mostrarCampoNumero(){
	var datoCambiado = document.getElementById("txtDato").value;
	var numeroContainer = document.getElementById("campoNumeroContainer");

	if (datoCambiado === "precio") {
		numeroContainer.style.display = "block";
	} else {
		numeroContainer.style.display = "none";
	}
}

// Event listener para el campo txtDato
document.getElementById("txtDato").addEventListener("change", function() {
	mostrarCampoNumero();
    mostrarCampoTexto();
	mostrarCampoDocumento();
	mostrarCampoHora();
	mostrarCampoFecha();
});

