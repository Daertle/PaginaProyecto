<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos1.php'; ?>


<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury Driving</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../../../css/side.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <style>
     :root {
    --sidebar-width: 280px;
    --header-height: 60px;
    --primary-color: #7289da;
    --hover-color: #5869a7;
    --bg-dark: #1a1a1a;
    --bg-darker: #141414;
    --text-color: #e4e4e4;
    --border-color: #2d2d2d;
    --card-bg: #232323;
}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    overflow-x: hidden;
    background: var(--bg-dark);
    color: var(--text-color);
}


/* Main Content */
.adminCont {
    margin-left: var(--sidebar-width);
    padding: 20px;
    transition: 0.3s;
    min-height: 100vh;
    background: var(--bg-dark);
}


.adminCont.expanded {
    margin-left: 0;
}


.body3 {
    background: var(--card-bg);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    border: 1px solid var(--border-color);
}


/* Calendar Styles */
#calendar {
    max-width: 100%;
    height: auto;
    background: var(--card-bg);
    padding: 15px;
    border-radius: 8px;
    border: 1px solid var(--border-color);
}


/* Calendar specific overrides */
.fc {
    background: var(--card-bg);
    color: var(--text-color);
}


.fc-theme-standard td,
.fc-theme-standard th {
    border-color: var(--border-color);
}


.fc-theme-standard .fc-scrollgrid {
    border-color: var(--border-color);
}


.fc-day-today {
    background: rgba(114, 137, 218, 0.15) !important;
}


.fc-button-primary {
    background-color: var(--primary-color) !important;
    border-color: var(--border-color) !important;
}


.fc-button-primary:hover {
    background-color: var(--hover-color) !important;
}


/* Modal Styles */
.custom-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    z-index: 2000;
}


.custom-modal.active {
    display: block;
}


.custom-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: var(--card-bg);
    padding: 25px;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
    border: 1px solid var(--border-color);
    color: var(--text-color);
}


.custom-close {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 24px;
    cursor: pointer;
    color: var(--text-color);
}


.custom-hidden {
    display: none;
}




/* Form Styles */
#eventForm {
    display: flex;
    flex-direction: column;
    gap: 15px;
}


#eventForm select,
#eventForm input {
    padding: 8px;
    background: var(--bg-darker);
    border: 1px solid var(--border-color);
    border-radius: 5px;
    font-size: 16px;
    color: var(--text-color);
}


#eventForm button {
    padding: 10px;
    background: var(--primary-color);
    color: var(--text-color);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}


#eventForm button:hover {
    background: var(--hover-color);
}


/* Toggle Button */
#toggle-sidebar {
    position: fixed;
    left: 20px;
    top: 20px;
    z-index: 1001;
    background: var(--primary-color);
    color: var(--text-color);
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    display: none;
}


/* Responsive Design */
@media screen and (max-width: 1024px) {
    #toggle-sidebar {
        display: block;
    }

    #sidebar {
        margin-left: calc(var(--sidebar-width) * .);
    }

    #sidebar.active {
        margin-left: 0;
    }

    .adminCont {
        margin-left: 0;
        padding: 15px;
    }

    .body3 {
        padding: 15px;
    }
}

@media screen and (max-width: 768px) {
    .fc-toolbar.fc-header-toolbar {
        flex-direction: column;
        gap: 10px;
    }

    .fc-toolbar-chunk {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .custom-modal-content {
        width: 95%;
        padding: 20px;
    }
}

@media screen and (max-width: 480px) {
    .adminCont {
        padding: 10px;
    }

    .body3 {
        padding: 10px;
    }

    h3 {
        font-size: 1.2em;
    }

    .fc-toolbar-title {
        font-size: 1.2em !important;
    }
}
    </style>
</head>

<body>
    <nav id="sidebar">
    <ul>
      <li>
        <span class="logo">Estudiante</span>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li>
        <a href="studPerfil.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
          <span>Perfil</span>
        </a>
      </li>
      <li>
        <a href="studConfiguracion.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
  <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
</svg>
          <span>Configuracion</span>
        </a>
      </li>
      <li class="active">
        <a href="studCalendario.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
  <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
</svg>
          <span> Calendario </span>
        </a>
      </li>

      <li>
        <a href="studSubirPDF.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
</svg>
          <span> Material Teorico </span>
        </a>
      </li>
      <li>
        <a href="studIndex.html.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
</svg><span>Volver</span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="adminCont">

    <div class="body3">
      <h3>Calendario de clases</h3>
      <div id='calendar'></div>

      <!-- Modal -->
      <div id="eventModal" class="custom-modal custom-hidden">
        <div class="custom-modal-content">
          <span class="custom-close">&times;</span>
          <h2>Detalles del Evento</h2>
          <form id="eventForm">
            <input type="date" id="fecha" required class="custom-hidden">
            <label for="hora">Hora:</label>
            <select id="hora" required>
              <option value="08:00">08:00 AM</option>
              <option value="09:00">09:00 AM</option>
              <option value="10:00">10:00 AM</option>
              <option value="11:00">11:00 AM</option>
              <option value="12:00">12:00 PM</option>
              <option value="13:00">01:00 PM</option>
              <option value="14:00">02:00 PM</option>
              <option value="15:00">03:00 PM</option>
              <option value="16:00">04:00 PM</option>
              <option value="17:00">05:00 PM</option>
              <option value="18:00">06:00 PM</option>
              <option value="19:00">07:00 PM</option>
              <option value="20:00">08:00 PM</option>
              <!-- Agrega más opciones según sea necesario -->
            </select>
            <br>
            <button type="submit" onclick="">Guardar Evento</button>
          </form>
        </div>
      </div>


  </div>

  </div>
  <script>
        // Funcionalidad del sidebar responsive
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Cerrar sidebar al hacer clic fuera en dispositivos móviles
        document.addEventListener('click', function(e) {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('toggle-sidebar');
            
            if (window.innerWidth <= 1024) {
                if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });

        // Funcionalidad del submenú
        function toggleSubMenu(element) {
            const subMenu = element.nextElementSibling;
            const allSubMenus = document.querySelectorAll('.sub-menu');
            
            allSubMenus.forEach(menu => {
                if (menu !== subMenu) {
                    menu.classList.remove('active');
                }
            });
            
            subMenu.classList.toggle('active');
        }

        // Ajustar vista en cambio de tamaño de ventana
        window.addEventListener('resize', function() {
            if (window.innerWidth > 1024) {
                document.getElementById('sidebar').classList.remove('active');
            }
        });
    </script>

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

<script src="dist/index.global.min.js"></script>
<script src="core/locales/es.global.min.js"></script>
<script src="../../../js/calendar.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="../../../js/side.js"></script>
</body>

</html>