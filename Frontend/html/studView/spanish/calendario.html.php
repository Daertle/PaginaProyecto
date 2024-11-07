<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documento</title>

  <style>
    .modal {
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 30%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .hidden{
        display: none;
    }
  </style>
</head>
<body>
  <h3>Título de la página</h3>
  <div id='calendar'></div>

  <!-- Modal -->
  <div id="eventModal" class="modal hidden">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Detalles del Evento</h2>
      <form id="eventForm">
        <input type="date" id="eventDate" required class="hidden">
        <label for="eventTime">Hora:</label>
        <input type="time" id="eventTime" required>
        <br>
        <button type="submit" onclick="modificarCurso()">Guardar Evento</button>
      </form>
    </div>
  </div>

  <script src="../../ownerView/spanish/dist/index.global.min.js"></script>
  <script src="../../ownerView/spanish/core/locales/es.global.min.js"></script>
  <script src="../../../js/calendar.js"></script>

</body>
</html>