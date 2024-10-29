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
            <a class="active" href="ownerAlumnos.html.php"> Alumnos </a>
            <a href="ownerInstructores.html.php"> Instructores </a>
            <a href="ownerAdministradores.html.php"> Administradores </a>
        </div>

        <a href="ownerCursos.html.php"> Clases </a>
        <a href="ownerVehiculos.html.php"> Vehiculos </a>
        <a href="ownerPF.html.php"> Preguntas Frecuentes </a>

    </div>
    
    <div class="adminCont">

        <h1> Owner Alumnos </h1>

        
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-uppercase mb-0">Usuarios</h2>
                            </div>
                            <div class="table-responsive">
                                <table id="tablaPersonas" class="table no-wrap user-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Documento</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Username</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Nombre</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Apellido</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Fecha Nacimiento</th>                                            
                                            <th scope="col" class="border-0 text-uppercase font-medium">Telefono</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Correo</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Fecha Inscripcion</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Estado Teorico</th>
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
                                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                                </div>
                                <input type="text" id="txtNombre" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Correo</span>
                                </div>
                                <input type="text" id="txtCorreo" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

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
<script type="text/javascript" src="../../../js/manejoAlumnos.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>


</html>