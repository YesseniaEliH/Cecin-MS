<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listar ingresos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
	<div class="row fondo">
		<div class="col-sm-10 col-md-10 col-lg-10">
			<h1 class="text-center text-uppercase">Gestión de ingresos</h1>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 verticalYess">
			<a href="ingresos_nuevo.php" class="btn btn-primary active" role="button">Nuevo Ingreso</a>
		</div>
	</div>

	<div class="row">
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ocultar">
			<form class="form-horizontal" action="" method="POST">
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-4 col-sm-offset-2">
							<div class="form-group">
									<label>Concepto de pago</label>
									<select class="form-control"  name="codcon" id="codcon" onchange="return buscar();">
										<option selected>Seleccione un concepto</option>
										<option value="con00001">MATRICULA</option>
										<option value="con00002">PENSION</option>
										<option value="con00003">CERTIFICADO DE ESPECIALIDAD</option>
										<option value="con00004">CERTIFICADO DE CURSO LIBRE</option>
										<option value="con00005">EXAMEN DE SUBSANACION</option>
										<option value="con00006">CONSTANCIA</option>
										<option value="con00007">EXAMEN DE UBICACION</option>
										<option value="con00008">CERTIFICADO DE CURSO ESPECIFICO</option>
									</select>
							</div>
					</div>
									<div class="col-sm-3 col-sm-offset-0">
										<label>Monto de pago</label>
											<div class=" input-group form group">

											<span class="input-group-addon">S/.</span>
												<input name="mondoc" id="mondoc" type="number"  class="form-control" value="<?php if ($result1) {echo $row1['monto'];} ?>">

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
									<input class="form-check-input" type="radio" name="tipdoc" id="tipdoc" value="1"> Boleta de venta
								</label>
							</div>
							<div class=" col-sm-2 col-sm-offset-0 form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="tipdoc" id="tipdoc" value="2"> Factura
								</label>
							</div>
							<div class=" col-sm-2 col-sm-offset-0 form-check form-check-inline ">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="tipdoc" id="tipdoc" value="3"> Recibo
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
											<input name="serdoc" id="serdoc" type="number"  class="form-control">
											<p class="help-block">Ingrese serie de documento.</p>
									</div>
								</div>
								<div class="col-sm-3 col-sm-offset-0">
										<div class="form-group">
										<label>Numero de documento</label>
											<input name="nrodoc" id="nrodoc" type="number"  class="form-control">
											<p class="help-block">Ingrese numero de documento.</p>
									</div>
								</div>

								<div class="col-sm-3 col-sm-offset-0">
										<div class="form-group">
										<label>Fecha de pago</label>
											<input name="fechadoc" id="fechadoc" type="date"  class="form-control">
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
				<input class="form-check-input" type="radio" name="estdoc" id="estdoc" value="1"> Cancelado
				</label>
				</div>
				<div class=" col-sm-3 col-sm-offset-0 form-check form-check-inline">

				<label class="form-check-label">
				<input class="form-check-input" type="radio" name="estdoc" id="estdoc" value="0"> Pendiente
				</label>
				</div>
						</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<input id="" type="submit" class="btn btn-primary" value="Guardar">
						<input id="btn_listar" type="button" class="btn btn-primary" value="Listar">
					</div>
				</div>
			</div>
		</div>
			</form>
			<div class="col-sm-offset-2 col-sm-8">
				<p class="mensaje"></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-offset-2 col-sm-8">
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">
				<table id="t_docingresos" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>tipodoc</th>
							<th>serdoc</th>
							<th>numdoc</th>
							<th>Concepto</th>
							<th>Alumno</th>
							<th>Monto</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<div>
		<form id="frmEliminarUsuario" action="" method="POST">
			<input type="hidden" id="codalu" name="codalu" value="">
			<input type="hidden" id="opcion" name="opcion" value="eliminar">
			<!-- Modal -->
			<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h4>
						</div>
						<div class="modal-body">
							¿Está seguro de eliminar al usuario?<strong data-name=""></strong>
						</div>
						<div class="modal-footer">
							<button type="button" id="eliminar-usuario" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
		</form>
	</div>

	<script src="js/jquery-1.12.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<!--botones DataTables-->
	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel-->
	<script src="js/jszip.min.js"></script>
	<!--Librerias para exportar PDF-->
	<script src="js/pdfmake.min.js"></script>
	<script src="js/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación-->
	<script src="js/buttons.html5.min.js"></script>

	<script>
		$(document).on("ready", function(){
			listar();
			guardar();
			eliminar();
		});

		$("#btn_listar").on("click", function(){
			listar();
		});

		var guardar = function(){
			$("form").on("submit", function(e){
				e.preventDefault();
				var frm = $(this).serialize();
				$.ajax({
					method: "POST",
					url: "ingresos-guardar.php",
					data: frm
				}).done( function( info ){
				console.log( info );
					var json_info = JSON.parse( info );
					mostrar_mensaje( json_info );
					limpiar_datos();
					listar();
				});
			});
		}

		var eliminar = function(){
			$("#eliminar-usuario").on("click", function(){
				var codalu = $("#frmEliminarUsuario #codalu").val(),
					opcion = $("#frmEliminarUsuario #opcion").val();
				$.ajax({
					method:"POST",
					url: "ingresos-eliminar.php",
					data: {"codalu": codalu, "opcion": opcion}
				}).done( function( info ){
					var json_info = JSON.parse( info );
					mostrar_mensaje( json_info );
					limpiar_datos();
					listar();
				});
			});
		}

		var mostrar_mensaje = function( informacion ){
			var texto = "", color = "";
			if( informacion.respuesta == "BIEN" ){
					texto = "<strong>Bien!</strong> Se han guardado los cambios correctamente.";
					color = "#379911";
			}else if( informacion.respuesta == "ERROR"){
					texto = "<strong>Error</strong>, no se ejecutó la consulta.";
					color = "#C9302C";
			}else if( informacion.respuesta == "EXISTE" ){
					texto = "<strong>Información!</strong> el usuario ya existe.";
					color = "#5b94c5";
			}else if( informacion.respuesta == "VACIO" ){
					texto = "<strong>Advertencia!</strong> debe llenar todos los campos solicitados.";
					color = "#ddb11d";
			}else if( informacion.respuesta == "OPCION_VACIA" ){
					texto = "<strong>Advertencia!</strong> la opción no existe o esta vacia, recargar la página.";
					color = "#ddb11d";
			}

			$(".mensaje").html( texto ).css({"color": color });
			$(".mensaje").fadeOut(5000, function(){
					$(this).html("");
					$(this).fadeIn(3000);
			});
		}

		var limpiar_datos = function(){
			$("#opcion").val("registrar");
			$("#codalu").val("");
			$("#tipodoc").val("").focus();
			$("#tipdoc").val("");
			$("#serdoc").val("");
      $("#nrodoc").val("");
      $("#fechadoc").val("");
      $("#telalu").val("");
      $("#estdoc").val("");
		}

		var listar = function(){
				$("#cuadro2").slideUp("slow");
				$("#cuadro1").slideDown("slow");
			var table = $("#t_docingresos").DataTable({
				"destroy":true,
				"ajax":{
					"method":"POST",
					"url": "ingresos-listar.php"
				},
				"columns":[
					{"data":"fechad"},
					{"data":"tipdoc"},
					{"data":"serdoc"},
					{"data":"nrodoc"},
					{"data":"descon"},
					{"data":"alumn"},
					{"data":"mondoc"},
					{"defaultContent": "<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
				],
				"language": idioma_espanol,
				"dom": "<'row'<'form-inline' <'col-sm-offset-5'B>>>"
							+"<'row'<'form-inline' <'col-sm-1'f>>>"
							+"<rt>"
							+"<'row'<'form-inline'"
							+"<'col-sm-6 col-md-6 col-lg-6'l>"
							+"<'col-sm-6 col-md-6 col-lg-6'p>>>",
				"buttons":[
					{
						extend:			'pdfHtml5',
						text:				'<i class="fa fa-file-pdf-o"></i>',
						titleAttr: 	'PDF'
					},
					{
						extend:			'csvHtml5',
						text:				'<i class="fa fa-file-text-o"></i>',
						titleAttr: 	'CSV'
					},
					{
						extend:			'excelHtml5',
						text:				'<i class="fa fa-file-excel-o"></i>',
						titleAttr: 	'Excel'
					}
				]
			});

			obtener_data_editar("#t_docingresos tbody", table);
			obtener_id_eliminar("#t_docingresos tbody", table);
		}

		var agregar_nuevo_usuario = function(){
			limpiar_datos();
			$("#cuadro2").slideDown("slow");
			$("#cuadro1").slideUp("slow");
		}

		var obtener_data_editar = function(tbody, table){
			$(tbody).on("click", "button.editar", function(){
				var data = table.row( $(this).parents("tr") ).data();
				var codalu = $("#codcon").val( data.codcon ),
            tipodoc = $("#mondoc").val( data.mondoc ),
            tipdoc = $("#tipdoc").val( data.tipdoc ),
						serdoc = $("#serdoc").val( data.serdoc ),
						nrodoc = $("#nrodoc").val( data.nrodoc ),
            fechadoc = $("#fechadoc").val( data.fechadoc ),
						telalu = $("#estdoc").val( data.estdoc ),
            estdoc = $("#estdoc").val( data.estdoc ),
						opcion = $("#opcion").val("modificar");

						$("#cuadro2").slideDown("slow");
			});
		}

		var obtener_id_eliminar = function(tbody, table){
			$(tbody).on("click", "button.eliminar", function(){
				var data = table.row( $(this).parents("tr") ).data();
				var codalu = $("#frmEliminarUsuario #codalu").val( data.codalu );
			});
		}

		var idioma_espanol = {
		    "sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
		}

	</script>
</body>
</html>
