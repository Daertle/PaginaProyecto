<?php
require_once 'Usuario.php';
require_once 'Instructor.php';
require_once 'Administrador.php';
require_once 'Alumno.php';
require_once 'Vehiculo.php';
require_once 'BaseDatos.php';
require_once 'Curso.php';

class Controlador{

    private $base;

    public function __construct()
    {
        $this->base = new BaseDatos();
    }

    /* Casos de uso */

    /********************************/
    /*           ALTAS              */
    /********************************/

    /* Alta Usuarios */

    public function altaAlumno(string $documento, string $nombre, string $apellido, string $fecha_nac, string $telefono, string $correo, string $username, string $password, array $categoriaLibreta, string $estadoTeorico, string $permisos, string $fechaIns)
    {
        $alumno = new Alumno($estadoTeorico, $documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos, $fechaIns);
        $this->base->ingresarAlumno($alumno);
        $alumno->setCategoriaLibreta($categoriaLibreta);
        $this->base->ingresarCategoriaAlumnos($alumno);
    }

    public function altaInstructor(array $horarios, array $categoriaClase, String $documento, String $nombre, String $apellido, String $fecha_nac, String $telefono, String $correo, String $username, String $password, string $permisos)
    {
        $instructor = new Instructor($documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos);
        $this->base->ingresarInstructor($instructor);
        $instructor->setCategoriaClase($categoriaClase);
        $this->base->ingresarCategoriaInstructores($instructor);
        $instructor->setHorarios($horarios);
        $this->base->ingresarHorariosInstructores($instructor);
    }

    public function altaAdministrador(String $documento, String $nombre, String $apellido, String $fecha_nac, String $telefono, String $correo, String $username, String $password, String $permisos)
    {
        $administrador = new Administrador($documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos);
        $this->base->ingresarAdministrador($administrador);
    }

    /* Alta Vehiculo */

    public function altaVehiculo(string $matricula, string $modelo, string $motor, string $combustible, string $medida, string $situacionActual, int $kilometraje, string $categoria)
    {
        $vehiculo = new Vehiculo($matricula, $modelo, $motor, $combustible, $medida, $situacionActual, $kilometraje, $categoria);
        $this->base->ingresarVehiculo($vehiculo);
    }

    /* Alta Cursos */

    public function altaCurso(string $documentoAlumno, string $documentoInstructor, string $matricula, int $precio, string $hora, string $fecha, string $tipoLibreta, string $resultado, string $tipo)
    {
        $curso = new Curso($documentoAlumno, $documentoInstructor, $matricula, $precio, $hora, $fecha, $tipoLibreta, $resultado, $tipo, true);
        $this->base->ingresarCurso($curso);
    }

    public function altaPregunta(string $pregunta, string $respuesta, array $opciones)
    {
        
        $this->base->ingresarPregunta($pregunta, $respuesta
     );
        $this->base->ingresarOpciones($pregunta , $opciones);
    }

    

    /********************************/
    /*           BAJAS              */
    /********************************/

    /* Baja Usuarios */

    public function bajaAlumno(String $documento)
    {
        $this->base->eliminarCategoriaAlumno($documento);
        $this->base->eliminarAlumno($documento);
    }

    public function bajaInstructor(String $documento)
    {
        $this->base->eliminarCategoriaInstructor($documento);
        $this->base->eliminarHorariosInstructor($documento);
        $this->base->eliminarInstructor($documento);
    }

    public function bajaAdministrador(String $documento)
    {
        $this->base->eliminarAdministrador($documento);
    }

    /* Baja Vehiculo */

    public function bajaVehiculo(String $matricula)
    {
        $this->base->eliminarVehiculo($matricula);
    }

    /* Baja Cursos */

    public function bajaCurso(String $codigoClase)
    {
        $this->base->eliminarCurso($codigoClase);
        
    }

    public function bajaPregunta(String $codigoPregunta)
    {
        $this->base->eliminarPregunta($codigoPregunta);
    }


    /********************************/
    /*        MODIFICACIONES        */
    /********************************/

    /* Modificar Usuarios */

    public function modificarAlumno($documento, $dato, $nuevo)
    {
        $this->base->modificarAlumno($documento, $dato, $nuevo);
    }

    public function modificarInstructor($documento, $dato, $nuevo)
    {
        $this->base->modificarInstructor($documento, $dato, $nuevo);
    }

    public function modificarAdministrador($documento, $dato, $nuevo)
    {
        $this->base->modificarAdministrador($documento, $dato, $nuevo);
    }

    /* Modificar Vehiculo */

    public function modificarVehiculo($matricula, $dato, $nuevo)
    {
        $this->base->modificarVehiculo($matricula, $dato, $nuevo);
    }

    /* Modificar Cursos */

    public function modificarClase($codigoClase, $dato, $nuevo)
    {
        $this->base->modificarCurso($codigoClase, $dato, $nuevo);
    }

