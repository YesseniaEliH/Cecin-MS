<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Egresado</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
	body{
		line-height: 1.20;
	}

</style>
<body class="conf-yess">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header letraYess blanco">Registro de Egresado</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <?php
        include("bd/conexion.php");
        $con=conectarse();
        $result2=$con->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'bd_egresados' AND TABLE_NAME = 'egresado'");
          $row = $result2->fetch_array();
          $nroid=$con->query("SELECT MAX(id) as maximo FROM egresado");
           $r = $nroid->fetch_array();
           $max=$r['maximo'];
      ?>
  <form role="form" method="post" action="php/subirEgresado.php">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Información Básica
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                              <div class="col-sm-4">
                                <div class="form-group">
                                	<!--input que genera id autoincrementado de acuerdo al id maximo de la tabla-->
                                    <input name="e[]" type="hidden" class="form-control" value="<?php echo($max) + 1; ?>">
                                    <label>Código de Matricula</label>
                                    <input name="e[]" type="text" pattern="[0-9]{10}" class="form-control">
                                    <p class="help-block">Ingrese su código de Matrícula.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input name="e[]" type="text" class="form-control">
                                    <p class="help-block">Ingrese su clave.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                    <input name="e[]" type="hidden" class="form-control" value="USUARIO">

                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>DNI</label>
                                    <input name="e[]" type="text" pattern="[0-9]{8}" class="form-control">
                                    <p class="help-block">Ingrese su DNI.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input name="e[]" type="date" class="form-control">
                                    <p class="help-block">Ingrese su fecha de Nacimiento.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input name="e[]" type="text" class="form-control">
                                    <p class="help-block">Ingrese su apellido paterno.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input name="e[]" type="text" class="form-control">
                                    <p class="help-block">Ingrese su apellido materno.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input name="e[]" type="text" class="form-control">
                                    <p class="help-block">Ingrese sus nombres.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <div class="radio">
                                        <label>
                                            <input name="e[]" type="radio" name="optionsRadios" id="optionFem" value="F" checked>Femenino
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="e[]" type="radio" name="optionsRadios" id="optionMasc" value="M">Masculino
                                        </label>
                                    </div>
                                  </div>
                              </div>

                              <!--input para codigo de ciudad-->
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Código de ciudad</label>
                                    <input name="e[]" type="text" pattern="[0-9]{2|3}" class="form-control">
                                    <p class="help-block">Ingrese código de ciudad.</p>
                                </div>

                              </div>
                            <!--input para telefono fijo-->
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Teléfono fijo</label>
                                    <input name="e[]" type="tel" pattern="[0-9]{6|7}" class="form-control">
                                    <p class="help-block">Ingrese su telefono fijo.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Teléfono móvil</label>
                                    <input name="e[]" type="tel" pattern="^[9]\d{8}$" class="form-control">
                                    <p class="help-block">Ingrese su celular.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Correo electrónico</label>
                                    <input name="e[]" type="email" class="form-control" placeholder="alguien@dominio.com">
                                    <p class="help-block">Ingrese su email.</p>
                                </div>

                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fecha de bachiller</label>
                                    <input name="e[]" type="date" class="form-control" placeholder="23/11/1998">
                                    <p class="help-block">Ingrese fecha de expedición de bachiller.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año Ingreso</label>
                                    <input name="e[]" type="year" class="form-control">
                                    <p class="help-block">Ingrese el año en que ingresó.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año Egreso</label>
                                    <input name="e[]" type="year" class="form-control">
                                    <p class="help-block">Ingrese el año de egreso.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Grado de bachiller</label>
                                    <input name="e[]" type="text" class="form-control" placeholder="Ejm. Bachiller en Ciencias Ingeniería de Sistemas">
                                    <p class="help-block">Ingrese su grado de bachiller.</p>
                                </div>
                              </div>

                               <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año de bachiller</label>
                                    <input name="e[]" type="text" class="form-control" value="NULL">
                                    <p class="help-block">Ingrese año de bachiller</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Grado de titulo</label>
                                    <input name="e[]" type="text" class="form-control" placeholder="Ejm. Licenciado en Administración de Empresas">
                                    <p class="help-block">Ingrese su grado de título.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año de título</label>
                                    <input name="e[]" type="text" class="form-control" value="NULL">
                                    <p class="help-block">Ingrese año de expedición de titulo.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Grado de maestro</label>
                                    <input name="e[]" type="text" class="form-control" placeholder="Ejm. Maestro en Ingeniería de Sistemas">
                                    <p class="help-block">Ingrese su grado de maestro.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año de maestría</label>
                                    <input name="e[]" type="text" class="form-control" value="NULL">
                                    <p class="help-block">Ingrese año de expedición de maestría.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Grado de doctor</label>
                                    <input name="e[]" type="text" class="form-control" placeholder="Ejm. Licenciado en Administración de Empresas">
                                    <p class="help-block">Ingrese su grado de doctor.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año de doctorado</label>
                                    <input name="e[]" type="text" class="form-control" value="NULL">
                                    <p class="help-block">Ingrese año de expedición de doctorado.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Numero de Carrera</label>
                                    <input name="e[]" type="number" step="any" min="1" max="5" class="form-control">
                                </div>
                              </div>

                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
              </div>

            <!--panel de domicilio actual-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Domicilio Actual
                </div>
                <div class="panel-body">
                    <div class="row">
                          <div class="col-lg-12">

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Región</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Provincia</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Distrito</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
            </div>

            <!--panel de referencia del trabajo-->
            <div class="panel panel-default">
                <div class="panel-heading">
                   Datos del Trabajo Actual
                </div>
                <div class="panel-body">
                    <div class="row">
                          <div class="col-lg-12">

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Estado actual del trabajo</label>
                                    <p class="help-block"> <h6>¿Usted esta laborando actualmente?</h6></p>
                                    <p></p>
                                    		<select name="e[]" class="selectpicker form-control" required>
                                  				<option value="SI">Si</option>
                    											<option value="NO">No</option>

                                  			</select>

                                  </div>
                                  <p class="help-block"><h6>Si su respuesta es afirmativa rellene los siguientes campos.</h6></p>
                              </div>

                              <div class="col-sm-4">
                                <label>Condición</label>
                                <div class="form-group">
                            		<select name="e[]" class="selectpicker form-control">
                            				<option value="" selected disabled hidden>Seleccione la condición</option>
                            				<option value="NOMBRADO">Nombrado</option>
              											<option value="CONTRATADO">Contratado</option>
              											<option value="OTRO">Otro</option>
                            			</select>
                          		   </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                               <div class="col-sm-4">
                                <label>Sector</label>
                                <div class="form-group">
                            		<select name="e[]" class="selectpicker form-control">
                            				<option value="" selected disabled hidden>Seleccione el sector</option>
                            				<option value="PUBLICO">Público</option>
  											<option value="PRIVADO">Privado</option>
  											<option value="OTRO">Otro</option>
                            			</select>
                          		   </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Cargo</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Sueldo</label>
                                    <div class="input-group">
                                    	<span class="input-group-addon">S/.</span>
                                    	<input name="e[]" type="text" class="form-control">
                                    </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Dirección laboral</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Región</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Provincia</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Distrito</label>
                                    <input name="e[]" type="text" class="form-control">
                                </div>
                              </div>



                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
            </div>




            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <button type="submit" class="btn btn-success">Grabar</button>
</form>
  <!-- /.row -->
  <!-- JS Scripts-->
  <!-- jQuery Js -->
  <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Metis Menu Js -->
  <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>


</body>
</html>
