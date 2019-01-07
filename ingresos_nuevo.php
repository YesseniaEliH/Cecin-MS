<?php
	if (isset($_GET['opcion'])) {
		$opcion = $_GET['opcion'];
		require 'bd/conexion.php';
		$sql1 = "SELECT * FROM T_concepto WHERE codcon = '$opcion'";
		$result1 = sqlsrv_query($conn, $sql1);
		$row1 = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC);
	}
?>
<script type="text/javascript">
var parametro;
function popup()
{
	parametro = window.open("ventanaBuscarAlumno.php","","width=490,height=540");
	parametro.document.getElementById('nomalu').value = "cod" ;
	parametro.document.getElementById('codalu').value = "name" ;
}
function buscar(){
	var opcion = document.getElementById('codcon').value;
	window.location.href = 'http://localhost:81/CECIN-ms/ingresos_nuevo.php?opcion='+opcion;
}
</script>
<?php

	require_once('headerA.php');
		$status_message = "";
		$status = "none";

		if(isset($_POST['submit'])){

		$tsql= "
			INSERT INTO [dbo].[T_docingresos]
			   ([tipdoc]
			   ,[serdoc]
			   ,[nrodoc]
			   ,[fechadoc]
			   ,[codcon]
			   ,[mondoc]
			   ,[codalu]
			   ,[estdoc]
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
		$params[] = $_POST["tipdoc"];
		$params[] = $_POST["serdoc"];
		$params[] = $_POST["nrodoc"];
		$params[] = $_POST["fechadoc"];
		$params[] = $_POST["codcon"];
		$params[] = $_POST["mondoc"];
		$params[] = $_POST["codalu"];
		$params[] = $_POST["estdoc"];

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
		width: auto;
	}
</style>
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
<form role="form" name="form1" method="post" action="">
	<fieldset class="scheduler-border">
		<legend class="scheduler-border">REGISTRO DE INGRESOS</legend>
			<div class="row">
		        <div class="col-lg-12">
		            <!--<div class="panel panel-default">-->
		                <div class="panel-body">
		                        <div class="row">
		                        	<div class="col-sm-12">
																<div class="col-sm-4 col-sm-offset-2">
																	<div class="form-group">
																			<label>Concepto de pago</label>
																			<select class="form-control"  name="codcon" id="codcon" onchange="return buscar();">
																					<option value="<?php if ($result1) {echo $row1['codcon'];} ?>"><?php if (isset($result1)) {echo $row1['descon'];}else {
																						echo "Seleccione un concepto";
																					} ?></option>
																					<?php
																					require 'bd/conexion.php';
																					$sql = "SELECT * FROM T_concepto ";
																					$result = sqlsrv_query($conn, $sql);
																					while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
																						?>
																							<option value="<?php echo $row['codcon']; ?>"><?php echo utf8_encode($row['descon']); ?></option>
																						<?php
																					}
																					?>
																			</select>
																	</div>
															</div>
																			<div class="col-sm-3 col-sm-offset-0">
																				<label>Monto de pago</label>
																					<div class=" input-group form group">

																					<span class="input-group-addon">S/.</span>
																						<input name="mondoc" type="number"  class="form-control" value="<?php if ($result1) {echo $row1['monto'];} ?>">

																				</div>
																			</div>
																</div>
															</div>
															<br />
															<div class="row">
																<div class="col-lg-12">
																	<center><label>Tipo de documento de ingreso<label/></center>
																	<div class=" col-sm-3 col-sm-offset-2 form-check form-check-inline">

																		<label class="form-check-label">
																			<input class="form-check-input" type="radio" name="tipdoc" id="inlineRadio1" value="1" checked=""> Boleta de venta
																		</label>
																	</div>
																	<div class=" col-sm-2 col-sm-offset-0 form-check form-check-inline">
																		<label class="form-check-label">
																			<input class="form-check-input" type="radio" name="tipdoc" id="inlineRadio2" value="2"> Factura
																		</label>
																	</div>
																	<div class=" col-sm-2 col-sm-offset-0 form-check form-check-inline ">
																		<label class="form-check-label">
																			<input class="form-check-input" type="radio" name="tipdoc" id="inlineRadio3" value="3"> Recibo
																		</label>
																	</div>
																</div>
															</div>
															<br />
																<div class="row">
	 	 		                        	<div class="col-sm-12">
				                            <div class="col-sm-3 col-sm-offset-2">
				                                <div class="form-group">
				                            		<label>Serie de documento</label>
				                                	<input name="serdoc" type="number"  class="form-control">
				                                	<p class="help-block">Ingrese serie de documento.</p>
				                          		</div>
				                            </div>
				                            <div class="col-sm-3 col-sm-offset-0">
		                                		<div class="form-group">
		                            				<label>Numero de documento</label>
		                                			<input name="nrodoc" type="number"  class="form-control">
		                                			<p class="help-block">Ingrese numero de documento.</p>
		                          				</div>
		                            		</div>

				                            <div class="col-sm-3 col-sm-offset-0">
				                                <div class="form-group">
				                            		<label>Fecha de pago</label>
				                                	<input name="fechadoc" type="date"  class="form-control">
				                          		</div>
				                            </div>
																</div>
															</div>

		                            <div class="row">
		                        		<div class="col-lg-12">
																	<div class="col-sm-1 col-sm-offset-2">
																		<div class="form-group">
																			<label>Ver</label><br>
																			<input name="" type="button" class="btn btn-success" onClick="popup()" value="...">
																		</div>
																	</div>
				                            <div class="col-sm-3 col-sm-offset-0">
				                                <div class="form-group">
				                            		<label>Codigo de alumno</label>
				                                	<input name="codalu" id="codalu" type="text"  class="form-control" readonly>

				                          		</div>
				                            </div>
                        					<div class="col-sm-5 col-sm-offset-0">
				                                <div class="form-group">
				                            		<label>Nombre del alumno</label>
				                                	<input name="nomalu" id="nomalu" type="text" class="form-control">
				                          		</div>
				                            </div>
				                        </div>
				                    </div>
													</br>
				                <center><label>Estado de pago</center></label>
				                	<div class="row">
		                        		<div class="col-sm-12">
		                        			<div class=" col-sm-3 col-sm-offset-2 form-check form-check-inline">

		  										<label class="form-check-label">
		    									<input class="form-check-input" type="radio" name="estdoc" id="estdoc" value="1" checked> Cancelado
		  										</label>
											</div>
											<div class=" col-sm-3 col-sm-offset-0 form-check form-check-inline">

		  										<label class="form-check-label">
		    									<input class="form-check-input" type="radio" name="estdoc" id="estdoc" value="0"> Pendiente
		  										</label>
											</div>
				                        </div>
		                        	</div>
				                </div>

				                <br/>
		                            <div class="col-sm-3 col-sm-offset-5 col-xs-offset-3">
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
		        <!-- /.col-lg-12 -->
		    	</div>
			</div>
	</fieldset>
</form>
