<?php
class BaseDatos
{
    /********************************************************************************/
    private $servidor;      // En Xampp es "localhost"
    private $usuario;       // En Xampp es "root"
    private $password;      // En Xampp es ""
    private $base_datos;    // base datos en phpmyadmin
    private $conexion;      // Para las operaciones con MySQL
    /********************************************************************************/
    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->password = "";
        $this->base_datos = "luxurydriving";
        $this->conexion = $this->nueva("localhost", "root", "", "luxurydriving");
    }

    /*************************************************************************************************************************************************/
    private function nueva($server, $user, $pass, $base)
    {
        try {
            $conectar = mysqli_connect($server, $user, $pass, $base);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
        return $conectar;
    }
    /******************************************************************************************************************************************/

    /**************************************/
    /*               ALTAS                */
    /**************************************/

    // Altas de Usuarios en Tablas   

    /**
     * 
     * 
     * @param type $usuario
     */
    public function ingresarAlumno($usuario)
    {
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $fechaNac = $usuario->getFechaNac();
        $telefono = $usuario->getTelefono();
        $correo = $usuario->getCorreo();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $estadoTeorico = $usuario->getEstadoTeorico();
        $permisos = $usuario->getPermisos();
        $fechaIns = $usuario->getFechaIns();

        $insertar = "insert into alumno values('$documento','$nombre','$apellido','$fechaNac','$telefono','$correo','$username','$password','$estadoTeorico','$permisos', '$fechaIns', 1, DEFAULT)";
        return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarCategoriaAlumnos($usuario)
    {

        $documento = $usuario->getDocumento();
        $categoriaLibreta = $usuario->getCategoriaLibreta();

        for ($i = 0; $i < count($usuario->getCategoriaLibreta()); $i++) {
            $insertar = "insert into alumno_libreta values('$documento','$categoriaLibreta[$i]')";
            mysqli_query($this->conexion, $insertar);
        }
    }

    public function ingresarInstructor($usuario)
    {
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $fechaNac = $usuario->getFechaNac();
        $telefono = $usuario->getTelefono();
        $correo = $usuario->getCorreo();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $permisos = $usuario->getPermisos();

        $insertar = "insert into instructor values('$documento','$nombre','$apellido','$fechaNac','$telefono','$correo','$username','$password','$permisos', 1)";
        return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarCategoriaInstructores($usuario)
    {
        $documento = $usuario->getDocumento();
        $categoriacurso = $usuario->getCategoriacurso();

        for ($i = 0; $i < count($usuario->getCategoriacurso()); $i++) {
            $insertar = "insert into instructor_categoria values('$documento','$categoriacurso[$i]')";
            mysqli_query($this->conexion, $insertar);
        }
    }

    public function ingresarHorariosInstructores($usuario)
    {
        $documento = $usuario->getDocumento();
        $horarios = $usuario->getHorarios();

        for ($i = 0; $i < count($usuario->getHorarios()); $i++) {
            $insertar = "insert into instructor_horarios values('$documento','$horarios[$i]')";
            mysqli_query($this->conexion, $insertar);
        }
    }

    public function ingresarAdministrador($usuario)
    {
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $fechaNac = $usuario->getFechaNac();
        $telefono = $usuario->getTelefono();
        $correo = $usuario->getCorreo();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $permisos = $usuario->getPermisos();

        $insertar = "insert into administrador values('$documento','$nombre','$apellido','$fechaNac','$telefono','$correo','$username','$password','$permisos', 1)";
        return mysqli_query($this->conexion, $insertar);
    }

    // Altas de Vehiuclos en Tablas

    public function ingresarVehiculo($vehiculo)
    {
        $matricula = $vehiculo->getMatricula();
        $modelo = $vehiculo->getModelo();
        $motor = $vehiculo->getMotor();
        $combustible = $vehiculo->getCombustible();
        $medida = $vehiculo->getMedida();
        $situacionActual = $vehiculo->getSituacionActual();
        $kilometraje = $vehiculo->getKilometraje();
        $categoria = $vehiculo->getCategoria();

        $insertar = "insert into vehiculo values('$matricula','$modelo','$motor','$combustible','$medida','$situacionActual','$kilometraje','$categoria', 1)";
        return mysqli_query($this->conexion, $insertar);
    }

    // Altas de Cursos en Tablas   

    public function ingresarCurso($curso)
    {
        $codigoAlumno = $curso->getDocumentoAlumno();
        $codigoInstructor = $curso->getDocumentoInstructor();
        $matricula = $curso->getMatricula();
        $precio = $curso->getPrecio();
        $hora = $curso->getHora();
        $fecha = $curso->getFecha();
        $tipoLibreta = $curso->getTipoLibreta();
        $resultado = $curso->getResultado();
        $tipo = $curso->getTipo();

        $insertar = "insert into curso values('','$codigoAlumno','$codigoInstructor','$matricula','$precio','$hora','$fecha','$tipoLibreta','$resultado','$tipo', 1)";
        return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarPregunta($pregunta, $respuesta){
        $insertar = "insert into preguntas values('','$pregunta','$respuesta')";
        return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarOpciones($pregunta, $opciones) {
        $consulta = "SELECT id_pregunta FROM preguntas WHERE pregunta = '$pregunta'";
        $resultado = mysqli_query($this->conexion, $consulta);
        $row = mysqli_fetch_assoc($resultado);
        $id_pregunta = $row['id_pregunta'];
    
        var_dump($id_pregunta);

        for ($i = 0; $i < count($opciones); $i++) {
            $insertar = "INSERT INTO opciones VALUES ('$id_pregunta', '$opciones[$i]')";
            mysqli_query($this->conexion, $insertar);
        }
    
        return $id_pregunta;
    }

    /**************************************/
    /*               BAJAS                */
    /**************************************/

    // Bajas de Usuarios en Tablas

    public function eliminarAlumno($documento)
    {
        $eliminar = "update alumno set activo = 0 where documentoAlumno = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }


    public function eliminarInstructor($documento)
    {
        $eliminar = "update instructor set activo = 0 where documentoInstructor = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }


    public function eliminarAdministrador($documento): bool|mysqli_result
    {
        $eliminar = "update administrador set activo = 0 where documentoAdmin = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarCategoriaAlumno($documento)
    {
        $eliminar = "delete from alumno_libreta where documentoAlumno = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarCategoriaInstructor($documento)
    {
        $eliminar = "delete from instructor_categoria where documentoInstructor = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarHorariosInstructor($documento)
    {
        $eliminar = "delete from instructor_horarios where documentoInstructor = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    // Bajas de Vehiculos en Tablas
    public function eliminarVehiculo($matricula)
    {
        $eliminar = "update vehiculo set activo = 0 where matricula = '$matricula'";
        return mysqli_query($this->conexion, $eliminar);
    }

    // Bajas de Cursos en Tablas

    public function eliminarCurso($codigocurso)
    {
        $eliminar = "update curso set activo = 0 where codigo = '$codigocurso'";
        return mysqli_query($this->conexion, $eliminar);
    }

    // Bajas de Preguntas en Tablas

    public function eliminarPregunta($codigoPregunta)
    {
        $eliminar = "delete from preguntas where id_Pregunta = '$codigoPregunta'";
        mysqli_query($this->conexion, $eliminar);
        $eliminar = "delete from o nbpciones where id_pregunta = '$codigoPregunta'";
        mysqli_query($this->conexion, $eliminar);
    }

    /**************************************/
    /*           MODIFICACIONES           */
    /**************************************/

    // Modificaciones de Usuarios en Tablas

    public function modificarAlumno($documento, $dato, $nuevo)
    {
        switch ($dato) {
            case 'nombre':
                $modificar = "update alumno set nombre = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'apellido':
                $modificar = "update alumno set apellido = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaNacimiento':
                $modificar = "update alumno set fechaNacimiento = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'telefono':
                $modificar = "update alumno set telefono = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'correo':
                $modificar = "update alumno set correo = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'username':
                $modificar = "update alumno set username = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'passwrd':
                $modificar = "update alumno set passwrd = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'permisos':
                $modificar = "update alumno set permisos = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaInscripcion':
                $modificar = "update alumno set fechaInscripcion = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);

            case 'estadoTeorico':
                $modificar = "update alumno set estadoTeorico = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'categoriaLibreta':
                $this->eliminarCategoriaAlumno($documento);
                for ($i = 0; $i < count($nuevo); $i++) {
                    $modificar = "insert into alumno_libreta values('$documento','$nuevo[$i]')";
                    mysqli_query($this->conexion, $modificar);
                }
                break;
        }
    }

    public function modificarInstructor($documento, $dato, $nuevo)
    {
        switch ($dato) {
            case 'nombre':
                $modificar = "update instructor set nombre = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'apellido':
                $modificar = "update instructor set apellido = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaNacimiento':
                $modificar = "update instructor set fechaNacimiento = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'telefono':
                $modificar = "update instructor set telefono = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'correo':
                $modificar = "update instructor set correo = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'username':
                $modificar = "update instructor set username = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'passwrd':
                $modificar = "update instructor set passwrd = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'permisos':
                $modificar = "update instructor set permisos = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;


            case 'categoriacurso':
                $this->eliminarCategoriaInstructor($documento);
                for ($i = 0; $i < count($nuevo); $i++) {
                    $modificar = "insert into instructor_categoria values('$documento','$nuevo[$i]')";
                    mysqli_query($this->conexion, $modificar);
                }
                break;

            case 'horarios':
                $this->eliminarHorariosInstructor($documento);
                for ($i = 0; $i < count($nuevo); $i++) {
                    $modificar = "insert into instructor_horarios values('$documento','$nuevo[$i]')";
                    mysqli_query($this->conexion, $modificar);
                }
                break;
        }
    }

    public function modificarAdministrador($documento, $dato, $nuevo)
    {
        switch ($dato) {
            case 'nombre':
                $modificar = "update administrador set nombre = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'apellido':
                $modificar = "update administrador set apellido = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaNacimiento':
                $modificar = "update administrador set fechaNacimiento = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'telefono':
                $modificar = "update administrador set telefono = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'correo':
                $modificar = "update administrador set correo = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'username':
                $modificar = "update administrador set username = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'passwrd':
                $modificar = "update administrador set passwrd = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'permisos':
                $modificar = "update administrador set permisos = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;
        }
    }

    // Modificaciones de Vehiculos en Tablas
    public function modificarVehiculo($matricula, $dato, $nuevo)
    {
        switch ($dato) {
            case 'modelo':
                $modificar = "update vehiculo set modelo = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'motor':
                $modificar = "update vehiculo set motor = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'combustible':
                $modificar = "update vehiculo set combustible = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'medida':
                $modificar = "update vehiculo set medida = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'situacionActual':
                $modificar = "update vehiculo set situacionActual = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'kilometraje':
                $modificar = "update vehiculo set kilometraje = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'categoria':
                $modificar = "update vehiculo set categoria = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;
        }
    }

    // Modificaciones de Cursos en Tablas

    public function modificarCurso($codigocurso, $dato, $nuevo)
    {
        var_dump($dato);     
        switch ($dato) {
            case 'documentoAlumno':
                $modificar = "update curso set documentoAlumno = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'documentoInstructor':
                $modificar = "update curso set documentoInstructor = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'matricula':
                $modificar = "update curso set matricula = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'precio':
                $modificar = "update curso set precio = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'hora':
                $modificar = "update curso set hora = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'fecha':
                $modificar = "update curso set fecha = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'tipoLibreta':
                $modificar = "update curso set tipoLibreta = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'resultado':
                $modificar = "update curso set resultado = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'tipo':
                $modificar = "update curso set Tipo = '$nuevo' where codigo = '$codigocurso'";
                mysqli_query($this->conexion, $modificar);
                break;
        }
    }

    public function modificarCursoFecha($usuario, $fecha, $hora)
    {
        $usuario = mysqli_real_escape_string($this->conexion, $usuario);

        $query = "UPDATE curso SET fecha = '$fecha', hora = '$hora' 
                  WHERE documentoAlumno = (SELECT documentoAlumno FROM alumno 
                  WHERE username = '$usuario') AND fecha = '0000-00-00' LIMIT 1";

        mysqli_query($this->conexion, $query);
    }

    /******************************************/
    /* PREGUNTAS AUTOTEST TEORICO DE MANEJO  */
    /******************************************/

    Public function traerPreguntas($limite = 30) {
        if ($this->conexion->connect_error) die("Error de conexión: " . $this->conexion->connect_error);

        $sql_preguntas = "SELECT * FROM preguntas ORDER BY RAND() LIMIT $limite";
        return $this->conexion->query($sql_preguntas);
    }
    public function traerOpciones($id_pregunta) {
        $sql_opciones = "SELECT * FROM opciones WHERE id_pregunta = $id_pregunta ORDER BY RAND()";
            $result_opciones = $this->conexion->query($sql_opciones);
        $opciones = [];


        while ($opcion = $result_opciones->fetch_assoc()) {
            $opciones[] = $opcion;
        }


        return $opciones;
    }

    public function traerRespuestaCorrecta($id_pregunta) {
        $sql = "SELECT respuesta_correcta FROM preguntas WHERE id_pregunta = $id_pregunta";
        $resultado = $this->conexion->query($sql)->fetch_assoc();
        return $resultado['respuesta_correcta'];
    }

    /**************************************/
    /*           LOG IN                   */
    /**************************************/

    // LogIn
    public function logueo($username, $password)
    {

        $consulta = "select * from alumno where username = '$username' and passwrd = '$password'";
        $resultado = mysqli_query($this->conexion, $consulta);
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        if (count($arreglo) == 0) {
            $consulta = "select * from instructor where username = '$username' and passwrd = '$password'";
            $resultado = mysqli_query($this->conexion, $consulta);
            $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

            if (count($arreglo) == 0) {
                $consulta = "select * from administrador where username = '$username' and passwrd = '$password'";
                $resultado = mysqli_query($this->conexion, $consulta);
                $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            }
        }
        return count($arreglo);
    }

    // Permisos
    public function comprobarPermisos($username)
    {
        $consulta = "select permisos from alumno where username = '$username'";
        $resultado = mysqli_query($this->conexion, $consulta);
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        if (count($arreglo) == 0) {
            $consulta = "select permisos from instructor where username = '$username'";
            $resultado = mysqli_query($this->conexion, $consulta);
            $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

            if (count($arreglo) == 0) {
                $consulta = "select permisos from administrador where username = '$username'";
                $resultado = mysqli_query($this->conexion, $consulta);
                $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            }
        }
        return $arreglo;
    }

    
    /**************************************/
    /*             SELECCIONES            */
    /**************************************/

    /********************************************************************************/


    //Seleccionar Especifico

    public function seleccionarAdmin($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select * from administrador where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }
    public function seleccionarDocumentoAdmin($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select documentoAdmin from administrador where username = '$username' and activo = 1");
        $fila = mysqli_fetch_assoc($resultadoAlumno);
        
        return $fila ? $fila['documentoAdmin'] : null;
    }

    public function seleccionarNombreAdmin($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select nombre from administrador where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['nombre'] : null;
    }

    public function seleccionarApellidoAdmin($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select apellido from administrador where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['apellido'] : null; 
    }
    
    public function seleccionarFechaNacAdmin($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select fechaNacimiento from administrador where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['fechaNacimiento'] : null;
    }

    public function seleccionarTelefonoAdmin($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select telefono from administrador where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['telefono'] : null;
    }

    public function seleccionarCorreoAdmin($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select correo from administrador where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['correo'] : null;
    }  

    public function seleccionarAlumno($username)
    {
        $resultadoAlumno = mysqli_query($this->conexion, "select * from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ;
    }

    public function seleccionarDocumentoAlumno($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select documentoAlumno from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['documentoAlumno'] : null;
    }

    public function seleccionarNombreAlumno($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select nombre from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['nombre'] : null;
    }

    public function seleccionarApellidoAlumno($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select apellido from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['apellido'] : null;
    }

    public function seleccionarFechaNacAlumno($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select fechaNacimiento from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['fechaNacimiento'] : null;
    }

    public function seleccionarTelefonoAlumno($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select telefono from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['telefono'] : null;
    }

    public function seleccionarCorreoAlumno($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select correo from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['correo'] : null;
    }

    public function seleccionarInstructor($username)
    {
        $resultadoAlumno = mysqli_query($this->conexion, "select * from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarDocumentoInstructor($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select documentoInstructor from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['documentoInstructor'] : null;
    }

    public function seleccionarNombreInstructor($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select nombre from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['nombre'] : null;
    }

    public function seleccionarApellidoInstructor($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select apellido from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['apellido'] : null;
    }

    public function seleccionarFechaNacInstructor($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select fechaNacimiento from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['fechaNacimiento'] : null;
    }

    public function seleccionarTelefonoInstructor($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select telefono from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['telefono'] : null;
    }

    public function seleccionarCorreoInstructor($username){
        $resultadoAlumno = mysqli_query($this->conexion, "select correo from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo ? $arreglo[0]['correo'] : null;
    }


    // Seleccionar Tabla completa

    public function seleccionarPreguntas(){
        $resultado = mysqli_query($this->conexion,"SELECT * FROM TablaPreguntas");
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarAlumnos()
    {
        $resultadoAlumno = mysqli_query($this->conexion, "SELECT * FROM TablaAlumnos");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }


    public function seleccionarCategorias()
    {
        $resultadoCategorias = mysqli_query($this->conexion, "select * from alumno_libreta");
        $arreglo = mysqli_fetch_all($resultadoCategorias, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarInstructores()
    {
        $resultadoInstructores = mysqli_query($this->conexion, "select * from tablaInstructores");
        $arreglo = mysqli_fetch_all($resultadoInstructores, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarCategoriacurso()
    {
        $resultadoCategoriacurso = mysqli_query($this->conexion, "select * from instructor_categoria");
        $arreglo = mysqli_fetch_all($resultadoCategoriacurso, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarHorarios()
    {
        $resultadoHorarios = mysqli_query($this->conexion, "select * from instructor_horarios");
        $arreglo = mysqli_fetch_all($resultadoHorarios, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarAdministradores()
    {
        $resultadoAdministrador = mysqli_query($this->conexion, "select * from TablaAdmin");
        $arreglo = mysqli_fetch_all($resultadoAdministrador, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarVehiculos()
    {
        $resultadoVehiculos = mysqli_query($this->conexion, "select * from TablaVehiculos");
        $arreglo = mysqli_fetch_all($resultadoVehiculos, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarCursos()
    {
        $resultadocursos = mysqli_query($this->conexion, "select * from TablaClases");
        $arreglo = mysqli_fetch_all($resultadocursos, MYSQLI_ASSOC);
        return $arreglo;
    }

    /********************************************************************************/

    public function seleccionarAlumnoPorDocumento($documento) {
        $consulta = "SELECT * FROM alumno WHERE documentoAlumno = '$documento'";
        $resultado = mysqli_query($this->conexion, $consulta);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }


    public function seleccionarInstructorPorDocumento($documento) {
        $consulta = "SELECT * FROM instructor WHERE documentoInstructor = '$documento'";
        $resultado = mysqli_query($this->conexion, $consulta);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }


    public function seleccionarAdministradorPorDocumento($documento) {
        $consulta = "SELECT * FROM administrador WHERE documentoAdmin = '$documento'";
        $resultado = mysqli_query($this->conexion, $consulta);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }

    public function seleccionarPDF() {
        $resultado = mysqli_query($this->conexion, "SELECT * FROM pdfDocumentos");
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $arreglo;
    }


    public function seleccionarDocumentoInstructorArray($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select documentoInstructor from instructor where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }
    public function seleccionarDocumentoAlumnoArray($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select documentoAlumno from alumno where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }

        public function seleccionarDocumentoAdminArray($username) {
        $resultadoAlumno = mysqli_query($this->conexion, "select documentoAdmin from administrador where username = '$username' and activo = 1");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }



    //////////////////////////////

public function seleccionarCursoUsuario($usuario)
    {
        $usuario = mysqli_real_escape_string($this->conexion, $usuario);
        $resultadocursos = mysqli_query($this->conexion, "SELECT fecha, hora 
            FROM curso 
            WHERE documentoAlumno = (
                SELECT documentoAlumno 
                FROM alumno 
                WHERE username = '$usuario'
            )");

        $arreglo = mysqli_fetch_all($resultadocursos, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarFotoPerfil($usuario)
    {
        $usuario = mysqli_real_escape_string($this->conexion, $usuario);
        $rutaFoto = mysqli_query($this->conexion, "SELECT profileImage 
            FROM alumno 
            WHERE username = '$usuario'");

        $arreglo = mysqli_fetch_row($rutaFoto);
        return $arreglo;

    }



    public function modificarFotoPerfil($usuario, $nuevo)
    {
        $usuario = mysqli_real_escape_string($this->conexion, $usuario);
        $query = "UPDATE Alumno SET profileImage = '$nuevo' WHERE username = '$usuario'";

        mysqli_query($this->conexion, $query);
    }

   public function eliminarPDF($codigoPDF)
    {
        $eliminar = "delete from pdfDocumentos where id = '$codigoPDF'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function ingresarPDF($rutaArchivo)
        {
            $insertar = "INSERT INTO pdfDocumentos (rutaArchivo) VALUES ('$rutaArchivo')";
            return mysqli_query($this->conexion, $insertar);
        }
    }

    