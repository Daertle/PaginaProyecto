<?php include '../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

<!DOCTYPE html>
<html>
  <head>
  
    <title> Html Prueba</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  </head>

  <body>
  <a href="Formularios.html.php"> Volver</a>

  <form action="../../../BackEnd/Gestion de Usuarios/AltaUsuarios.php" method="post"> 

  <div class="container">
	
	  <h1 class="display-4">Ingresando Usuarios</h1>

	<!-- ####################################################################   -->
	<!-- ######################	    	DATOS		   ######################   -->
	<!-- ####################################################################   -->

	<div class="row"> 
		<div class="col-md-12">

      <br>
			
	<!-- Opcion -->
	<div class="form-group">
		<select id="txtOpcion" name="txtOpcion" class="form-control"> 
			<option value="alumno"> Alumno </option> 
			<option value="instructor"> Instructor </option>
			<option value="administrador"> Administrador </option> 	
    </select>
	</div>

  <!-- Documento -->
  <div class="form-group">
	    <input type="text" name="txtDocumento" id="txtDocumento" class="form-control" placeholder="Documento">
	</div>

	<!-- Nombre -->
	<div class="form-group">
	    <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Nombre">
	</div>

  <!-- Apellido -->
	<div class="form-group">
    <input type="text" name="txtApellido" id="txtApellido" class="form-control" placeholder="Apellido">
  </div>

  <!-- Fecha Nacimiento -->
	<div class="form-group">
    <input type="text" name="txtFN" id="txtFN" class="form-control" placeholder="Fecha Nacimiento: año/mes/dia">
  </div>
  
  <!-- Telefono -->
	<div class="form-group">
    <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" placeholder="Telefono">
  </div>

  <!-- Correo Electronico -->
	<div class="form-group">
    <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" placeholder="Correo Electronico">
  </div>

  <!-- Username -->
	<div class="form-group">
    <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username">
  </div>

  <!-- Password -->
	<div class="form-group">
    <input type="text" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password">
  </div>
	
  <!-- Permisos -->
  <div class="form-group">
		<select id="txtPermisos" name="txtPermisos" class="form-control"> 
			<option value="admin"> Admin </option> 
			<option value="owner"> Owner </option>
      <option value="usuario"> Usuario </option>
      <option value="instructor"> Instructor </option>
    </select>
	</div>

  <h5>Instructor</h5>
  
  <!-- Horarios -->
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
            
  <h5>Alumno</h5>

  <!-- Estado Teorico -->
	<div class="form-group">
    <input type="text" name="txtEstadoTeorico" id="txtEstadoTeorico" class="form-control" placeholder="Estado Teorico">
  </div>

  <!-- Fecha Inscripcion -->
  <div class="form-group">
    <input type="text" name="txtFI" id="txtFI" class="form-control" placeholder="Fecha Inscripcion: año/mes/dia">
  </div>
  
  <!-- Categoria Libreta -->
    <div class>
        <label for="txtA"> Categoria Libreta A </label>
        <input type="checkbox" name="txtA" id="txtA">
        <br>
        <label for="txtB"> Categoria Libreta B </label>
        <input type="checkbox" name="txtB" id="txtB">
        <br>
        <label for="txtC"> Categoria Libreta C </label>
        <input type="checkbox" name="txtC" id="txtC">
    </div>

	<!-- Boton -->
	<div>
		<input type="submit" class="btn btn-primary"> </button>	
	</div>


</form>

</body>

</script>
</html>