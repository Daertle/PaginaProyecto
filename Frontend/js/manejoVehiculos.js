datosVehiculos = []; //Array global para manejo de Vehiculos

async function traerUsuarios() {
	const response = await fetch('../../../../BackEnd/Gestion de Usuarios/listarVehiculos.php'
		, {
			method: 'GET',
		});
	// waits until the request completes...
	const res = await response.json();
	return res;
}

traerUsuarios().then(dato => {
	for (var i = 0; i < dato.length; i++) {
		fila(dato[i], i);
	}

	datosVehiculos = dato;

});

function fila(infoVehiculo, pos) {
    var fila = "<tr id=" + pos + ">"
        + "<td id='txtMatricula" + pos + "' class='pl-4'>" + infoVehiculo.matricula + "</td>"
		+ "<td id='txtModelo" + pos + "'>" + infoVehiculo.modelo + "</td>"
		+ "<td id='txtMotor" + pos + "'>" + infoVehiculo.motor + "</td>"
		+ "<td id='txtCombustible" + pos + "'>" + infoVehiculo.combustible + "</td>"
		+ "<td id='txtMedida" + pos + "'>" + infoVehiculo.medida + "</td>"
		+ "<td id='txtSituacion" + pos + "'>" + infoVehiculo.situacionActual + "</td>"
		+ "<td id='txtKilometraje" + pos + "'>" + infoVehiculo.kilometraje + "</td>"
		+ "<td id='txtCategoria" + pos + "'>" + infoVehiculo.categoria + "</td>"
        + "<td>"
        + "<button type='button' id=" + pos + " onclick='eliminar(this.id)' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-trash'></i> </button>"
        + "<button type='button' onclick='mostrarModal(" + pos + ")' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-edit'></i> </button>"
        + "</td></tr>";
    $("#tablaVehiculos").append(fila);
}


function agregarVehiculo() {
	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/altaVehiculo.php',
		method: 'POST',
		data: {
			matricula: $('#txtMatricula').val(),
			modelo: $('#txtModelo').val(),
			motor: $('#txtMotor').val(),
			combustible: $('#txtCombustible').val(),
			medida: $('#txtMedida').val(),
			situacion: $('#txtSituacion').val(),
			kilometraje: $('#txtKilometraje').val(),
			categoria: $('#txtCategoria').val()
		},
		success: function (respuesta) {
			console.log(respuesta);

			traerUsuarios().then(dato => {
				// Clear the table first
				$("#tablaVehiculos").find("tr:gt(0)").remove();
				datosVehiculos = dato;
				for (var i = 0; i < dato.length; i++) {
					fila(dato[i], i);
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
	if (confirm('¿Está seguro de que desea eliminar este Vehiculo?')) {
	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/bajaVehiculo.php',
		method: 'POST',
		data: {
			dato: datosVehiculos[pos].matricula
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
		url: '../../../../BackEnd/Gestion de Usuarios/modificarVehiculo.php',
		method: 'POST',
		data: {
			matricula: datosVehiculos[pos].matricula,
			dato: $('#txtDato').val(),
			nuevo: $('#txtNuevo').val(),
		},
		success: function (respuesta) {
			console.log(respuesta);
		},
		error: function (respuesta) {
			console.log(respuesta);
		},
	});

	$casos = $('#txtDato').val();
	
	if ($casos == 'modelo') {
		$("#txtModelo" + pos).text($('#txtNuevo').val());
	}
	if ($casos == 'motor') {
		$("#txtMotor" + pos).text($('#txtNuevo').val());
	}
	if ($casos == 'combustible') {
		$("#txtCombustible" + pos).text($('#txtNuevo').val());
	}
	if ($casos == 'medida') {
		$("#txtMedida" + pos).text($('#txtNuevo').val());
	}
	if ($casos == 'situacion') {
		$("#txtSituacion" + pos).text($('#txtNuevo').val());
	}
	if ($casos == 'kilometraje') {
		$("#txtKilometraje" + pos).text($('#txtNuevo').val());
	}
	if ($casos == 'categoria') {
		$("#txtCategoria" + pos).text($('#txtNuevo').val());
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

function agregarInstructor() {
    $.ajax({
        url: '../../../../BackEnd/Gestion de Usuarios/altaVehiculo.php',
        method: 'POST',
        data: {
			matricula: $('#txtMatricula').val(),
			modelo: $('#txtModelo').val(),
			motor: $('#txtMotor').val(),
			combustible: $('#txtCombustible').val(),
			medida: $('#txtMedida').val(),
			situacion: $('#txtSituacion').val(),
			kilometraje: $('#txtKilometraje').val(),
			categoria: $('#txtCategoria').val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            // Update the datosVehiculos array and add a new row to the table
            traerUsuarios().then(dato => {
                // Clear the table first
                $("#tablaVehiculos").find("tr:gt(0)").remove();
                datosVehiculos = dato;
                for (var i = 0; i < dato.length; i++) {
                    fila(dato[i], i);
                }
            });
            cerrarModalAgregar();
        },
        error: function (respuesta) {
            console.log(respuesta);
        },
    });
}

// Función para mostrar/ocultar el campo de texto en el modal de modificar
function mostrarCampoTexto() {
    var datoCambiado = document.getElementById("txtDato").value;
    var campoTextoContainer = document.getElementById("campoTextoContainer");

    if (datoCambiado === "kilometraje") {
        campoTextoContainer.style.display = "none";
    } else {
        campoTextoContainer.style.display = "block";
    }
}

function mostrarCampoNumero(){
	var datoCambiado = document.getElementById("txtDato").value;
	var numeroContainer = document.getElementById("campoNumeroContainer");

	if (datoCambiado === "kilometraje") {
		numeroContainer.style.display = "block";
	} else {
		numeroContainer.style.display = "none";
	}
}

// Event listener para el campo txtDato
document.getElementById("txtDato").addEventListener("change", function() {
    mostrarCampoTexto();
	mostrarCampoNumero();
});
