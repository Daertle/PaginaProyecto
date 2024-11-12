<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos2.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Driving</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../../css/style.css" />
    <style>
        .card {
            margin: 20px;
            border: 2px solid black;
            overflow: hidden;
        }

        .section {
            border: 2px solid black;
        }

        .left-section {
            padding: 0;
        }

        .left-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-column {
            display: flex;
            flex-direction: column;
            min-height: 300px;
            position: relative;
            /* para posicionamiento del boton */
        }

        .right-upper,
        .right-lower {
            flex: 1;
        }

        .right-upper .row {
            height: 100%;
        }

        .right-upper .col-6 {
            display: flex;
            align-items: center;
        }

        .printOrder {
            position: absolute;
            bottom: 10px;
            right: 10px;
            margin: 0;
        }

        /* aseguramos que el contenido no se superponga con el boton */
        .right-lower {
            padding-bottom: 50px;
        }

        div.col-6,
        div.right-lower {
            color: white;
            background-color: #0f0f0f;
        }

        button.btn.btn-primary.printOrder {
            background-color: #0f0f0f;
            color: white;
            border: 1px solid white;
        }

        .package-title {
            font-size: 1.5em;
            /* Aumenta el tamaño de la fuente del título del paquete */
            font-weight: bold;
            padding-left: 40px !important;
            /* Agrega padding-left al título del paquete */
        }

        .package-price {
            font-size: 1.5em;
            /* Aumenta el tamaño de la fuente del precio */
            font-weight: bold;
            text-align: right;
            /* Alinea el precio a la derecha */
            display: flex;
            justify-content: flex-end;
            /* Asegura que el precio esté alineado a la derecha */
            padding-right: 40px !important;
        }

        .package-info {
            padding-left: 40px;
            /* Agrega padding-left a la información de cada paquete */
        }
    </style>
</head>

