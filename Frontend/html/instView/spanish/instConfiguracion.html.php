<?php
session_start();
require_once '../../../../BackEnd/Gestion de Usuarios/Controlador.php';
include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos2.php';

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
            background-color: #11121a;
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
                <span class="logo"> Instructor</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>

            <li>
                <a href="instPerfil.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <span>Perfil</span>
                </a>
            </li>
            <li  class="active"> 
                <a href="instConfiguracion.html.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                        <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
                    </svg>
                    <span>Configuracion</span>
                </a>
            </li>
            <li>
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
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
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
                success: function(response) {
                    if (response === 'success') {
                        cerrarModal();
                        mostrarModalEdicion();
                    } else {
                        alert('Contraseña incorrecta');
                    }
                },
                error: function() {
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
                success: function(response) {
                    // Manejo especial para el campo de contraseña
                    if (campoActual === 'passwrd') {
                        document.getElementById(campoActual + 'Value').innerText = '••••••••';
                    } else {
                        document.getElementById(campoActual + 'Value').innerText = nuevoValor;
                    }
                    cerrarEditModal();
                },
                error: function(error) {
                    alert('Error al guardar los cambios');
                }
            });
        }


        // Cerrar modals al hacer clic afuera
        window.onclick = function(event) {
            if (event.target.className === 'password-modal') {
                event.target.style.display = 'none';
            }
        }

        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
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