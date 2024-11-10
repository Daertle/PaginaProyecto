<?php
session_start();
require_once 'Gestion de Usuarios/Controlador.php';
$controla = new Controlador();
$tamanio = 10000;

// Si es una petición GET, solo devolvemos la ruta de la foto
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $usuario = $_SESSION['usuario'];
    $fotoUsuario = $controla->seleccionarPerfilPhoto($usuario)[0];
    echo $fotoUsuario;
    exit;
}

// Para peticiones POST (subida de archivos)
$usuario = $_SESSION['usuario'];
$rutaFotos = "fotosPerfil/";
$rutaDestino = $rutaFotos . $usuario . ".png";

// Verificar si se subió un archivo
if (!isset($_FILES['foto']) || $_FILES['foto']['error'] === UPLOAD_ERR_NO_FILE) {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        No se ha seleccionado ningún archivo.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    exit;
}

$check = getimagesize($_FILES['foto']['tmp_name']);

if ($_FILES['foto']['type'] == 'image/png' || $_FILES['foto']['type'] == 'image/jpeg') {
    if ($_FILES['foto']['size'] < ($tamanio * 1024)) {
        if ($check !== false) {
            // En la parte del éxito, donde está el move_uploaded_file:
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino)) {
                $controla->modificarProfilePhoto($usuario, $rutaDestino);
                $response = [
                    'html' => '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            El documento se ha guardado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ',
                    'foto' => $rutaDestino
                ];
                echo json_encode($response);
            } else {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error al mover el archivo subido.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }
        } else {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Error al subir el documento. No es una imagen.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
    } else {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error al subir el documento. Peso superior al permitido.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
} else {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Solo se admiten documentos PNG o JPG.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
}