<body class="body2">

    <div class="wrapper">
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
                            <a href="instNosotros.html.php" class="nav-link">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a href="instFlota.html.php" class="nav-link">Flota</a>
                        </li>
                        <li class="nav-item">
                            <a href="instClases.html.php" class="nav-link active">Clases</a>
                        </li>
                        <li class="nav-item">
                            <a href="instContacto.html.php" class="nav-link">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a href="instChoferes.html.php" class="nav-link">Choferes</a>
                        </li>
                        <li class="nav-item">
                            <a href="instTests.html.php" class="nav-link">Tests</a>
                        </li>
                        <li class="nav-item">
                            <a href="instRequisitos.html.php" class="nav-link">Requisitos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-globe"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="instLandingSpanish.html.php">Español</a></li>
                                <li><a class="dropdown-item" href="../english/instLandingEnglish.html.php">Inglés</a>
                                </li>
                                <li><a class="dropdown-item" href="../english/instLandingArabic.html.php">Árabe</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="login.html.php" class="nav-link dropdown-toggle"><i
                                    class="bi bi-person-circle"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="card">
                <div class="row g-0 h-100">
                    <!-- seccionn izquierda con imagen -->
                    <div class="col-12 col-md-4 left-section">
                        <img src="../../../img/auto.jpg" alt="Libreta tipo A" class="img-fluid h-100">
                    </div>

                    <!-- seccion derecha -->
                    <div class="col-12 col-md-8 right-column">
                        <!-- parte superior derecha dividida en dos columnas -->
                        <div class="section h-100">
                            <div class="row g-0 h-100">
                                <div class="col-6">
                                    <p class="p-2 m-0 package-title">Paquete - libreta tipo A</p>
                                </div>
                                <div class="col-6">
                                    <p class="p-2 m-0 package-price">$16000</p>
                                </div>
                            </div>
                        </div>

                        <!-- parte superior derecha dividida en dos columnas -->
                        <div class="h-100">
                            <div class="right-lower package-info">
                                <p class="p-2 m-0">Ideal para personas que desean conducir autos particulares y
                                    camionetas pequeñas con remolque liviano.
                                    <br>
                                    Incluye:
                                <ul>
                                    <li>10 clases prácticas de manejo en automóvil.</li>
                                    <br>
                                    <li>2 clases teóricas de normas de tránsito y seguridad vial.</li>
                                    <br>
                                    <li>Simulacro del examen práctico.</li>
                                </ul>
                                </p>
                                <p class="p-2 m-0">Vehiculos habilitados con este tipo de libreta:
                                <ul>
                                    <li>Vehículos hasta 9 pasajeros, incluido el conductor.</li>
                                    <br>
                                    <li>Camionetas y vehículos con remolque, con un peso máximo total de hasta 4.000 kg.
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <div>
                                <button type="button" target="_"
                                    onclick="window.open('../../../../BackEnd/pdfOrdenCompras/Orden compra A.pdf')"
                                    class="btn btn-primary printOrder">IMPRIMIR ORDEN DE COMPRA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="row g-0 h-100">
                    <!-- seccionn izquierda con imagen -->
                    <div class="col-12 col-md-4 left-section">
                        <img src="../../../img/camion.jpg" alt="Libreta tipo B" class="img-fluid h-100">
                    </div>

                    <!-- seccion derecha -->
                    <div class="col-12 col-md-8 right-column">
                        <!-- parte superior derecha dividida en dos columnas -->
                        <div class="section h-100">
                            <div class="row g-0 h-100">
                                <div class="col-6">
                                    <p class="p-2 m-0 package-title">Paquete - Libreta tipo B</p>
                                </div>
                                <div class="col-6">
                                    <p class="p-2 m-0 package-price">$20.000</p>
                                </div>
                            </div>
                        </div>

                        <!-- parte superior derecha dividida en dos columnas -->
                        <div class="h-100">
                            <div class="right-lower package-info">
                                <p class="p-2 m-0">Ideal para conductores que necesitan manejar vehículos más grandes,
                                    como minibuses o camiones de carga ligera.
                                    <br>
                                    Incluye:
                                <ul>
                                    <li>12 clases prácticas de manejo en vehículos medianos.</li>
                                    <br>
                                    <li>3 clases teóricas de tránsito avanzado y maniobras complejas.</li>
                                    <br>
                                    <li>Simulacro del examen práctico con camión liviano.</li>
                                </ul>
                                </p>
                                <p class="p-2 m-0">Vehiculos habilitados con este tipo de libreta:
                                <ul>
                                    <li>Vehículos de hasta 18 pasajeros.</li>
                                    <br>
                                    <li>Camiones cuyo peso total (tara más carga) no exceda los 7.000 kg.</li>
                                    <br>
                                    <li>Remolques que no superen los 1.500 kg.</li>
                                </ul>
                                </p>
                            </div>
                            <div>
                                <button type="button" target="_"
                                    onclick="window.open('../../../../BackEnd/pdfOrdenCompras/Orden compra B.pdf')"
                                    class="btn btn-primary printOrder">IMPRIMIR ORDEN DE COMPRA</button>
                            </div>
                        </div>
                    </div>




                </div>
            </div>




        </div>
        <div class="container">
            <div class="card">
                <div class="row g-0 h-100">
                    <!-- seccionn izquierda con imagen -->
                    <div class="col-12 col-md-4 left-section">
                        <img src="../../../img/camion2.jpeg" alt="Libreta tipo C" class="img-fluid h-100">
                    </div>

                    <!-- seccion derecha -->
                    <div class="col-12 col-md-8 right-column">
                        <!-- parte superior derecha dividida en dos columnas -->
                        <div class="section h-100">
                            <div class="row g-0 h-100">
                                <div class="col-6">
                                    <p class="p-2 m-0 package-title">Paquete - Libreta tipo C</p>
                                </div>
                                <div class="col-6">
                                    <p class="p-2 m-0 package-price">$22.000</p>
                                </div>
                            </div>
                        </div>

                        <!-- parte superior derecha dividida en dos columnas -->
                        <div class="h-100">
                            <div class="right-lower package-info">
                                <p class="p-2 m-0">Ideal para personas interesadas en manejar camiones grandes y
                                    transporte de carga de mayor capacidad.
                                    <br>
                                    Incluye:
                                <ul>
                                    <li>15 clases prácticas de manejo en camiones pesados.</li>
                                    <br>
                                    <li>4 clases teóricas sobre maniobras especiales y carga segura.</li>
                                    <br>
                                    <li>Simulacro del examen práctico con camión de mayor porte.</li>
                                </ul>
                                </p>
                                <p class="p-2 m-0">Vehiculos habilitados con este tipo de libreta:
                                <ul>
                                    <li>Vehículos de hasta 18 pasajeros.</li>
                                    <br>
                                    <li>Camiones simples de mayor tamaño.</li>
                                    <br>
                                    <li>Remolques que no superen los 1.500 kg.</li>
                                </ul>
                                </p>
                            </div>

                            <div>
                                <button type="button" target="_"
                                    onclick="window.open('../../../../BackEnd/pdfOrdenCompras/Orden compra C.pdf')"
                                    class="btn btn-primary printOrder">IMPRIMIR ORDEN DE COMPRA</button>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <ul class="ul1">
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    </li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    </li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                    </li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="../../../js/script.js"></script>

</body>

</html>