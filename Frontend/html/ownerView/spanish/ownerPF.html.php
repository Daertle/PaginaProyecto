<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

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
<style>
    /* Variables globales */
    :root {
        --primary-color: #1a1a1a;
        --secondary-color: #2c2c2c;
        --accent-color: #007bff;
        --text-light: #ffffff;
        --text-dark: #333333;
    }

    /* Estilos base */
    body {
        background-color: #f8f9fa;
        padding-top: 76px;
    }

    /* Navbar */
    .navbar {
        background-color: var(--primary-color);
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    }

    .navbar-brand img {
        transition: transform 0.3s ease;
    }

    .navbar-brand img:hover {
        transform: scale(1.05);
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        left: 0;
        top: relative;
        bottom: 0;
        width: 250px;
        background-color: var(--primary-color);
        padding: 20px 0;
        transition: all 0.3s ease;
        z-index: 1000;
        overflow-y: auto;
    }

    .sidebar a {
        padding: 15px 25px;
        color: var(--text-light);
        text-decoration: none;
        display: block;
        transition: all 0.3s ease;
    }

    .sidebar a:hover {
        background-color: var(--accent-color);
        padding-left: 30px;
    }

    .sidebar .active {
        background-color: var(--accent-color);
        border-left: 4px solid white;
    }

    /* Dropdown en sidebar */
    .dropdown-sidebar {
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        padding: 15px 25px;
        color: var(--text-light);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dropdown-sidebar:hover {
        background-color: var(--accent-color);
    }

    .dropdown-container {
        display: none;
        background-color: var(--secondary-color);
        padding-left: 15px;
    }

    /* Contenido principal */
    .adminCont {
        margin-left: 250px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    /* Cards y tablas */
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, .1);
        margin-bottom: 20px;
    }

    .card-header {
        background-color: white;
        border-bottom: 1px solid #eee;
        padding: 20px;
    }

    .table {
        margin-bottom: 0;
    }

    .table th {
        text-align: left;
        padding: 12px 8px;
        border-top: none;
        background-color: #f8f9fa;
        font-weight: 100;
    }

    /* Botones */
    .btn-primary {
        background-color: var(--accent-color);
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, .1);
    }

    /* Footer */
    .site-footer {
        background-color: var(--primary-color);
        color: var(--text-light);
        padding: 40px 0;
        margin-top: 40px;
        margin-left: 250px;
    }

    .footer-content ul {
        list-style: none;
        padding: 0;
    }

    .footer-content li {
        display: inline-block;
        margin: 0 10px;
    }

    .footer-content a {
        color: var(--text-light);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-content a:hover {
        color: var(--accent-color);
    }

    /* Modls */
    .modal-content {
        border-radius: 10px;
    }

    .modal-header {
        border-bottom: 1px solid #eee;
    }

    .input-group-text {
        background-color: var(--primary-color);
        color: var(--text-light);
        border: none;
    }


    @media (max-width: 768px) {
        .sidebar {
            width: 0;
            padding: 0;
        }

        .adminCont,
        .site-footer {
            margin-left: 0;
        }

        .sidebar.active {
            width: 250px;
            padding: 20px 0;
        }
    }


    .dataTables_wrapper .dataTables_filter input {
        margin-left: 0.5em;
        padding: 0.5em;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .dataTables_wrapper .dataTables_length select {
        padding: 0.5em;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .dt-buttons {
        margin-bottom: 1em;
    }

    .dt-button {
        padding: 0.5em 1em;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #fff;
        margin-right: 0.5em;
    }

    td {
        text-align: left;
        padding: 12px 8px;
    }


    .ul1 {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .li1 {
        display: inline-block;
        margin: 0 10px;
    }

    .a1 {
        color: var(--text-light);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .a1:hover {
        color: var(--accent-color);
    }

    .close {
        display: inline-block;
        position: relative;
        width: 32px;
        height: 32px;
        background-color: #6c757d;
        color: white;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        line-height: 32px;
        border-radius: 50%;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .close:hover {
        background-color: #495057;
        transform: scale(1.1);
    }

    .close:active {
        transform: scale(0.9);
    }

    .close span {
        display: inline-block;
        transform: translateY(-1px);
    }
</style>

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
        <a class="active" href="ownerPF.html.php"> Preguntas Test </a>
        <a href="ownerCalendario.html.php"> Registro de Clases </a>
        
    </div>


    <div class="adminCont">

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h2 class="card-title text-uppercase mb-0"> preguntas del autotest </h2>
                                    <button type="button" class="btn btn-primary" onclick="mostrarModalAgregar()">
                                        <i class="fas fa-plus"></i> Añadir pregunta
                                    </button>
                                </div>

                                <!-- MODAL DE AÑADIR USUARIO -->
                                <div id="addModal" class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Añadir nueva pregunta</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModalAgregar()">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> Pregunta </span>
                                                    </div>
                                                    <input type="text" id="txtPregunta" class="form-control" placeholder="Nueva Pregunta">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> Respuesta </span>
                                                    </div>
                                                    <input type="text" id="txtRespuesta" class="form-control" placeholder="Respuesta Correcta">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> Opcion 1 </span>
                                                    </div>
                                                    <input type="text" id="txtOpcion1" class="form-control" placeholder="Opcion 1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> Opcion 2 </span>
                                                    </div>
                                                    <input type="text" id="txtOpcion2" class="form-control" placeholder="Opcion 2">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> Opcion 3 </span>
                                                    </div>
                                                    <input type="text" id="txtOpcion3" class="form-control" placeholder="Opcion 3">
                                                </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModalAgregar()">Cerrar</button>
                                                    <button type="button" class="btn btn-primary" onclick="agregarPregunta()">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table id="tablaPreguntas" class="table no-wrap user-table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 text-uppercase font-medium"> Id </th>
                                                <th scope="col" class="border-0 text-uppercase font-medium"> Pregunta </th>
                                                <th scope="col" class="border-0 text-uppercase font-medium"> Respuesta </th>
                                                <th scope="col" class="border-0 text-uppercase font-medium"> Opciones </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL DE MODIFCACIONES -->
                <div id="modifModal" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modificar usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModal()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <input type="hidden" id="txtID">
                                    
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nueva Pregunta</span>
                                    </div>
                                    <input type="text" id="txtNuevo" class="form-control" placeholder="nueva pregunta" aria-describedby="basic-addon1">
                                </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModal()">Cerrar</button>
                                <div id="btnGuardarCont"></div>
                                <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


    </div>

    <div class="row">

</body>

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



    var dropdown = document.getElementsByClassName("dropdown-sidebar");
    for (var i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", dropdownSidebar);
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../../../js/manejoPreguntas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>


</html>