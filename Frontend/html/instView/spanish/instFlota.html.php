<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos2.php'; ?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Flota - Luxury Driving</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/flota.css">
    <style>
        .modal-contenido {
            background-color: #1a1a1a;
            color: white;
        }

        .modal-header {
            border-bottom: 1px solid #333;
        }

        .modal-footer {
            border-top: 1px solid #333;
        }

        .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
    </style>
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
            <a href="instFlota.html.php" class="nav-link active">Flota</a>
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

  <main class="container mt-5 pt-5">
        <h1 class="text-white mb-4">NUESTRA FLOTA</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal1">
                    <img src="../../../img/flota2.jpg" class="card-img-top" alt="Peugeot 208 Style 2023">
                    <div class="card-body">
                        <h5 class="card-title">PEUGEOT 208 STYLE 2023</h5>
                        <p class="card-text">(COCHE ESCUELA)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal2">
                    <img src="../../../img/flota1.jpg" class="card-img-top" alt="Camion Mercedes 2430">
                    <div class="card-body">
                        <h5 class="card-title">CAMION MERCEDES 2430</h5>
                        <p class="card-text">(COCHE ESCUELA)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal3">
                    <img src="../../../img/flota3.jpg" class="card-img-top" alt="Onix Turbors 2021">
                    <div class="card-body">
                        <h5 class="card-title">CHEVROLET ONIX TURBO RS 2021</h5>
                        <p class="card-text">(COCHE ESCUELA)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal4">
                    <img src="../../../img/flota4.jpg" class="card-img-top" alt="Mercedes AMG C63">
                    <div class="card-body">
                        <h5 class="card-title">MERCEDES AMG C63</h5>
                        <p class="card-text">(CLASES ESPECIALES)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal5">
                    <img src="../../../img/flota5.jpg" class="card-img-top" alt="RAM 1500 TRX 2021">
                    <div class="card-body">
                        <h5 class="card-title">RAM 1500 TRX 2021</h5>
                        <p class="card-text">(CLASES ESPECIALES)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal6">
                    <img src="../../../img/flota6.jpg" class="card-img-top" alt="Nissan Sentra 2023">
                    <div class="card-body">
                        <h5 class="card-title">NISSAN SENTRA 2023</h5>
                        <p class="card-text">(COCHE ADMIN)</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
                    <a href="index.html.php" class="footer-logo">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="../../../js/script.js"></script>
</body>

</html>