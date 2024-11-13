datosUsuarios = []; //Array global para manejo de usuarios

async function traerUsuarios() {
	const response = await fetch('../../../../BackEnd/Gestion de Usuarios/listarInstructores.php'
		, {
			method: 'GET',
		});
	// waits until the request completes...
	const res = await response.json();
	return res;
}

traerUsuarios().then(dato => {
	for (var i = 0; i < dato.length; i++) {
		filaNueva(dato[i], i);
	}

	datosUsuarios = dato;

});

function filaNueva(infoPersona, pos) {
	var fila = "<tr id=" + pos + ">"
		+ "<td id='txtDocumento" + pos + "' class='pl-4'>" + infoPersona.documentoInstructor + "</td>"
		+ "<td id='txtUsername" + pos + "'>" + infoPersona.username + "</td>"
		+ "<td id='txtNombre" + pos + "'>" + infoPersona.nombre + "</td>"
		+ "<td id='txtApellido" + pos + "'>" + infoPersona.apellido + "</td>"
		+ "<td id='txtFechaNacimiento" + pos + "'>" + infoPersona.fechaNacimiento + "</td>"
		+ "<td id='txtTelefono" + pos + "'>" + infoPersona.telefono + "</td>"
		+ "<td id='txtEmail" + pos + "'>" + infoPersona.correo + "</td>"
		+ "<td>"
		+ "<button type='button' id=" + pos + " onclick='eliminar(this.id)' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-trash'></i> </button>"
		+ "<button type='button' onclick='mostrarModal(" + pos + ")' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-edit'></i> </button>"
		+ "</td></tr>";
	$("#tablaPersonas").append(fila);
}

