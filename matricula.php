<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listar Matricula</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
	<div class="row fondo">
		<div class="col-sm-10 col-md-10 col-lg-10">
			<h1 class="text-center text-uppercase">Gestion de Matriculas</h1>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 verticalYess">
			<a href="matricula-nuevo.php" class="btn btn-primary active" role="button">Nueva Matrícula</a>
		</div>
	</div>

	<div class="row">
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ocultar">
			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<h3 class="col-sm-offset-2 col-sm-8 text-center">
					Formulario de Registro de Matricula</h3>
				</div>
				<input type="hidden" id="codmat" name="codmat" value="0">
				<input type="hidden" id="opcion" name="opcion" value="registrar">
				<div class="form-group">
					<label for="tipodoc" class="col-sm-2 control-label">Tipo Documento</label>
					<div class="col-sm-8"><input name="tipodoc" id="tipodoc" type="text" class="form-control"  autofocus></div>
				</div>
        <div class="form-group">
          <label for="serdoc" class="col-sm-2 control-label">Serie Documento</label>
          <div class="col-sm-8"><input name="serdoc" id="serdoc"  type="num" class="form-control" ></div>
        </div>
				<div class="form-group">
					<label for="numdoc" class="col-sm-2 control-label">Numero Documento</label>
					<div class="col-sm-8"><input id="numdoc" name="numdoc" type="num" class="form-control" ></div>
				</div>
        <div class="form-group">
          <label for="codalu" class="col-sm-2 control-label">Alumno</label>
          <div class="col-sm-8"><input id="codalu" name="codalu" type="text" class="form-control" ></div>
        </div>
				<div class="form-group">
					<label for="codprog" class="col-sm-2 control-label">Programacion</label>
					<div class="col-sm-8"><input id="codprog" name="codprog" type="text" class="form-control" ></div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<input id="" type="submit" class="btn btn-primary" value="Guardar">
						<input id="btn_listar" type="button" class="btn btn-primary" value="Listar">
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
				<table id="t_matricula" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Tipo Doc</th>
							<th>Serie</th>
							<th>Numero</th>
              <th>Alumno</th>
              <th>Programación</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<div>
		<form id="frmEliminarUsuario" action="" method="POST">
			<input type="hidden" id="codmat" name="codmat" value="">
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
					url: "matricula-guardar.php",
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
				var codmat = $("#frmEliminarUsuario #codmat").val(),
					opcion = $("#frmEliminarUsuario #opcion").val();
				$.ajax({
					method:"POST",
					url: "matricula-eliminar.php",
					data: {"codmat": codmat, "opcion": opcion}
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
			$("#codmat").val("");
			$("#tipodoc").val("").focus();
			$("#serdoc").val("");
			$("#numdoc").val("");
      $("#codalu").val("");
      $("#codprog").val("");
      $("#telalu").val("");
      $("#correo").val("");
		}

		var listar = function(){
				$("#cuadro2").slideUp("slow");
				$("#cuadro1").slideDown("slow");
			var table = $("#t_matricula").DataTable({
				"destroy":true,
				"ajax":{
					"method":"POST",
					"url": "matricula-listar.php"
				},
				"columns":[
					{"data":"tipodoc"},
					{"data":"serdoc"},
					{"data":"numdoc"},
					{"data":"codalu"},
          {"data":"codprog"},
					{"defaultContent": "<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
				],
				"language": idioma_espanol
			});

			obtener_data_editar("#t_matricula tbody", table);
			obtener_id_eliminar("#t_matricula tbody", table);
		}

		var agregar_nuevo_usuario = function(){
			limpiar_datos();
			$("#cuadro2").slideDown("slow");
			$("#cuadro1").slideUp("slow");
		}

		var obtener_data_editar = function(tbody, table){
			$(tbody).on("click", "button.editar", function(){
				var data = table.row( $(this).parents("tr") ).data();
				var codmat = $("#codmat").val( data.codmat ),
            tipodoc = $("#tipodoc").val( data.tipodoc ),
            serdoc = $("#serdoc").val( data.serdoc ),
						numdoc = $("#numdoc").val( data.numdoc ),
						codalu = $("#codalu").val( data.codalu ),
            codprog = $("#codprog").val( data.codprog ),
						telalu = $("#telalu").val( data.telalu ),
            correo = $("#correo").val( data.correo ),
						opcion = $("#opcion").val("modificar");

						$("#cuadro2").slideDown("slow");
			});
		}

		var obtener_id_eliminar = function(tbody, table){
			$(tbody).on("click", "button.eliminar", function(){
				var data = table.row( $(this).parents("tr") ).data();
				var codmat = $("#frmEliminarUsuario #codmat").val( data.codmat );
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
