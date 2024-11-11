<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../css/contacto.css" />
  <title>Forgot Password</title>

  <style>
    body {
      background-color: #000000;
      background-image: url('../../../img/cont.jpg') !important;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      color: white;
    }

    .container4 {
      background-color: rgba(33, 33, 33, 0.9);
      border-radius: 10px;
      padding: 30px;
      max-width: 400px;
      width: 90%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: white;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 25px;
      color: white;
      padding: 12px 20px;
      margin-bottom: 20px;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.2);
      box-shadow: none;
      color: white;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      border-radius: 25px;
      padding: 12px 0;
      width: 100%;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 10;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    label {
      color: #999;
      margin-bottom: 8px;
    }

    ::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }
  </style>
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
            <a href="guestChoferes.html.php" class="nav-link">Choferes</a>
          </li>
          <li class="nav-item">
            <a href="guestTests.html.php" class="nav-link">Tests</a>
          </li>
          <li class="nav-item">
            <a href="guestRequisitos.html.php" class="nav-link">Requisitos</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="bi bi-globe"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.html.php">Español</a></li>
              <li><a class="dropdown-item" href="guestLandingEnglish.html.php">Inglés</a></li>
              <li><a class="dropdown-item" href="guestLandingArabic.html.php">Árabe</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="bi bi-person-circle"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login.html.php">Log In</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container4">
    <h2> ¿Olvidaste Tu Contraseña? </h2>
    <form id="formSubida" method="post">
      <div class="form-group">
        <label for="email">Direccion de Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Enviar Email</button>
    </form>
  </div>

  <div id="resultado" class="resultado"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../../../js/outputForgotMail.js"></script>
</body>

</html>