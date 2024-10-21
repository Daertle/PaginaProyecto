<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury Driving</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../../../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body class="body2">
  
<div style="min-height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
      <div class="container">
        <a href="../../../../index.html.php">
          <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
          aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar5">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="guestNosotros.html.php" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="guestFlota.html.php" class="nav-link">Flota</a>
            </li>
            <li class="nav-item">
              <a href="guestClases.html.php" class="nav-link">Clases</a>
            </li>
            <li class="nav-item">
              <a href="guestContacto.html.php" class="nav-link">Contacto</a>
            </li>
            <li class="nav-item">
              <a href="guestChoferes.html.php" class="nav-link active">Choferes</a>
            </li>
            <li class="nav-item">
              <a href="guestTests.html.php" class="nav-link">Tests</a>
            </li>
            <li class="nav-item">
              <a href="guestRequisitos.html.php" class="nav-link">Requisitos</a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-globe"></i>
              </a>
              
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="guestLandingSpanish.html.php">Español</a></li>
                <li><a class="dropdown-item" href="../english/guestLandingEnglish.html.php">Inglés</a></li>
                <li><a class="dropdown-item" href="../english/guestLandingArabic.html.php">Árabe</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a href="login.html.php" class="nav-link dropdown-toggle"><i
                  class="bi bi-person-circle"></i></a>
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
              <button class="btn-disponibilidad">VER DISPONIBILIDAD</button>

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
              <button class="btn-disponibilidad">VER DISPONIBILIDAD</button>
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
              <button class="btn-disponibilidad">VER DISPONIBILIDAD</button>
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
              <button class="btn-disponibilidad">VER DISPONIBILIDAD</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="availabilityModal" class="modal">
      <div class="modal-content">
        <h2 id="modalTitle">DISPONIBILIDAD DE <span id="driverName"></span></h2>
        <table class="availability-table">
          <tr>
            <th>DÍA</th>
            <th>HORARIO</th>
          </tr>
          <tr>
            <td>LUNES</td>
            <td>08:00-14:25, 15:45-19:30</td>
          </tr>
          <tr>
            <td>MARTES</td>
            <td>08:00-13:25, 14:45-19:30</td>
          </tr>
          <tr>
            <td>MIÉRCOLES</td>
            <td>08:00-11:25, 13:00-18:30</td>
          </tr>
          <tr>
            <td>JUEVES</td>
            <td>08:00-14:25, 15:45-20:30</td>
          </tr>
          <tr>
            <td>VIERNES</td>
            <td>09:00-13:30, 15:30-21:00</td>
          </tr>
        </table>
        <div class="modal-footer">
          <button id="closeModal">VOLVER</button>
          <button id="viewAgenda">VER AGENDA</button>
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
  <script>
    // JavaScript para manejar el modal
    var modal = document.getElementById("availabilityModal");
    var btns = document.getElementsByClassName("btn-disponibilidad");
    var closeBtn = document.getElementById("closeModal");
    var driverNameSpan = document.getElementById("driverName");

    // Abrir el modal
    for (var i = 0; i < btns.length; i++) {
      btns[i].onclick = function () {
        modal.style.display = "block";
        var driverName = this.parentElement.getElementsByClassName("chofer-name")[0].textContent;
        driverNameSpan.textContent = driverName;
        document.body.style.overflow = 'hidden'; // Previene el scroll del body
      }
    }


    closeBtn.onclick = function () {
      modal.style.display = "none";
      document.body.style.overflow = 'auto'; // Restaura el scroll del body
    }

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
        document.body.style.overflow = 'auto'; // Restaura el scroll del body
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>