function eliminar(pos) {
	if (confirm('¿Está seguro de que desea eliminar este instructor?')) {
		$.ajax({
			url: '../../../../BackEnd/Gestion de Usuarios/bajaInstructor.php',
			method: 'POST',
			data: {
				dato: datosUsuarios[pos].documentoInstructor
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
	if ($('#txtDato').val() === "username") {
		let nuevoUsername = $('#txtNuevo').val();
		if (nuevoUsername !== datosUsuarios[pos].username) {
			let existeUsuario = verificarUsername(nuevoUsername);

			if (existeUsuario) {
				alert("Ese Username ya existe");
				return;
			}
		}
	}

	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/modificarInstructores.php',
		method: 'POST',
		data: {
			cedula: datosUsuarios[pos].documentoInstructor,
			dato: $('#txtDato').val(),
			nuevo: $('#txtNuevo').val(),
			catA: $('#txtA').val(),
			catB: $('#txtB').val(),
			catC: $('#txtC').val()
		},
		success: function (respuesta) {
			console.log(respuesta);
		},
		error: function (respuesta) {
			console.log(respuesta);
		},
	});

	$casos = $('#txtDato').val();

	if ($casos == "nombre") {
		$("#txtNombre" + pos).html($('#txtNuevo').val());
	}
	if ($casos == "apellido") {
		$("#txtApellido" + pos).html($('#txtNuevo').val());
	}
	if ($casos == "fechaNacimiento") {
		$("#txtFechaNacimiento" + pos).html($('#txtNuevo').val());
	}
	if ($casos == "telefono") {
		$("#txtTelefono" + pos).html($('#txtNuevo').val());
	}
	if ($casos == "email") {
		$("#txtEmail" + pos).html($('#txtNuevo').val());
	}
	if ($casos == "estado") {
		$("#txtEstado" + pos).html($('#txtNuevo').val());
	}
	if ($casos == "fechaInscripcion") {
		$("#txtFechaInscipción" + pos).html($('#txtNuevo').val());
	}
	if ($casos == "username") {
		$("#txtUsername" + pos).html($('#txtNuevo').val());
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

async function agregarInstructor() {
	let verifica = await verificarCedula();
	let existe = await verificarExistencia();
	let existeUsuario = await verificarUsername();

	console.log("verifica:", verifica); // Log the verifica value
	console.log("existe:", existe); // Log the existe value

	if (!verifica) {
		alert("Esa cedula es Inexistente");
		return;
	}

	if (existe) {
		alert("Ese Usuario ya existe");
		return;
	}

	if (existeUsuario) {
		alert("Ese Username ya existe");
		return;
	}

	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/altaInstructor.php',
		method: 'POST',
		data: {
			documento: $('#txtNuevoDocumento').val(),
			username: $('#txtNuevoUsername').val(),
			nombre: $('#txtNuevoNombre').val(),
			apellido: $('#txtNuevoApellido').val(),
			fechaNacimiento: $('#txtNuevaFechaNacimiento').val(),
			telefono: $('#txtNuevoTelefono').val(),
			correo: $('#txtNuevoCorreo').val(),
			password: $('#txtNuevaPassword').val(),

			claseA: $('#txtClaseA').is(':checked') ? 1 : 0,
			claseB: $('#txtClaseB').is(':checked') ? 1 : 0,
			claseC: $('#txtClaseC').is(':checked') ? 1 : 0,

			lunes: $('#txtLunes').is(':checked') ? 1 : 0,
			martes: $('#txtMartes').is(':checked') ? 1 : 0,
			miercoles: $('#txtMiercoles').is(':checked') ? 1 : 0,
			jueves: $('#txtJueves').is(':checked') ? 1 : 0,
			viernes: $('#txtViernes').is(':checked') ? 1 : 0,
			sabado: $('#txtSabado').is(':checked') ? 1 : 0,
		},
		success: function (respuesta) {
			console.log(respuesta);
			// Update the datosUsuarios array and add a new row to the table
			traerUsuarios().then(dato => {
				// Clear the table first
				$("#tablaPersonas").find("tr:gt(0)").remove();
				datosUsuarios = dato;
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

async function verificarCedula() {
	let verifico = false;

	try {
		const response = await $.ajax({
			url: '../../../../BackEnd/Gestion de Usuarios/verificadorCI.php',
			method: 'POST',
			data: {
				cedula: $('#txtNuevoDocumento').val()
			},
			dataType: 'json' // Especificamos explícitamente que esperamos JSON
		});

		console.log("Respuesta recibida:", response);
		verifico = response === true; // Comparación booleana directa

	} catch (error) {
		console.error("Error en verificarCedula:", error);
		verifico = false;
	}

	return verifico;
}

async function verificarExistencia() {
	let verifico;

	await $.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/verificadorExiste.php',
		method: 'POST',
		data: {
			cedula: $('#txtNuevoDocumento').val()
		},
		success: function (response) {
			try {
				console.log("verificarExistencia response:", response); // Log the response
				verifico = JSON.parse(response);
			} catch (e) {
				console.error("Error parsing JSON response: ", e);
				verifico = false;
			}
		},
		error: function () {
			verifico = false;
		}
	});

	return verifico;
}

async function verificarUsername() {
	let verifico;

	await $.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/verificadorUsuario.php',
		method: 'POST',
		data: {
			username: $('#txtNuevoUsername').val()
		},
		success: function (response) {
			try {
				console.log("verificarExistencia response:", response); // Log the response
				verifico = JSON.parse(response);
			} catch (e) {
				console.error("Error parsing JSON response: ", e);
				verifico = false;
			}
		},
		error: function () {
			verifico = false;
		}
	});

	return verifico;
}

// Función para mostrar/ocultar el campo de texto en el modal de modificar
function mostrarCampoTexto() {
	var datoCambiado = document.getElementById("txtDato").value;
	var campoTextoContainer = document.getElementById("campoTextoContainer");

	if (datoCambiado === "fechaNacimiento" || datoCambiado === "categoriaLibreta" || datoCambiado === "categoriaClase" || datoCambiado === "horarios") {
		campoTextoContainer.style.display = "none";
	} else {
		campoTextoContainer.style.display = "block";
	}
}

// Función para mostrar/ocultar el campo de fecha de nacimiento en el modal de modificar
function mostrarCampoFechaNacimiento() {
	var datoCambiado = document.getElementById("txtDato").value;
	var fechaNacimientoInput = document.getElementById("fechaNacimientoContainer");

	if (datoCambiado === "fechaNacimiento") {
		fechaNacimientoInput.style.display = "block";
	} else {
		fechaNacimientoInput.style.display = "none";
	}
}

function mostrarCampoHorarios() {
	var datoCambiado = document.getElementById("txtDato").value;
	var horariosContainer = document.getElementById("horariosContainer");

	if (datoCambiado === "horarios") {
		horariosContainer.style.display = "block";
	} else {
		horariosContainer.style.display = "none";
	}
}

function mostrarCampoClase() {
	var datoCambiado = document.getElementById("txtDato").value;
	var claseContainer = document.getElementById("categoriaClaseContainer");

	if (datoCambiado === "categoriaClase") {
		claseContainer.style.display = "block";
	} else {
		claseContainer.style.display = "none";
	}
}

// Event listener para el campo txtDato
document.getElementById("txtDato").addEventListener("change", function () {
	mostrarCampoTexto();
	mostrarCampoFechaNacimiento();
	mostrarCampoClase();
	mostrarCampoHorarios();
});