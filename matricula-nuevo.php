<?php
require_once('headerA.php');
	$status_message = "";
	$status = "none";

	if(isset($_POST['submit'])){

	$tsql= "
		INSERT INTO [dbo].[T_alumno]
           ([codalu]
           ,[tipodoc]
           ,[nrodoc]
					 ,[nomalu]
					 ,[appalu]
					 ,[apmalu]
					 ,[telalu]
					 ,[correo]
		   )
     VALUES
           (?
           ,?
					 ,?
					 ,?
   		 		 ,?
					 ,?
					 ,?
           ,?);";
	$params = array();
	$params[] = $_POST["codalu"];
	$params[] = $_POST["tipodoc"];
	$params[] = $_POST["nrodoc"];
	$params[] = $_POST["nomalu"];
	$params[] = $_POST["appalu"];
	$params[] = $_POST["apmalu"];
	$params[] = $_POST["telalu"];
	$params[] = $_POST["correo"];

	$getResults= sqlsrv_query($conn, $tsql, $params);
	$rowsAffected = sqlsrv_rows_affected($getResults);
	if ($getResults == FALSE or $rowsAffected == FALSE){

			$status_message = FormatErrors(sqlsrv_errors());
			$status = "error";

		}else{


			$status_message = $rowsAffected. " record inserted: ";
			$status = "success";

		}
	sqlsrv_free_stmt($getResults);

}

?>

<div class="container">
	<?php if($status != "none"){ ?>
		<?php if($status == "success"){ ?>

			<div class="alert alert-success alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Success!</strong> <?php echo $status_message;?>
			</div>

		<?php }elseif($status == "error"){ ?>

			<div class="alert alert-danger alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Error!</strong> <?php echo $status_message;?>
			</div>

		<?php } ?>
	<?php } ?>

	<div class="row">
		<div class="form-group">
			<h3 class="col-sm-offset-2 col-sm-8 text-center">
			Formulario de Registro de Matricula</h3>
		</div>
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ocultar">
			<form role="form" method="post" action="">
		    <div class="row">
		        <div class="col-lg-12">
		            <div class="panel panel-default">

		                <div class="panel-body">
		                    <div class="row">
		                        <div class="col-lg-12">

		                              <div class="col-sm-3 col-sm-offset-4 ">
		                                <div class="form-group">
		                                    <label>Codigo de matricula</label>
		                                    <input name="codmat" type="text" class="form-control">
		                                </div>
		                              </div>

		                              <div class="col-sm-2 col-sm-offset-0 ">
		                              <div class="form-group">
		                                    <label>Codigo de alumno</label>
		                                    <input name="codalu" type="text" class="form-control">
		                                </div>
		                              </div>

		                <div class="row">
		                    <div class="col-sm-12">
		                        <div class="col-sm-3 col-sm-offset-4">
		                          	<div class="form-group">
		                                <label>Codigo de programacion</label><br>
		                                <input name="codpro" type="text"  class="form-control">
		                            </div>
		                        </div>
		                        <div class="col-sm-2 col-sm-offset-0">
		                          	<div class="form-group">
		                                <label>Ver</label><br>
		                                <input name="listamod" type="button" class="btn btn-success" value=". . .">
		                            </div>
		                        </div>

		                    </div>
		                </div>


		                <div class="row">
		                    <div class="col-sm-12">
		                        <div class="col-sm-1 col-sm-offset-4">
		                          	<div class="form-group">
		                                <label>Tipo</label><br>
		                                <input name="tipdoc" type="text"  class="form-control">
		                            </div>
		                        </div>

		                        <div class="col-sm-2 col-sm-offset-0">
		                             <div class="form-group">
		                              	<label>Serie de documento</label>
		                                <input name="serdoc" type="text"  class="form-control">

									</div>
		                        </div>

		                    	<div class="col-sm-2 col-sm-offset-0">
		                            <div class="form-group">
		                                <label>Numero </label>
		                                <input name="nrodoc" type="text" class="form-control">
		                            </div>
		                        </div>
		                    </div>
		                </div>

		                            <div class="col-sm-5 col-sm-offset-4 ">
		                                <div class="form-group">
		                                    <label>Promedio modulo</label>
		                                    <input name="nota1" type="text" class="form-control">
		                                </div>
		                              </div>

		                            <div class="col-sm-5 col-sm-offset-4 ">
		                                <div class="form-group">
		                                    <label>Promedio practica</label>
		                                    <input name="nota2" type="text" class="form-control">
		                                </div>
		                              </div>

		                              <div class="col-sm-5 col-sm-offset-4 ">
		                                <div class="form-group">
		                                    <label>Examen practico</label>
		                                    <input name="nota3" type="text" class="form-control">
		                                </div>
		                              </div>

		                              <div class="col-sm-5 col-sm-offset-4 ">
		                                <div class="form-group">
		                                    <label>Promedio final</label>
		                                    <input name="promf" type="text" class="form-control">
		                                </div>
		                              </div>

		                              <div class="col-sm-5 col-sm-offset-4">
		                                <div class="form-group">
		                                    <label>Entrega de modulo</label>
		                                    <div class="radio">
		                                        <label>
		                                            <input name="entremod" type="radio" name="optionsRadios" id="optionFem" value="1" checked>Si
		                                        </label>
		                                    </div>
		                                    <div class="radio">
		                                        <label>
		                                            <input name="entremod" type="radio" name="optionsRadios" id="optionMasc" value="0">No
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

		    							<button type="submit" class="btn btn-success">Cancelar</button>
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
			<div class="col-sm-offset-2 col-sm-8">
				<p class="mensaje"></p>
			</div>

		</div>
	</div>
	<?php
	require_once('footerA.php');
	?>
