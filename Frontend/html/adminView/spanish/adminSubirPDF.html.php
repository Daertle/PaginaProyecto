<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>  <!-- Referencia al archivo JS -->
</head>
<body>

<div class="container mt-5">
    <h2>Subir Documento PDF</h2>
    <form id="formSubida" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="documento" class="form-label">Selecciona un archivo PDF</label>
            <input type="file" class="form-control" id="documento" name="documento" required>
        </div>
        <button type="submit" class="btn btn-primary">Subir Documento</button>
    </form>
    
    <div id="resultado" class="mt-4"></div>  <!-- Aquí aparecerá el resultado -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../../../js/outputSubirPDF.js"></script>
</body>
</html>
