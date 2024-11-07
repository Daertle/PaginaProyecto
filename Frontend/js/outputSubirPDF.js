$(document).ready(function(){
    $('#formSubida').on('submit', function(e){
        e.preventDefault();  // evita que se recargue la página
        var formData = new FormData(this);

        $.ajax({
            url: '../../../../BackEnd/subirPDF.php',  // ruta del archivo PHP que procesa la subida
            type: 'POST', 
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                $('#resultado').html(response);  // muestra el resultado en la seccion de resultados
                $('#formSubida')[0].reset();  // limpia el formulario       
            },
            error: function(){
                alert('Error al subir el archivo.');
            }
        });
    });
});


