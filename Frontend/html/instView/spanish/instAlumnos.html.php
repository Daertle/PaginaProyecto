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
    <link rel="stylesheet" href="../../../css/side.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../../css/tabla.css" />


</head>

<body class="body2">
    <nav id="sidebar">
        <ul>
            <li>
                <span class="logo"> Instructor</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>
            <link>
            <a href="instPerfil.html.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <span>Perfil</span>
            </a>
            </link>
            <li>
                <a href="instConfiguracion.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                        <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
                    </svg>
                    <span>Configuracion</span>
                </a>
            </li>
            <li class="active">
                <a href="instAlumnos.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                    </svg>
                    <span>Alumnos</span>
                </a>
            </li>

            <li>
                <a href="instCursos.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                    </svg>
                    <span>Clases</span>
                </a>
            </li>
            <li>
                <a href="instIndex.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                        <path fill-rule="evenodd" d="M.146 8  .354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                    </svg><span>Volver</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="adminCont">
        <div class="adminCont">

            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h2 class="card-title text-uppercase mb-0">ALUMNOS</h2>
                                    </div>




                                    <div id="addModal" class="modal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Agregar Nuevo Alumno</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModalAgregar()">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="txtNuevoDocumento">Documento</label>
                                                            <input type="text" class="form-control" id="txtNuevoDocumento" placeholder="Número de documento">
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="txtNuevoUsername">Username</label>
                                                            <input type="text" class="form-control" id="txtNuevoUsername" placeholder="Username">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="txtNuevoNombre">Nombre</label>
                                                            <input type="text" class="form-control" id="txtNuevoNombre" placeholder="Nombre">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="txtNuevoApellido">Apellido</label>
                                                            <input type="text" class="form-control" id="txtNuevoApellido" placeholder="Apellido">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="txtNuevaFechaNacimiento">Fecha Nacimiento</label>
                                                            <input type="date" class="form-control" id="txtNuevaFechaNacimiento">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="txtNuevoTelefono">Teléfono</label>
                                                            <input type="tel" class="form-control" id="txtNuevoTelefono" placeholder="Teléfono">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="txtNuevoCorreo">Correo</label>
                                                            <input type="email" class="form-control" id="txtNuevoCorreo" placeholder="Correo electrónico">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="txtNuevaPassword">Contraseña</label>
                                                            <input type="password" class="form-control" id="txtNuevaPassword" placeholder="Contraseña">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label>Categoría Libreta</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="txtNuevoA">
                                                                <label class="form-check-label" for="txtNuevoA">Categoría Libreta A</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="txtNuevoB">
                                                                <label class="form-check-label" for="txtNuevoB">Categoría Libreta B</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="txtNuevoC">
                                                                <label class="form-check-label" for="txtNuevoC">Categoría Libreta C</label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModalAgregar()">Cerrar</button>
                                                    <button type="button" class="btn btn-primary" onclick="agregarAlumno()">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="form-group">
                                    <label for="txtDato">Dato a Modificar</label>
                                    <select id="txtDato" name="txtDato" class="form-control" onchange="mostrarCampoTexto(); mostrarCampoFechaNacimiento(); mostrarCampoCategoria();">
                                        <option value="" disabled selected> Dato a Seleccionar </option>
                                        <option value="nombre">Nombre</option>
                                        <option value="apellido">Apellido</option>
                                        <option value="fechaNacimiento">Fecha Nacimiento</option>
                                        <option value="telefono">Teléfono</option>
                                        <option value="correo">Correo Electrónico</option>
                                        <option value="username">Username</option>
                                        <option value="password">Contraseña</option>
                                        <option value="estadoTeorico">Estado Teórico</option>
                                        <option value="categoriaLibreta">Categoría Libreta</option>
                                    </select>
                                </div>

                                <div class="form-group" id="campoTextoContainer" style="display: none;">
                                    <label for="txtNuevo">Nuevo Dato</label>
                                    <input type="text" id="txtNuevo" class="form-control" placeholder="Nuevo dato">
                                </div>

                                <div class="form-group" id="fechaNacimientoContainer" style="display: none;">
                                    <label for="txtNuevaFechaNacimiento">Fecha Nacimiento</label>
                                    <input type="date" id="txtNuevaFechaNacimiento" class="form-control">
                                </div>


                                <div class="form-group" id="categoriaLibretaContainer" style="display: none;">
                                    <label>Categoría Libreta</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="txtA">
                                        <label class="form-check-label" for="txtA">Categoría Libreta A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="txtB">
                                        <label class="form-check-label" for="txtB">Categoría Libreta B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="txtC">
                                        <label class="form-check-label" for="txtC">Categoría Libreta C</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModal()">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="btnGuardar" onclick="guardarCambios()">Guardar</button>
                            </div>
                        </div>
                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

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
<script type="text/javascript" src="../../../js/manejoAlumnosInstructor.js"></script>
<script type="text/javascript" src="../../../js/side.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>


</html>