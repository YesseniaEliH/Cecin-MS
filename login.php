<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
  </head>
  <body class="">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <img class="img-responsive img-circle"src="img/logo.png" alt="">
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-lock"></span> Ingreso al Sistema</div>
                    <div class="panel-body">
                      <form class="form-horizontal" role="form" name="log" action="checkLogin.php" method="post" onSubmit= "window.close();">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Usuario</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomusu"class="form-control" id="nomusu" placeholder="Nombre de usuario" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                                Contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" name="passusu" class="form-control" id="passusu" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/>
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input name="submit" type="submit" value="Ingresar" class="btn btn-success btn-sm">
                                <button type="reset" class="btn btn-default btn-sm">
                                    Limpiar</button>
                            </div>
                        </div>
                      </form>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  </body>
</html>
