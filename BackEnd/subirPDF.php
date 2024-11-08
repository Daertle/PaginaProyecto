<?php

$tamanio = 1000;

if (isset($_FILES['documento']) && $_FILES['documento']['type'] == 'application/pdf') {

    // verificar si el archivo ya existe
    $rutaDestino = "pdfDocumentos/" . $_FILES['documento']['name'];
    if (file_exists($rutaDestino)) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            El documento ya existe.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } else {
        if ($_FILES['documento']['size'] < ($tamanio * 1024)) {
            move_uploaded_file($_FILES['documento']['tmp_name'], $rutaDestino);
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                El documento se ha guardado correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        } else {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Error al subir el documento. Peso superior al permitido.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
    }

} else if (isset($_FILES['documento']) && $_FILES['documento']['type'] != 'application/pdf') {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Solo se admiten documentos PDF.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
} else if (isset($_FILES['documento']) && $_FILES['documento']['size'] == 0) {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        No se ha seleccionado ningún documento.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
} else {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Error al subir el documento.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
}
