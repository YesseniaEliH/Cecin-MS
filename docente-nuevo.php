<?php
require_once('headerA.php');
$status_message = "";
$status = "none";

if(isset($_POST['submit'])){

	$tsql= "
		INSERT INTO [dbo].[T_docente]
           ([coddoc]
           ,[tipodoc]
           ,[nrodoc]
					 ,[nomdoc]
					 ,[appdoc]
					 ,[apmdoc]
					 ,[teldoc]
					 ,[direcdoc]
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
	$params[] = $_POST["coddoc"];
	$params[] = $_POST["tipodoc"];
	$params[] = $_POST["nrodoc"];
	$params[] = $_POST["nomdoc"];
	$params[] = $_POST["appdoc"];
	$params[] = $_POST["apmdoc"];
	$params[] = $_POST["teldoc"];
	$params[] = $_POST["direcdoc"];

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
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ocultar">
			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<h3 class="col-sm-offset-2 col-sm-8 text-center">
					Formulario de Registro de Docentes</h3>
				</div>
				<input type="hidden" id="coddoc" name="coddoc" value="doc0000003">

				<div class="form-group">
					<label for="tipodoc" class="col-sm-2 control-label">Tipo Documento</label>
					<div class="col-sm-8"><input name="tipodoc" id="tipodoc" type="text" class="form-control"  autofocus></div>
				</div>
        <div class="form-group">
          <label for="nrodoc" class="col-sm-2 control-label">Nro de Documento</label>
          <div class="col-sm-8"><input name="nrodoc" id="nrodoc"  type="text" class="form-control" ></div>
        </div>
				<div class="form-group">
					<label for="nomdoc" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-8"><input id="nomdoc" name="nomdoc" type="text" class="form-control" ></div>
				</div>
        <div class="form-group">
          <label for="appdoc" class="col-sm-2 control-label">Apellido Paterno</label>
          <div class="col-sm-8"><input id="appdoc" name="appdoc" type="text" class="form-control" ></div>
        </div>
				<div class="form-group">
					<label for="apmdoc" class="col-sm-2 control-label">Apellido Materno</label>
					<div class="col-sm-8"><input id="apmdoc" name="apmdoc" type="text" class="form-control" ></div>
				</div>
        <div class="form-group">
          <label for="teldoc" class="col-sm-2 control-label">Teléfono</label>
          <div class="col-sm-8"><input id="teldoc" name="teldoc" type="number" class="form-control" maxlength="8" ></div>
        </div>
        <div class="form-group">
          <label for="direcdoc" class="col-sm-2 control-label">direcdoc</label>
          <div class="col-sm-8"><input id="direcdoc" name="direcdoc" type="direcdoc" class="form-control" ></div>
        </div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<input id="" type="submit" class="btn btn-primary" value="Guardar">
						<button type="reset" class="btn btn-default btn-sm">Limpiar</button>
					</div>
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
