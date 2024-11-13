<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login parte css</title>
  <link rel="stylesheet" href="../../../css/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="../../../css/style.css">

</head>

<body class="body1">
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
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                  class="bi bi-person-circle"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="uno">

      <form action="../../../../BackEnd/Gestion de Usuarios/LogIn.php" method="post">
        <h1>Iniciar Sesion</h1>

        <?php
        session_start();
        if (isset($_SESSION['error_message'])) {
          echo "<div class='alert alert-danger'>" . $_SESSION['error_message'] . "</div>";
          unset($_SESSION['error_message']);
        }
        ?>

        <div class="input-box">
          <input type="text" name="txtUsername" id="txtUsername" placeholder="Usuario" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password" name="txtPassword" id="txtPassword" placeholder="Contraseña" required>
          <i class='bx bxs-lock-alt'></i>
        </div>

        <div class="olvide">
          <label> <input type="checkbox" id="recordar">Recuerdame</label>

          <a href="olvidePassword.html.php">Olvidaste la cotraseña?</a>

        </div>

        <div class="g-recaptcha" data-sitekey="6LeyN3YqAAAAAHgxkSWvCG2FU4S_O0VyuVsoTEfe" style="display: flex;
    justify-content: center;
    margin: 20px 0; "></div>

        <button type="submit" class="btn">Entrar</button>


      </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>