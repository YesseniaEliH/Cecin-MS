<?php
require_once('headerA.php');
	$status_message = "";
	$status = "none";

	if(isset($_POST['submit'])){

	$tsql= "
			INSERT INTO [dbo].[T_modulo]
			   ([codmod]
			   ,[nommod]
			   )
		 	VALUES
			   (?
			   ,?);";
		$params = array();
		$params[] = $_POST["codmod"];
		$params[] = $_POST["nommod"];

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
<style>
	fieldset.scheduler-border {
	    border: 1px solid #121bb8 !important;
	    padding: 0 1.4em 1.4em 1.4em !important;
	    margin: 0 10px 1.5em 10px !important;
	    -webkit-box-shadow:  0px 0px 0px 0px #000;
	    box-shadow:  0px 0px 0px 0px #000;
	}

	legend.scheduler-border {
	    font-size: 1.2em !important;
	    font-weight: bold !important;
	    text-align: center; !important;
	    border:none;
		width:300px
	}
</style>

<form role="form" method="POST" action="">
	<fieldset class="scheduler-border">
		<legend class="scheduler-border">REGISTRO DE MÓDULOS</legend>
			<div class="row">
		        <div class="col-lg-12">
		            <!--<div class="panel panel-default">-->
		                <div class="panel-body">
		                    <div class="row">
		                        <div class="col-lg-12">
		                            <div class="col-sm-4 col-sm-offset-4 ">
		                                <div class="form-group">
		                                    <!--<label>Codigo de modulo</label>-->
		                                    <input name="codmod" id="nommod" type="hidden" class="form-control" value="mod00007">
		                                </div>
		                            </div>

		                            <div class="col-sm-4 col-sm-offset-4">
		                                <div class="form-group">
		                            		<label>Nombre de módulo</label>
		                                	<input name="nommod" id="nommod" type="text" class="form-control">
		                                	<p class="help-block">Ingrese módulo.</p>
		                          		</div>
		                            </div>
		                            <div class="col-sm-4 col-sm-offset-5 col-xs-offset-3">
			                            <div class="form-group">
			                            	<button type="submit" name="submit" class="btn btn-success">Guardar</button>
			    													<button type="reset" class="btn btn-success">Limpiar</button>
			                        	</div>
			                        </div>
		                    	</div>
		                    <!-- /.row (nested) -->
		                	</div>
		                <!-- /.panel-body -->
		              	</div>
			        <!--</div>-->
		    	</div>
			</div>
	</fieldset>
</form>
<div class="col-sm-offset-2 col-sm-8">
	<p class="mensaje"></p>
</div>
<?php
require_once('footerA.php');
?>
