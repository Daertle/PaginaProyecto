<?php
require_once '../../../../BackEnd/Gestion de Usuarios/Controlador.php';
include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; 

$controla = new Controlador();
$usuario = $_SESSION['usuario']; 

// Obtener los datos del usuario
$datosUsuario = $controla->seleccionarUsuario($usuario);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Credenciales</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/side.css">
    <style>
    :root {
      --base-clr: #1f202f;
      --line-clr: #42434a;
      --hover-clr: #222533;
      --text-clr: #e6e6ef;
      --accent-clr: #5e63ff;
      --secondary-text-clr: #b0b3c1;
    }
    
    div.card-body {
      background-color:#11121a;
      border-radius: 10px;
      border-color: #11121a;
    }
   
    div.credential-row {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      padding: 1rem;
      border-bottom: 1px solid #dee2e6;
    }

    button.btn.btn-primary.btn-sm {
      background-color: #11121a;
      border-color: #fff;
    }


    * {
      margin: 0;
      padding: 0;
    }

    html {
      font-family: Poppins, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.5rem;
    }

    body {
      min-height: 100vh;
      min-height: 100dvh;
      background-color: var(--base-clr);
      color: var(--text-clr);
    }

    main {
      margin-left: 250px;
      padding: min(30px, 7%);
      width: calc(100% - 250px);
      box-sizing: border-box;
    }


    .credential-row {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      padding: 1rem;
      border-bottom: 1px solid #dee2e6;
    }

    .credential-label {
      width: 200px;
      font-weight: bold;
    }

    .credential-value {
      flex-grow: 1;
      margin-right: 1rem;
    }

    .password-modal {
      display: none;
      /* Ocultar por defecto */
      position: fixed;
      /* Fijar en la pantalla */
      z-index: 1;
      /* Asegurarse de que esté por encima de otros elementos */
      left: 0;
      top: 0;
      width: 100%;
      /* Ancho completo */
      height: 100%;
      /* Alto completo */
      overflow: auto;
      /* Habilitar scroll si es necesario */
      background-color: rgb(0, 0, 0);
      /* Color de fondo */
      background-color: rgba(0, 0, 0, 0.4);
      /* Color de fondo con opacidad */
    }

    .modal-content {
      background-color: #0f0f0f;
      margin: 15% auto;
      /* Centrar verticalmente */
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      /* Ancho del modal */
      max-width: 500px;
      /* Ancho máximo del modal */
    }

    input#passwordVerification.form-control {
        background-color: #11121a;
        color: #e6e6ef;
        }

    button.btn.btn-primary {
        background-color: #222533;
        border-color: #000000;
    }
  </style>
  </head>

