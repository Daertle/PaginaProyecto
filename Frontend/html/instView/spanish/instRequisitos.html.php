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
            <a href="instRequisitos.html.php" class="nav-link active">Requisitos</a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-globe"></i></a>
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
        <h1 class="text-white mb-4">Requisitos para Tomar Clases</h1>
        <div class="row">
            <!-- DOCUMENTACIÓN -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                    <table>
                        <tr>
                            <td><img src="../../../img/documentacion.png" width="90" alt="Documentacion" class="me-3" ></td>
                            <td><h3 class="card-title"><center>DOCUMENTACIÓN</center></h3></td>
                        </tr>
                    </table>
                    <br> 
                    <h5 class="card-text">La cédula debe estar vigente y en buen estado, también debes presentar una fotocopia de la misma.</h5>
                    </div>
                </div>
            </div>
            <!-- EXAMEN MÉDICO -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                    <table>
                        <tr>
                            <td><img src="../../../img/examenmedico.png" width="90" alt="Examen medico" class="me-3" ></td>
                            <td><h3 class="card-title"><center>EXAMEN MEDICO</center></h3></td>
                        </tr>
                    </table> 
                    <br>
                    <h5 class="card-text">Examen médico expedido en algún centro médico autorizado por la IMM para libreta categoría (A) amateur. Imprescindible que en el certificado conste el sello de la institución y el CJP Médico.</h5>
                    </div>
                </div>
            </div>
            <!-- LABORATORIOS AUTORIZADOS -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                    <table>
                        <tr>
                            <td><img src="../../../img/laboratorios.png" width="90" alt="Laboratorios autorizados" class="me-3" ></td>
                            <td><h3 class="card-title"><center>LABORATORIOS AUTORIZADOS</center></h3></td>
                        </tr>
                    </table>
                    <br> 
                    <h5 class="card-text">Laboratorio Cepredi: Br. Artigas 1907 esq. Goes (Lunes a viernes de 07:30 a 16:00).<br> Clínica Preventiva: Gral. Flores 3131 esq. Br. Artigas (Lunes a viernes de 07:00 a 16:00, sábados de 07:45 a 11:45).</h5>
                    </div>
                </div>
            </div>
            <!-- MAYORÍA DE EDAD -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                    <table>
                        <tr>
                            <td><img src="../../../img/mayor.png" width="90" alt="Mayoria de edad" class="me-3" ></td>
                            <td><h3 class="card-title"><center>MAYORIA DE EDAD</center></h3></td>
                        </tr>
                    </table>
                    <br> 
                    <h5 class="card-text">La mayoría de edad al momento de inscribirse en el curso. Solo podemos iniciar el trámite ante la IMM si eres mayor de edad.</h5>
                    </div>
                </div>
            </div>
            <!-- COMPROBANTE DE PAGO -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                    <table>
                        <tr>
                            <td><img src="../../../img/comprobante.png" width="90" alt="Comprobante de pago" class="me-3" ></td>
                            <td><h3 class="card-title"><center>COMPROBANTE DE PAGO</center></h3></td>
                        </tr>
                    </table>
                    <br> 
                    <h5 class="card-text">Comprobante de pago de la libreta (A) amateur. Se puede realizar en la red de cajeros Abitab, Red Pagos, en línea o en la IMM.</h5>
                    </div>
                </div>
            </div>
            <!-- PAGO POR REDPAGOS O ABITAB -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                     <table>
                        <tr>
                            <td><img src="../../../img/pago.png" width="90" alt="Pago por redpagos o abitab" class="me-3" ></td>
                            <td><h3 class="card-title"><center>PAGO POR REDPAGOS O ABITAB</center></h3></td>
                        </tr>
                    </table>
                    <br> 
<h5 class="card-text">Imprescindible si se realiza el pago en Red Pagos o Abitab que conste en la constancia la impresión de pago.</h5>
                    </div>
                </div>
            </div>
        </div>
    </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="../../js/script.js"></script>

</body>

</body>

</html>