<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos3.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description"
    content="Academia de Choferes Luxurydriving: Formamos conductores competentes y responsables.">
  <meta name="keywords" content="Conducción, Seguridad Vial, Formación, Choferes, Uruguay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Driving</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="Frontend/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../../../css/style.css">

    <style>
        /* Media queries para responsividad */
        @media (max-width: 992px) {
    .contentNos {
        padding: 0 4%;
        gap: 30px;
    }

    .text-content {
        max-width: 55%;
    }

    .imgNos {
        max-width: 40%;
    }
}

@media (max-width: 768px) {
    .contentNos {
        flex-direction: column;
        padding: 0 5%;
    }

    .text-content {
        max-width: 100%;
        order: 1;
    }

    .imgNos {
        max-width: 100%;
        margin: 20px 0;
        order: 2;
        object-fit: cover;
    }

    .titulo {
        font-size: 2rem;
        margin: 100px 5% 40px 5%;
        text-align: center; /* Cambiado de 'left' a 'center' */
    }

    .Subtitulo {
        font-size: 1.8rem;
    }

    .info {
        font-size: 0.95rem;
    }
}

.imgNos {
    height: auto;
    object-fit: cover;
}

    </style>
</head>

<body class="body2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">
            <a href="adminIndex.html.php">
                <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
                aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar5">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="adminNosotros.html.php" class="nav-link active">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminFlota.html.php" class="nav-link">Flota</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminClases.html.php" class="nav-link">Clases</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminContacto.html.php" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminChoferes.html.php" class="nav-link">Choferes</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminTests.html.php" class="nav-link">Tests</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminRequisitos.html.php" class="nav-link">Requisitos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-globe"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../spanish/adminIndex.html.php">Español</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../../../BackEnd/Gestion de Usuarios/logOut.php">Log Out</a></li>
                            <li><a class="dropdown-item" href="../../adminView/spanish/adminPerfil.html.php">Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="titulo"> Academia de Choferes Luxurydriving</h1>

    <div class="contentNos">
      <div>
        <h2 class="Subtitulo">Visión</h2>
        <p class="info">Ser reconocidos como la empresa líder en clases de conducción en Uruguay, distinguiéndonos por
          nuestro compromiso con la excelencia, la innovación y la adaptación a las necesidades de nuestros alumnos.
          Aspiramos a ser un referente nacional en la enseñanza de conducción, estableciendo los más altos estándares en
          la formación de conductores y contribuyendo al desarrollo de una sociedad más segura en las vías.</p>

        <h2 class="Subtitulo">Propósito</h2>

        <p class="info">Nuestro propósito es empoderar a los uruguayos para que alcancen su máximo potencial como
          conductores, brindándoles las herramientas y conocimientos necesarios para dominar el arte de la conducción.
          Nos enfocamos en cultivar su confianza, habilidades técnicas y comprensión de las normas de tránsito, al mismo
          tiempo que fomentamos un profundo respeto por la seguridad vial y la responsabilidad al volante. Nuestro
          objetivo es formar conductores competentes y comprometidos con la prevención de accidentes, promoviendo así un
          entorno más seguro para todos los usuarios de las vías en Uruguay.</p>

        <h2 class="Subtitulo">Misión</h2>
        <p class="info">Nuestra misión es brindar una formación integral y de alta calidad en conducción a todos los
          uruguayos, fomentando una cultura de seguridad vial y respeto por las normas de tránsito. Nos esforzamos por
          formar conductores responsables, hábiles y seguros, capaces de enfrentar cualquier situación en las carreteras
          con confianza y profesionalismo.</p>

      </div>

      <img src="../../../img/nosotros.png" class="imgNos">
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script async src="../../../js/script.js"></script>
</body>

</html>