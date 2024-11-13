<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos1.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury Driving</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../../../css/contacto.css" />
</head>

<body class="body2">

  <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
    <div class="container">
      <a href="index.html.php">
        <img src="../../../img/logo.png" alt="Logo" width="120" height="40">
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
            <a href="studContacto.html.php" class="nav-link active">Contacto</a>
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
          <li class="nav-item">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="bi bi-globe"></i></a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="bi bi-person-circle"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../../../../BackEnd/Gestion de Usuarios/logOut.php">Log Out</a></li>
              <li><a class="dropdown-item" href="../../studView/spanish/studPerfil.html.php">Perfil</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container1">
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="box-info">
          <h1>Contáctanos</h1>
          <div class="dataC">
            <p><i class="fas fa-phone"></i> +598 94 970276</p>
            <p><i class="fas fa-envelope"></i> luxurydriving@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i> Gerardo Grasso 5834, USA</p>
          </div>
          <div class="links mt-4">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <form id="formContacto" class="contact-form" method="post">
          <div class="input-box mb-3">
            <input type="text" class="form-control" required placeholder="Nombre Completo" id="nombre" name="nombre">
          </div>
          <div class="input-box mb-3">
            <input type="email" class="form-control" required placeholder="Correo Electrónico" id="correo"
              name="correo">
          </div>
          <div class="input-box mb-3">
            <input type="text" class="form-control" required placeholder="Asunto" id="asunto" name="asunto">
          </div>
          <div class="input-box mb-3">
            <textarea class="form-control" rows="5" required placeholder="Tu mensaje" id="mensaje"
              name="mensaje"></textarea>
          </div>
          <button type="submit" class="btnEnviar">Enviar Mensaje</button>
        </form>
      </div>
    </div>
  </div>

  <br>

  <div id="resultado" class="resultado"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../../../js/outputContacto.js"></script>
</body>

</html>