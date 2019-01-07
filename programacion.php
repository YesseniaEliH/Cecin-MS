<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion programacion</title>

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
          <h1 class="page-header">Registro de programacion</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <form role="form" method="post" action="php/subirEgresado.php">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
							<h4 align="center">CODIGO DE PROGRAMACION</h4>
                              <div class="col-sm-5 col-sm-offset-4 ">
                                <div class="form-group">
                                    <!--<LABEL>CODIGO DE PROGRAMACION</LABEL>-->
                                    <input name="codprog" type="text" class="form-control">
                                </div>
                              </div>


                <div class="row">

                    <div class="col-sm-12">
                    <hr />
                    <h4 align="center">CURSO</h4>
                        <div class="col-sm-1 col-sm-offset-4">
                          	<div class="form-group">
                                <label>ver</label><br>
                                <input name="" type="button" class="btn btn-success" value=". . .">
                            </div>
                        </div>

                        <div class="col-sm-1 col-sm-offset-0">
                             <div class="form-group">
                              	<label>Codigo</label>
                                <input name="codcur" type="text"  class="form-control">

							</div>
                        </div>

                    	<div class="col-sm-3 col-sm-offset-0">
                            <div class="form-group">
                                <label>Nombre del curso </label>
                                <input name="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12">
                    <hr />
                    <h4 align="center">DOCENTE</h4>
                        <div class="col-sm-1 col-sm-offset-4">
                          	<div class="form-group">
                                <label>ver</label><br>
                                <input name="listamod" type="button" class="btn btn-success" value=". . .">
                            </div>
                        </div>

                        <div class="col-sm-1 col-sm-offset-0">
                             <div class="form-group">
                              	<label>Codigo</label>
                                <input name="coddoc" type="text"  class="form-control">

							</div>
                        </div>

                    	<div class="col-sm-3 col-sm-offset-0">
                            <div class="form-group">
                                <label>Nombre del docente </label>
                                <input name="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12">
                    <hr />
                    <h4 align="center">LABORATORIO</h4>
                        <div class="col-sm-1 col-sm-offset-4">
                          	<div class="form-group">
                                <label>ver</label><br>
                                <input name="listamod" type="button" class="btn btn-success" value=". . .">
                            </div>
                        </div>

                        <div class="col-sm-1 col-sm-offset-0">
                             <div class="form-group">
                              	<label>Codigo</label>
                                <input name="codlab" type="text"  class="form-control">

							</div>
                        </div>

                    	<div class="col-sm-3 col-sm-offset-0">
                            <div class="form-group">
                                <label>Nombre </label>
                                <input name="nrodoc" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                    <hr />
                    <h4 align="center">HORARIO</h4>
                        <div class="col-sm-1 col-sm-offset-4">
                          	<div class="form-group">
                                <label>ver</label><br>
                                <input name="listamod" type="button" class="btn btn-success" value=". . .">
                            </div>
                        </div>

                        <div class="col-sm-1 col-sm-offset-0">
                             <div class="form-group">
                              	<label>Codigo</label>
                                <input name="codhor" type="text"  class="form-control">

							</div>
                        </div>

                    	<div class="col-sm-3 col-sm-offset-0">
                            <div class="form-group">
                                <label>Descripcion </label>
                                <input name="nrodoc" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                    <hr />
                    <h4 align="center">MODULO</h4>
                        <div class="col-sm-1 col-sm-offset-4">
                          	<div class="form-group">
                                <label>ver</label><br>
                                <input name="listamod" type="button" class="btn btn-success" value=". . .">
                            </div>
                        </div>

                        <div class="col-sm-1 col-sm-offset-0">
                             <div class="form-group">
                              	<label>Codigo</label>
                                <input name="codmod" type="text"  class="form-control">

							</div>
                        </div>

                    	<div class="col-sm-3 col-sm-offset-0">
                            <div class="form-group">
                                <label>Nombre de modulo </label>
                                <input name="nrodoc" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                    <hr />
                            <div class="col-sm-5 col-sm-offset-4 ">
                                <div class="form-group">
                                    <label>Fecha de inicio</label>
                                    <input name="fini" type="date" class="form-control">
                                </div>
                              </div>

                            <div class="col-sm-5 col-sm-offset-4 ">
                                <div class="form-group">
                                    <label>Fecha de termino</label>
                                    <input name="ffin" type="date" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-5 col-sm-offset-4 ">
                                <div class="form-group">
                                    <label>Costo</label>
                                    <input name="costo" type="number" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-5 col-sm-offset-4">
                                <div class="form-group">
                                    <label>Estado de programacion</label>
                                    <div class="radio">
                                        <label>
                                            <input name="estprog" type="radio" name="optionsRadios" id="optionFem" value="1" checked>Activo
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="estprog" type="radio" name="optionsRadios" id="optionMasc" value="0">Inactivo
                                        </label>
                                    </div>
                                  </div>
                              </div>



                <div class="row">
                    <div class="col-sm-12">

                    	<div class="col-sm-2 col-sm-offset-4">
                            <div class="form-group">
                            	<button type="submit" class="btn btn-success">Guardar</button>

                        	</div>
                        </div>
                        <div class="col-sm-2 col-sm-offset-0">
                        	<div class="form-group">

    							<button type="submit" class="btn btn-success">Cerrar</button>
                        	</div>
                        </div>


                </div>


                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
              </div>


        </div>
        <!-- /.col-lg-12 -->
    </div>

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
