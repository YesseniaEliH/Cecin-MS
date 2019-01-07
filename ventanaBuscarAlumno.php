<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listar Alumnos</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

  <!-- Para exportar en excel y pdf -->
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
  <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">

</head>
<script language="javascript">

function envia(cod, name){
  opener.document.form1.codalu.value = cod;
  opener.document.form1.nomalu.value = name;
  close();
}
$(document).ready(function () {
  $('#entradafilter').keyup(function () {
     var rex = new RegExp($(this).val(), 'i');
       $('.contenidobusqueda tr').hide();
       $('.contenidobusqueda tr').filter(function () {
           return rex.test($(this).text());
       }).show();

    })
});
</script>



<form role="form" enctype="multipart/form-data" name="form2">
  <div class="input-group"> <span class="input-group-addon">Buscar Alumno</span>
<input id="entradafilter" type="text" class="form-control">
</div>
  <div class="row">
    <div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-offset-2 col-sm-8">
        <h3 class="text-center"> <small class="mensaje"></small></h3>
      </div>
      <div class="table-responsive col-sm-12 form-check form-check-inline">
        <table id="t_alumno" class="table table-bordered table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Código</th>
              <th>Alumno</th>
            </tr>
          </thead>
          <tbody class="contenidobusqueda">
            <?php
            include 'bd/conexion.php';
            $sql = "SELECT * FROM T_alumno ";
            $result = sqlsrv_query($conn, $sql);
            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
              ?>
            <tr>
                <td><a href="#" onclick="envia('<?php echo $row["codalu"]; ?>', '<?php echo $row["nomalu"]." ".$row["appalu"]." ".$row["apmalu"]; ?>');"><?php echo utf8_encode($row["codalu"])?></a></td>
                <td><a href="#" onclick="envia('<?php echo $row["codalu"]; ?>', '<?php echo $row["nomalu"]." ".$row["appalu"]." ".$row["apmalu"]; ?>');"><?php echo utf8_encode($row["nomalu"]." ".$row["appalu"]." ".$row["apmalu"]); ?></a></td>
            </tr>
            <?php
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</form>

<?php
include 'footerA.php';
?>
