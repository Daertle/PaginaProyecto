$(document).ready(function () {
    cargarFotoPerfil();

    $('#formSubidaFotoPerfil').on('submit', function (e) {
        e.preventDefault();  // evita que se recargue la página
        var formData = new FormData(this);

        $.ajax({
            url: '../../../../BackEnd/subirFotoPerfil.php',  // ruta del archivo PHP que procesa la subida
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                try {
                    const data = JSON.parse(response);
                    $('#resultado').html(data.html);  
                    $('#formSubidaFotoPerfil')[0].reset();
                    if(data.foto) {
                        $('#fotoPerfil').attr('src', '../../../../BackEnd/' + data.foto + '?t=' + new Date().getTime());
                    }
                } catch(e) {
                    $('#resultado').html(response);
                    $('#formSubidaFotoPerfil')[0].reset();
                }
            }
        });
    });
});
    


function cargarFotoPerfil() {
    $.ajax({
        url: '../../../../BackEnd/subirFotoPerfil.php',
        method: 'GET',
        success: function (response) {
            if (response) {
                var timestamp = new Date().getTime();
                // Simplificamos la ruta de la imagen
                $('#fotoPerfil').attr('href', '../../../../BackEnd/' + response);
            }
        },
        error: function (error) {
            console.error('Error al cargar la foto de perfil:', error);
        }
    });
}