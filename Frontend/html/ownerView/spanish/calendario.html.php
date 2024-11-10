<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <style>
        /* Prefijo custom- para evitar conflictos */
        .custom-modal {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .custom-modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        .custom-close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .custom-close:hover,
        .custom-close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .custom-hidden {
            display: none;
        }
    </style>
</head>

<body>
    <h3>Título de la página</h3>
    <div id='calendar'></div>

    <!-- Modal -->
    <div id="eventModal" class="custom-modal custom-hidden">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <h2>Detalles del Evento</h2>
            <form id="eventForm">
                <input type="date" id="fecha" required class="custom-hidden">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" required>
                <br>
                <button type="submit" onclick="">Guardar Evento</button>
            </form>
        </div>
    </div>

    <script src="dist/index.global.min.js"></script>
    <script src="core/locales/pt-br.global.min.js"></script>
    <script src="../../../js/calendar.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>