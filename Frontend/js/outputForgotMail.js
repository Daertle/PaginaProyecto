$(document).ready(function() {
    $('#formSubida').on('submit', function(e) {
        e.preventDefault(); 
        var formData = new FormData(this);

        $.ajax({
            url: '../../../../BackEnd/forgotMail.php', 
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false, 
            success: function(response) {
                $('#resultado').html(response); 
                $('#formSubida')[0].reset();  
            },
            error: function(xhr, status, error) {
                alert('Error al procesar la solicitud.');
            }
        });
    });
});
