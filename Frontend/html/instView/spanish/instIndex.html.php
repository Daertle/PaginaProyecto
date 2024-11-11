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

  <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../../../img/home-2.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="text-center mb-3">
            <span class="text-primary2">Academia</span>
            <span class="text-primary1">de</span>
            <span class="text-primary2">Choferes</span> <br>
            <span class="luxury-driving">Luxury driving</span>
          </div>
          <a href="instContacto.html.php" class="btn btn-info">Más Información</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../../../img/home-2.jpeg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="text-center mb-3">
            <span class="text-primary2">Academia</span>
            <span class="text-primary1">de</span>
            <span class="text-primary2">Choferes</span>
            <span class="luxury-driving">Luxury driving</span>
          </div>
          <a href="instContacto.html" class="btn btn-info">Más Información</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../../../img/home-3.jpeg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="text-center mb-3">
            <span class="text-primary2">Academia</span>
            <span class="text-primary1">de</span>
            <span class="text-primary2">Choferes</span>
            <span class="luxury-driving">Luxury driving</span>
          </div>
          <a href="instContacto.html" class="btn btn-info">Más Información</a>
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
          <a href="instIndex.html.php" class="footer-logo">
            <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
          </a>
          <a href="instContacto.html.php" class="footer-link">Contactanos</a>
        </div>
      </div>z
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="../../js/script.js"></script>
</body>
</html>

