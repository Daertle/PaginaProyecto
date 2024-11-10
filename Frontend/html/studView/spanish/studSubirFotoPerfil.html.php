<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos1.php'; ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<img src="" id="fotoPerfil" class="img-thumbnail mb-3" alt="Foto de perfil">

    <div class="container mt-5">
        <h2>Subir Foto</h2>
        <form id="formSubidaFotoPerfil" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="foto" class="form-label">Selecciona un archivo PNG o JPG</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Foto</button>
        </form>


        <div id="resultado"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../../js/outputSubirFotoPerfil.js"></script>
</body>

</html>