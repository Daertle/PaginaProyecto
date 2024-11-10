datosPDF = []; //Array global para guardar los datos de los PDFs
agregarPDF();

async function traerPDF() {
    const response = await fetch('../../../../BackEnd/Gestion de Usuarios/listarPDFs.php'
        , {
            method: 'GET',
        });
    // waits until the request completes...
    const res = await response.json();
    return res;
}

traerPDF().then(dato => {
    for (var i = 0; i < dato.length; i++) {
        filaNueva(dato[i], i);
    }

    datosPDF = dato;

});

function filaNueva(infoPDF, pos) {

    var fila = "<tr id=" + pos + ">"
        + "<td>" + "<a href='../../../../Backend/" + infoPDF.rutaArchivo +"' target='BLANK'>" + infoPDF.rutaArchivo + "</a>" + "</td>"
        + "<td>"
        + "<button type='button' id=" + pos + " onclick='eliminar(this.id)' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-trash'></i> </button>"
        + "</td></tr>";
    $("#tablaPDF").append(fila);
}


function agregarPDF() {
    $(document).ready(function () {
        $('#formSubida').on('submit', function (e) {
            e.preventDefault();  // evita que se recargue la página
            var formData = new FormData(this);

            $.ajax({
                url: '../../../../BackEnd/subirPDF.php',  // ruta del archivo PHP que procesa la subida
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#resultado').html(response);  // muestra el resultado en la seccion de resultados
                    $('#formSubida')[0].reset();  // limpia el formulario
                    traerPreguntas().then(dato => {
                        // Clear the table first
                        $("#tablaPdf").find("tr:gt(0)").remove();
                        datosPDF = dato;
                        for (var i = 0; i < dato.length; i++) {
                            filaNueva(dato[i], i);
                        }
                    });
                },
                error: function () {
                    alert('Error al subir el archivo.');
                }
            });
        });
    });
}

function eliminar(pos) {
    if (confirm('¿Está seguro de que desea eliminar este pdf?')) {
        $.ajax({
            url: '../../../../BackEnd/Gestion de Usuarios/bajaPDF.php',
            method: 'POST',
            data: {
                dato: datosPDF[pos].id
            },
            success: function (respuesta) {
                console.log(respuesta);

                traerPDF().then(dato => {
                    // Clear the table first
                    $("#tablaPDF").find("tr:gt(0)").remove();
                    datosPDF = dato;
                    for (var i = 0; i < dato.length; i++) {
                        filaNueva(dato[i], i);
                    }
                });

            },
            error: function (respuesta) {
                console.log(respuesta);

            },
        });
    }
}



