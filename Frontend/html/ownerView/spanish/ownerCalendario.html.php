<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<style>

    #calendar{
        max-height: 700px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .modal {
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .hidden {
        display: none;
    }
</style>

  </head>

<body class="body2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">
            <a href="ownerIndex.html.php">
                <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
                aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar5">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="ownerNosotros.html.php" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="ownerFlota.html.php" class="nav-link">Flota</a>
                    </li>
                    <li class="nav-item">
                        <a href="ownerClases.html.php" class="nav-link">Clases</a>
                    </li>
                    <li class="nav-item">
                        <a href="ownerContacto.html.php" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="ownerChoferes.html.php" class="nav-link">Choferes</a>
                    </li>
                    <li class="nav-item">
                        <a href="ownerTests.html.php" class="nav-link">Tests</a>
                    </li>
                    <li class="nav-item">
                        <a href="ownerRequisitos.html.php" class="nav-link">Requisitos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-globe"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../spanish/ownerIndex.html.php">Español</a></li>
                            <li><a class="dropdown-item" href="../english/ownerIndex">Inglés</a></li>
                            <li><a class="dropdown-item" href="../arabe/ownerIndex">Árabe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../../../BackEnd/Gestion de Usuarios/logOut.php">Log Out</a></li>
                            <li><a class="dropdown-item" href="../../ownerView/spanish/ownerPerfil.html.php">Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="sidebar">
        <a href="ownerPerfil.html.php"> Inicio </a>
        <a href="ownerConfiguracion.html.php"> Configuracion </a>

        <button class="dropdown-sidebar" onclick="dropdownSidebar()">
            Usuarios <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container">
            <a href="ownerAlumnos.html.php"> Alumnos </a>
            <a href="ownerInstructores.html.php"> Instructores </a>
            <a href="ownerAdministradores.html.php"> Administradores </a>
        </div>

        <a href="ownerCursos.html.php"> Clases </a>
        <a href="ownerVehiculos.html.php"> Vehiculos </a>
        <a href="ownerPF.html.php"> Preguntas Test </a>
        <a class="active" href="ownerCalendario.html.php"> Registro de Clases </a>

    </div>


  <div class="adminCont">

    <h3>Título de la página</h3>
    <div id='calendar'></div>

    <!-- Modal -->
    <div id="eventModal" class="modal hidden">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Detalles del Evento</h2>
            <form id="eventForm">
                <input type="date" id="eventDate" required class="hidden">
                <label for="eventTime">Hora:</label>
                <input type="time" id="eventTime" required>
                <br>
                <button type="submit" onclick="modificarCurso()">Guardar Evento</button>
            </form>
        </div>
    </div>

</div>

<script>
    var dropdown = document.getElementsByClassName("dropdown-sidebar");
    var i;

    function dropdownSidebar() {
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    }

    for (var i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", dropdownSidebar);
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="dist/index.global.min.js"></script>
<script src="core/locales/es-us.global.min.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">    </script>
    