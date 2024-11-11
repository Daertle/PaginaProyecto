<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos1.php'; ?>

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
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="..\..\..\css\side.css">
  
    <style>
      :root{
  --base-clr: #11121a;
  --line-clr: #42434a;
  --hover-clr: #222533;
  --text-clr: #e6e6ef;
  --accent-clr: #5e63ff;
  --secondary-text-clr: #b0b3c1;
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

#sidebar.close + main {
  margin-left: 60px;
  width: calc(100% - 60px);
}

main p {
  color: var(--secondary-text-clr);
  margin-top: 5px;
  margin-bottom: 15px;
}

.container {
  border: 1px solid var(--line-clr);
  border-radius: 1em;
  margin-bottom: 20px;
  padding: min(3em, 15%);
}

.container h2, 
.container p { 
  margin-top: 1em;
}

/* Profile Container Styles */
.profile-container {
  width: calc(100% - 2rem);
  max-width: 900px;
  margin: 2rem auto;
  background-color: var(--hover-clr);  border-radius: 1rem;
  padding: 2rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  position: relative;
  z-index: 1;
}

.profile-header {
  text-align: center;
  margin-bottom: 3rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid var(--line-clr);
}

.profile-avatar {
  width: 120px;
  height: 120px;
  background-color: var(--accent-clr);
  border-radius: 50%;
  margin: 0 auto 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.profile-avatar i {
  font-size: 3rem;
  color: var(--text-clr);
}

.profile-title {
  font-size: 2rem;
  color: var(--text-clr);
  margin-bottom: 0.5rem;
  font-weight: 600;
}

.profile-subtitle {
  font-size: 1rem;
  color: var(--secondary-text-clr);
  font-weight: 500;
}

/* Profile Information Cards */
.profile-info {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
  padding: 1rem;
  width: 100%;
  box-sizing: border-box;
}

.info-card {
  background-color: var(--base-clr);
  border-radius: 0.8rem;
  padding: 1.5rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  z-index: 1;
}

.info-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.info-label {
  font-size: 0.9rem;
  color: var(--secondary-text-clr);
  margin-bottom: 0.5rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.info-value {
  font-size: 1.1rem;
  color: var(--text-clr);
  font-weight: 500;
  word-break: break-word;
}

/* Animation for Cards */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.info-card {
  animation: fadeIn 0.5s ease forwards;
}

/* Responsive Design */
@media(max-width: 800px) {
  main {
    margin-left: 0;
    width: 100%;
    padding: 2em 1em 80px 1em;
  }

  .container {
    border: none;
    padding: 0;
  }

  .profile-container {
    margin: 1rem auto 5rem auto;
    padding: 1.5rem;
    width: calc(100% - 2rem);
  }

  .profile-header {
    margin-bottom: 2rem;
  }

  .profile-avatar {
    width: 100px;
    height: 100px;
  }

  .profile-avatar i {
    font-size: 2.5rem;
  }

  .profile-title {
    font-size: 1.75rem;
  }

  .profile-info {
    grid-template-columns: 1fr;
    gap: 1rem;
    padding: 0.5rem;
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
      <li class="active">
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
      <li>
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
  <main>
 
        <div class="profile-container">
            <div class="profile-header">
                <div class="profile-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h2 class="profile-title"><?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?></h2>
                <p class="profile-subtitle">Perfil de Usuario</p>
            </div>

            <div class="profile-info">
                <div class="info-card">
                    <div class="info-label">Documento</div>
                    <div class="info-value"><?php echo $_SESSION['documento']; ?></div>
                </div>

                <div class="info-card">
                    <div class="info-label">Usuario</div>
                    <div class="info-value"><?php echo $_SESSION['usuario']; ?></div>
                </div>

                <div class="info-card">
                    <div class="info-label">Correo Electrónico</div>
                    <div class="info-value"><?php echo $_SESSION['correo']; ?></div>
                </div>

                <div class="info-card">
                    <div class="info-label">Teléfono</div>
                    <div class="info-value"><?php echo $_SESSION['telefono']; ?></div>
                </div>

                <div class="info-card">
                    <div class="info-label">Fecha de Nacimiento</div>
                    <div class="info-value"><?php echo $_SESSION['fechaNac']; ?></div>
                </div>
            </div>
        </div>
  
   </main>
</body>

<script src="../../../js/side.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>