    public function modificarClaseFecha($usuario, $fecha, $hora){
        $this->base->modificarCursoFecha($usuario, $fecha, $hora);
    }

    /********************************/
    /*          AUTOTEST           */
    /********************************/

    public function obtenerPreguntas($limite = 30) {
        $preguntas = $this->base->traerPreguntas($limite);
        $preguntasConOpciones = [];


        while ($pregunta = $preguntas->fetch_assoc()) {
            $id_pregunta = $pregunta['id_pregunta'];
            $opciones = $this->base->traerOpciones($id_pregunta);
            $pregunta['opciones'] = $opciones;
            $preguntasConOpciones[] = $pregunta;
        }


        return $preguntasConOpciones;
    }


    public function obtenerRespuestaCorrecta($id_pregunta) {
        return $this->base->traerRespuestaCorrecta($id_pregunta);
    }


    /********************************/
    /*           LOG IN             */
    /********************************/

    /* LogIn */

    public function logIn(String $username, String $password)
    {
        $usuario = $this->base->logueo($username, $password);
        return $usuario;
    }

    /* Comprobar Permisos */

    public function comprobarPermiso(String $username)
    {
        $permiso = $this->base->comprobarPermisos($username);
        return $permiso;
    }


    /********************************/
    /*           TRAER TABLA        */
    /********************************/

    /* Traer Usuarios Especificos */

    public function seleccionarAlumo(String $username){
        return $this->base->seleccionarAlumno($username);
    }

    public function seleccionarDocumentoAlumno(String $username){
        return $this->base->seleccionarDocumentoAlumno($username);
    }

    public function seleccionarNombreAlumno(String $username){
        return $this->base->seleccionarNombreAlumno($username);
    }

    public function seleccionarApellidoAlumno(String $username){
        return $this->base->seleccionarApellidoAlumno($username);
    }
    public function seleccionarFechaNacAlumno(String $username){
        return $this->base->seleccionarFechaNacAlumno($username);
    }

    public function seleccionarTelefonoAlumno(String $username){
        return $this->base->seleccionarTelefonoAlumno($username);
    }

    public function seleccionarCorreoAlumno(String $username){
        return $this->base->seleccionarCorreoAlumno($username);
    }

    public function seleccionarInstructor(String $username){
        return $this->base->seleccionarInstructor($username);
    }

    public function seleccionarDocumentoInstructor(String $username){
        return $this->base->seleccionarDocumentoInstructor($username);
    }

    public function seleccionarNombreInstructor(String $username){
        return $this->base->seleccionarNombreInstructor($username);
    }

    public function seleccionarApellidoInstructor(String $username){    
        return $this->base->seleccionarApellidoInstructor($username);
    }

    public function seleccionarFechaNacInstructor(String $username){
        return $this->base->seleccionarFechaNacInstructor($username);
    }

    public function seleccionarCorreoInstructor(String $username){
        return $this->base->seleccionarCorreoInstructor($username);
    }

    public function seleccionarTelefonoInstructor(String $username){
        return $this->base->seleccionarTelefonoInstructor($username);
    }

    public function seleccionarAdministrador(String $username){
        return $this->base->seleccionarAdmin($username);
    }

    public function seleccionarDocumentoAdmin(String $username){
        return $this->base->seleccionarDocumentoAdmin($username);
    }

    public function seleccionarNombreAdmin(String $username){
        return $this->base->seleccionarNombreAdmin($username);
    }

    public function seleccionarApellidoAdmin(String $username){    
        return $this->base->seleccionarApellidoAdmin($username);
    }

    public function seleccionarFechaNacAdmin(String $username){
        return $this->base->seleccionarFechaNacAdmin($username);
    }

    public function seleccionarCorreoAdmin(String $username){
        return $this->base->seleccionarCorreoAdmin($username);
    }

    public function seleccionarTelefonoAdmin(String $username){
        return $this->base->seleccionarTelefonoAdmin($username);
    }

    

    /* Traer Tabla Usuarios*/

    public function traerTablaAlumnos()
    {
        return $this->base->seleccionarAlumnos();
    }

    public function traerTablaInstructores()
    {
        return $this->base->seleccionarInstructores();
    }

    public function traerTablaAdministradores()
    {
        return $this->base->seleccionarAdministradores();
    }

    public function traerTablaCategorias()
    {
        return $this->base->seleccionarCategorias();
    }

    public function traerTablaCategoriaClase()
    {
        return $this->base->seleccionarCategoriacurso();
    }

    public function traerTablaHorarios()
    {
        return $this->base->seleccionarHorarios();
    }

    /* Traer Tabla Vehiculos */

    public function traerTablaVehiculos()
    {
        return $this->base->seleccionarVehiculos();
    }

    /* Traer Tabla Cursos */

    public function traerTablaClases()
    {
        return $this->base->seleccionarCursos();
    }

    /* Traer Tabla Preguntas */
                                                                                                                                                                                                  
    public function traerTablaPreguntas()
    {
        return $this->base->seleccionarPreguntas();
    }
   
}