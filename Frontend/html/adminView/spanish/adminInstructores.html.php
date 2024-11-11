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
    <link rel="stylesheet" href="../../../css/side.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../../css/tabla.css" />


</head>

<body class="body2">
<nav id="sidebar">
    <ul>
      <li>
        <span class="logo"> Administrador </span>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li>
        <a href="adminPerfil.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
          <span>Perfil</span>
        </a>
      </li>
      <li>
        <a href="adminConfiguracion.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
  <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
</svg>
          <span>Configuracion</span>
        </a>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
  <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
</svg> <span>Usuarios</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="adminAlumnos.html.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>Alumnos</a></li>
            <li  class="active"><a href="adminInstructores.html.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
</svg>Instructores</a></li>
          </div>
        </ul>
      </li>
      <li>
        <a href="adminCursos.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>
          <span>Clases</span>
        </a>
      </li>
      <li>
        <a href="adminVehiculos.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
</svg>
          <span>Vehiculos</span>
        </a>
      </li>
      <li>
        <a href="adminPF.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question" viewBox="0 0 16 16">
  <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745"/>
  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
  <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0"/>
</svg><span>Preguntas Test</span>
        </a>
      </li>
     
      <li>
        <a href="adminSubirPDF.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
</svg>
          <span> Material Teorico </span>
        </a>
      </li>
      <li>
        <a href="adminIndex.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
</svg><span>Volver</span>
        </a>
      </li>
    </ul>
  </nav>
    <div class="adminCont">

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h2 class="card-title text-uppercase mb-0"> INSTRUCTORES </h2>
                                    <button type="button" class="btn btn-primary" onclick="mostrarModalAgregar()">
                                        <i class="fas fa-plus"></i> Añadir Instructor
                                    </button>
                                </div>

                                <!-- MODAL DE AÑADIR USUARIO -->
                                <div id="addModal" class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Añadir nuevo Instructor</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModalAgregar()">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Documento</span>
                                                    </div>
                                                    <input type="text" id="txtNuevoDocumento" class="form-control" placeholder="Número de documento">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Username</span>
                                                    </div>
                                                    <input type="text" id="txtNuevoUsername" class="form-control" placeholder="Username">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Nombre</span>
                                                    </div>
                                                    <input type="text" id="txtNuevoNombre" class="form-control" placeholder="Nombre">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Apellido</span>
                                                    </div>
                                                    <input type="text" id="txtNuevoApellido" class="form-control" placeholder="Apellido">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Fecha Nacimiento</span>
                                                    </div>
                                                    <input type="date" id="txtNuevaFechaNacimiento" class="form-control">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Teléfono</span>
                                                    </div>
                                                    <input type="tel" id="txtNuevoTelefono" class="form-control" placeholder="Teléfono">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Correo</span>
                                                    </div>
                                                    <input type="email" id="txtNuevoCorreo" class="form-control" placeholder="Correo electrónico">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Contraseña</span>
                                                    </div>
                                                    <input type="password" id="txtNuevaPassword" class="form-control" placeholder="Contraseña">
                                                </div>

                                                <div class>
                                                    <label for="txtLunes"> Lunes </label>
                                                    <input type="checkbox" name="txtLunes" id="txtLunes">
                                                    <br>
                                                    <label for="txtMartes"> Martes </label>
                                                    <input type="checkbox" name="txtMartes" id="txtMartes">
                                                    <br>
                                                    <label for="txtMiercoles"> Miercoles </label>
                                                    <input type="checkbox" name="txtMiercoles" id="txtMiercoles">
                                                    <br>
                                                    <label for="txtJueves"> Jueves </label>
                                                    <input type="checkbox" name="txtJueves" id="txtJueves">
                                                    <br>
                                                    <label for="txtViernes"> Viernes </label>
                                                    <input type="checkbox" name="txtViernes" id="txtViernes">
                                                    <br>
                                                    <label for="txtSabado"> Sabado </label>
                                                    <input type="checkbox" name="txtSabado" id="txtSabado">
                                                </div>
                                                <br>

                                                <!-- Categoria Clase -->
                                                <label for="txtClaseA"> Categoria Clase A </label>
                                                <input type="checkbox" name="txtClaseA" id="txtClaseA">
                                                <br>
                                                <label for="txtClaseB"> Categoria Clase B </label>
                                                <input type="checkbox" name="txtClaseB" id="txtClaseB">
                                                <br>
                                                <label for="txtClaseC"> Categoria Clase C </label>
                                                <input type="checkbox" name="txtClaseC" id="txtClaseC">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModalAgregar()">Cerrar</button>
                                                <button type="button" class="btn btn-primary" onclick="agregarInstructor()">Guardar</button>
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
                        <class="modal-body">
                            <input type="hidden" id="txtID">
                            <div class="form-group">
                                <label for="txtDato">Dato a Modificar</label>
                                <select id="txtDato" name="txtDato" class="form-control" onchange="mostrarCampoTexto(); mostrarCampoFechaNacimiento(); mostrarCampoClase();">
                                    <option value="" disabled selected> Dato a Seleccionar </option>
                                    <option value="nombre"> Nombre </option>
                                    <option value="apellido"> Apellido </option>
                                    <option value="fechaNacimiento"> Fecha Nacimiento </option>
                                    <option value="telefono"> Telefono </option>
                                    <option value="correo"> Correo Electronico </option>
                                    <option value="username"> Username </option>
                                    <option value="passwrd"> Password </option>
                                    <option value="permisos"> Permisos </option>
                                    <option value="horarios"> Horarios </option>
                                    <option value="categoriaClase"> Categoria Clase </option>
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

                            <div class="form-group " id="horariosContainer" style="display: none;">
                                <label>Horarios</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtLunes">
                                    <label class="form-check-label" for="txtLunes">Lunes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtMartes">
                                    <label class="form-check-label" for="txtMartes">Martes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtMiercoles">
                                    <label class="form-check-label" for="txtMiercoles">Miercoles</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtJueves">
                                    <label class="form-check-label" for="txtJueves">Jueves</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtViernes">
                                    <label class="form-check-label" for="txtViernes">Viernes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtSabado">
                                    <label class="form-check-label" for="txtSabado">Sabado</label>
                                </div>
                            </div>
                        
                        

                            <div class="form-group" id="categoriaClaseContainer" style="display: none;">
                                <label>Categoría Clase</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtClaseA">
                                    <label class="form-check-label" for="txtClaseA">Clase A</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtClaseB">
                                    <label class="form-check-label" for="txtClaseB">Clase B</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="txtClaseC">
                                    <label class="form-check-label" for="txtClaseC">Clase C</label>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../../../js/manejoInstructores.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="../../../js/side.js"></script>

</html>