<body>
    <nav id="sidebar">
        <ul>
            <li>
                <span class="logo">Administrador</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e8eaed">
                        <path
                            d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>
            <li>
                <a href="ownerPerfil.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <span>Perfil</span>
                </a>
            </li>
            <li class="active">
                <a href="ownerConfiguracion.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                        <path
                            d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
                    </svg>
                    <span>Configuracion</span>
                </a>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-plus" viewBox="0 0 16 16">
                        <path
                            d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1" />
                    </svg> <span>Usuarios</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e8eaed">
                        <path
                            d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                    </svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="ownerAlumnos.html.php"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>Alumnos</a></li>
                        <li><a href="ownerInstructores.html.php"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                </svg>Instructores</a></li>
                        <li><a href="ownerAdministradores.html.php"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-database-lock" viewBox="0 0 16 16">
                                    <path
                                        d="M13 5.698a5 5 0 0 1-.904.525C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777A5 5 0 0 1 3 5.698V7c0 .374.356.875 1.318 1.313C5.234 8.729 6.536 9 8 9c.666 0 1.298-.056 1.876-.156-.43.31-.804.693-1.102 1.132A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777A5 5 0 0 1 3 8.698V10c0 .374.356.875 1.318 1.313C5.234 11.729 6.536 12 8 12h.027a4.6 4.6 0 0 0-.017.8A2 2 0 0 0 8 13c-1.573 0-3.022-.289-4.096-.777A5 5 0 0 1 3 11.698V13c0 .374.356.875 1.318 1.313C5.234 14.729 6.536 15 8 15c0 .363.097.704.266.997Q8.134 16.001 8 16c-1.573 0-3.022-.289-4.096-.777C2.875 14.755 2 14.007 2 13V4c0-1.007.875-1.755 1.904-2.223C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4v4.256a4.5 4.5 0 0 0-1.753-.249C12.787 7.654 13 7.289 13 7zm-8.682-3.01C3.356 3.124 3 3.625 3 4c0 .374.356.875 1.318 1.313C5.234 5.729 6.536 6 8 6s2.766-.27 3.682-.687C12.644 4.875 13 4.373 13 4c0-.374-.356-.875-1.318-1.313C10.766 2.271 9.464 2 8 2s-2.766.27-3.682.687Z" />
                                    <path
                                        d="M9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>Administradores</a></li>
                    </div>
                </ul>
            </li>
            <li>
                <a href="ownerCursos.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                    </svg>
                    <span>Clases</span>
                </a>
            </li>
            <li>
                <a href="ownerVehiculos.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-car-front-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                    </svg>
                    <span>Vehiculos</span>
                </a>
            </li>
            <li>
                <a href="ownerPF.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-patch-question" viewBox="0 0 16 16">
                        <path
                            d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745" />
                        <path
                            d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z" />
                        <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0" />
                    </svg><span>Preguntas Test</span>
                </a>
            </li>
            <li>
                <a href="ownerCalendario.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar4-week" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        <path
                            d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <span> Calendario </span>
                </a>
            </li>


            <li>
                <a href="ownerSubirPDF.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z" />
                    </svg>
                    <span> Material Teorico </span>
                </a>
            </li>
            <li>
                <a href="ownerIndex.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                        <path fill-rule="evenodd"
                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                    </svg><span>Volver</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5">
        <h2 class="mb-4">Editar Credenciales</h2>

        <div class="card">
            <div class="card-body">
                <!-- Nombre -->
                <div class="credential-row">
                    <div class="credential-label">Nombre:</div>
                    <div class="credential-value" id="nombreValue">
                        <?php echo $datosUsuario['nombre']; ?>
                    </div>
                    <div class="edit-buttons">
                        <button class="btn btn-primary btn-sm" onclick="iniciarEdicion('nombre')">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </div>
                </div>


                <!-- Apellido -->
                <div class="credential-row">
                    <div class="credential-label">Apellido:</div>
                    <div class="credential-value" id="apellidoValue">
                        <?php echo $datosUsuario['apellido']; ?>
                    </div>
                    <div class="edit-buttons">
                        <button class="btn btn-primary btn-sm" onclick="iniciarEdicion('apellido')">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </div>
                </div>


                <!-- Email -->
                <div class="credential-row">
                    <div class="credential-label">Email:</div>
                    <div class="credential-value" id="emailValue">
                        <?php echo $datosUsuario['correo']; ?>
                    </div>
                    <div class="edit-buttons">
                        <button class="btn btn-primary btn-sm" onclick="iniciarEdicion('email')">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </div>
                </div>


                <!-- Telefono -->
                <div class="credential-row">
                    <div class="credential-label">Teléfono:</div>
                    <div class="credential-value" id="telefonoValue">
                        <?php echo $datosUsuario['telefono']; ?>
                    </div>
                    <div class="edit-buttons">
                        <button class="btn btn-primary btn-sm" onclick="iniciarEdicion('telefono')">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </div>
                </div>

                <!-- Username -->
                <div class="credential-row">
                    <div class="credential-label">Nombre de Usuario:</div>
                    <div class="credential-value" id="usernameValue">
                        <?php echo $datosUsuario['username']; ?>
                    </div>
                    <div class="edit-buttons">
                        <button class="btn btn-primary btn-sm" onclick="iniciarEdicion('username')">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </div>
                </div>

                <!-- Password -->
                <div class="credential-row">
                    <div class="credential-label">Contraseña:</div>
                    <div class="credential-value" id="passwrdValue">••••••••</div>
                    <div class="edit-buttons">
                        <button class="btn btn-primary btn-sm" onclick="iniciarEdicion('passwrd')">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>    
                <!-- Modal de Verificacion de Contrasenia -->
                <div id="passwordModal" class="password-modal">
                    <div class="modal-content">
                        <h4>Verificar Contraseña</h4>
                        <p>Por favor, ingrese su contraseña actual para continuar:</p>
                        <div class="form-group position-relative">
                            <input type="password" class="form-control" id="passwordVerification">
                            <i class="fas fa-eye position-absolute" id="togglePassword" style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                        </div>
                        <a href="../../guestView/spanish/olvidePassword.html.php">Olvidaste la cotraseña?</a>
                        <div class="mt-3">
                            <button class="btn btn-primary" onclick="verificarPassword()">Verificar</button>
                            <button class="btn btn-secondary ms-2" onclick="cerrarModal()">Cancelar</button>
                        </div>
                    </div>
                </div>


                <!-- Modal de Edicion -->
                <div id="editModal" class="password-modal">
                    <div class="modal-content">
                        <h4>Editar Campo</h4>
                        <div class="form-group">
                            <label>Nuevo valor:</label>
                            <input type="text" class="form-control" id="newValue">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" onclick="guardarCambios()">Guardar</button>
                            <button class="btn btn-secondary ms-2" onclick="cerrarEditModal()">Cancelar</button>
                        </div>
                    </div>
                </div>
            


                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    let campoActual = '';

                    function iniciarEdicion(campo) {
                        campoActual = campo;
                        document.getElementById('passwordModal').style.display = 'block';
                    }


                    function cerrarModal() {
                        document.getElementById('passwordModal').style.display = 'none';
                        document.getElementById('passwordVerification').value = '';
                    }


                    function cerrarEditModal() {
                        document.getElementById('editModal').style.display = 'none';
                        document.getElementById('newValue').value = '';
                    }


                    function verificarPassword() {
                        let password = document.getElementById('passwordVerification').value;

                        $.ajax({
                            url: '../../../../BackEnd/Gestion de Usuarios/verificarPass.php',
                            method: 'POST',
                            data: {
                                password: password,
                                username: '<?php echo $_SESSION['usuario']; ?>' 
                },
                            success: function (response) {
                                if (response === 'success') {
                                    cerrarModal();
                                    mostrarModalEdicion();
                                } else {
                                    alert('Contraseña incorrecta');
                                }
                            },
                            error: function () {
                                alert('Error al verificar la contraseña');
                            }
                        });
                    }


                    function mostrarModalEdicion() {
                        document.getElementById('editModal').style.display = 'block';
                        const inputElement = document.getElementById('newValue');
                        if (campoActual === 'passwrd') {
                            inputElement.type = 'password';
                            inputElement.value = ''; 
                        } else {
                            inputElement.type = 'text';
                            inputElement.value = document.getElementById(campoActual + 'Value').innerText;
                        }
                    }


                    function guardarCambios() {
                        let nuevoValor = document.getElementById('newValue').value;

                        // Aquí iria la llamada AJAX para guardar en la base de datos
                        $.ajax({
                            url: '../../../../BackEnd/Gestion de Usuarios/modificarCredenciales.php',
                            method: 'POST',
                            data: {
                                campo: campoActual, 
                                valor: nuevoValor
                            },
                            success: function (response) {
                                if (campoActual === 'passwrd') {
                                    document.getElementById(campoActual + 'Value').innerText = '••••••••';
                                } else {
                                    document.getElementById(campoActual + 'Value').innerText = nuevoValor;
                                }
                                cerrarEditModal();
                            },
                            error: function (error) {
                                alert('Error al guardar los cambios');
                            }
                        });
                    }


                    // Cerrar modals al hacer clic afuera
                    window.onclick = function (event) {
                        if (event.target.className === 'password-modal') {
                            event.target.style.display = 'none';
                        }
                    }

                    // Toggle password visibility
                    document.getElementById('togglePassword').addEventListener('click', function () {
                        const passwordField = document.getElementById('passwordVerification');
                        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordField.setAttribute('type', type);
                        this.classList.toggle('fa-eye');
                        this.classList.toggle('fa-eye-slash');
                    });
                </script>
                <script src="../../../js/side.js"></script>
</body>

</html>