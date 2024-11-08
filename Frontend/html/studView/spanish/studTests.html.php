<?php
require_once "../../../../BackEnd/Gestion de Usuarios/Controlador.php";

$controlador = new Controlador();
$preguntas = $controlador->obtenerPreguntas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Conducción - Luxury Driving</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/autotest.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body class="body2">
  <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
    <div class="container">
      <a href="studIndex.html.php">
        <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
        aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar5">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="studNosotros.html.php" class="nav-link">Nosotros</a>
          </li>
          <li class="nav-item">
            <a href="studFlota.html.php" class="nav-link">Flota</a>
          </li>
          <li class="nav-item">
            <a href="studClases.html.php" class="nav-link">Clases</a>
          </li>
          <li class="nav-item">
            <a href="studContacto.html.php" class="nav-link">Contacto</a>
          </li>
          <li class="nav-item">
            <a href="studChoferes.html.php" class="nav-link">Choferes</a>
          </li>
          <li class="nav-item">
            <a href="studTests.html.php" class="nav-link">Tests</a>
          </li>
          <li class="nav-item">
            <a href="studRequisitos.html.php" class="nav-link">Requisitos</a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-globe"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../spanish/studIndex.html.php">Español</a></li>
              <li><a class="dropdown-item" href="../english/studIndex">Inglés</a></li>
              <li><a class="dropdown-item" href="../arabe/studIndex">Árabe</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../../../../BackEnd/Gestion de Usuarios/logOut.php">Log Out</a></li>
              <li><a class="dropdown-item" href="../../studView/spanish/studPerfil.html.php">Perfil</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="test-container">
      <h1>Test de Conducción Teórico</h1>
      <p class="instrucciones">
          ¿Estás listo para poner a prueba tus conocimientos? En esta sección encontrarás una autoevaluación diseñada para ayudarte a prepararte de la mejor manera para el examen teórico de manejo. Esta prueba de teoría te permitirá identificar tus áreas de fortaleza y las áreas en las que necesitas reforzar tus conocimientos.
      </p>
      
      <form id="testForm">
      <?php
      if (count($preguntas) > 0) {
          foreach ($preguntas as $pregunta) {
              echo "<div class='pregunta'>";
              echo "<p>" . htmlspecialchars($pregunta['pregunta']) . "</p>";
              echo "<input type='hidden' name='respuesta_correcta_" . $pregunta['id_pregunta'] . "' value='" . htmlspecialchars($pregunta['respuesta_correcta']) . "'>";

              foreach ($pregunta['opciones'] as $opcion) {
                  $input_id = 'pregunta_' . $pregunta['id_pregunta'] . '_opcion_' . $opcion['id_opcion'];
                  echo '<div class="custom-radio-group">';
                  echo '<input type="radio" id="' . $input_id . '" name="pregunta_' . $pregunta['id_pregunta'] . '" value="' . htmlspecialchars($opcion['opcion_texto']) . '">';
                  echo '<label for="' . $input_id . '">' . htmlspecialchars($opcion['opcion_texto']) . '</label>';
                  echo '</div>';
              }
              echo "</div>";
          }
      }
      ?>
      <button type="button" class="btn-submit" onclick="evaluarRespuestas()">Enviar Respuestas</button>
      </form>
      <h2 id="puntuacion"></h2>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../js/manejoAutoTest.js"></script>
  <script> 

  </script>
</body>
</html>