<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos2.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury Driving</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../../../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="body2">
  <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
    <div class="container">
      <a href="instIndex.html.php">
        <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
        aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar5">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="instNosotros.html.php" class="nav-link">Nosotros</a>
          </li>
          <li class="nav-item">
            <a href="instFlota.html.php" class="nav-link">Flota</a>
          </li>
          <li class="nav-item">
            <a href="instClases.html.php" class="nav-link">Clases</a>
          </li>
          <li class="nav-item">
            <a href="instContacto.html.php" class="nav-link">Contacto</a>
          </li>
          <li class="nav-item">
            <a href="instChoferes.html.php" class="nav-link">Choferes</a>
          </li>
          <li class="nav-item">
            <a href="instTests.html.php" class="nav-link">Tests</a>
          </li>
          <li class="nav-item">
            <a href="instRequisitos.html.php" class="nav-link">Requisitos</a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-globe"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../spanish/instIndex.html.php">Español</a></li>
              <li><a class="dropdown-item" href="../english/instIndex">Inglés</a></li>
              <li><a class="dropdown-item" href="../arabe/instIndex">Árabe</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../../../../BackEnd/Gestion de Usuarios/logOut.php">Log Out</a></li>
              <li><a class="dropdown-item" href="../../instView/spanish/instPerfil.html.php">Perfil</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container choferes-container">
      <h1 class="arreglo">.</h1>
      <h1 class="text-white mb-4">NUESTROS CHOFERES</h1>
      <div class="row">
        <div class="col-md-3">
          <div class="chofer-card">
            <img src="../../../img/lewis-hamilton.jpg" alt="Lewis Hamilton" class="chofer-img">
            <div class="chofer-info">
              <h2 class="chofer-name">LEWIS <span class="chofer-name1">HAMILTON</span></h2>
              <p class="chofer-details">Edad: 39 años</p>
              <p class="chofer-details">Experiencia: Con más de tres décadas en las pistas, Lewis ha dejado una marca
                indeleble en la historia del automovilismo.</p>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="chofer-card">
            <img src="../../../img/chofer1.jpg" alt="Max Verstappen" class="chofer-img">
            <div class="chofer-info">
              <h2 class="chofer-name">MAX <span class="chofer-name1">VERSTAPPEN</span></h2>
              <p class="chofer-details">Edad: 24 años</p>
              <p class="chofer-details">Experiencia: Max ha trabajado para Luxury Driving desde 2021 y es uno de
                nuestros instructores más destacados.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="chofer-card">
            <img src="../../../img/chofer2.jpg" alt="Charles Leclerc" class="chofer-img">
            <div class="chofer-info">
              <h2 class="chofer-name">CHARLES <span class="chofer-name1">LECLERC</span></h2>
              <p class="chofer-details">Edad: 26 años</p>
              <p class="chofer-details">Experiencia: Charles trabaja para Luxury Driving desde 2019 y es especialista en
                conducción de precisión.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="chofer-card">
            <img src="../../../img/chofer3.jpg" alt="Logan Sargeant" class="chofer-img">
            <div class="chofer-info">
              <h2 class="chofer-name">LOGAN <span class="chofer-name1">SARGEANT</span></h2>
              <p class="chofer-details">Edad: 23 años</p>
              <p class="chofer-details">Experiencia: Logan trabaja para Luxury Driving desde 2022 y es nuestro
                especialista en técnicas de conducción defensiva.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  <footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <ul class="ul1">
          <li class="li1"><a class="a1" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
        </ul>

        <div class="footer-abajo">
          <a href="#" class="footer-link">Servicios</a>
          <a href="guestLandingSpanish.html" class="footer-logo">
            <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
          </a>
          <a href="#" class="footer-link">Contactanos</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>