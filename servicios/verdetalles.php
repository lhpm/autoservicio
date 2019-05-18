<?php include("../seguridad.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ordenes - Autoservicio</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="bootstrap/js/twitter-bootstrap-hover-dropdown.min.js"></script>
<script>
$(document).ready(function(){
$('[data‐toggle="tooltip"]').tooltip();
});
</script>
      <script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
      </script>  
</head>

<body>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ayuda - Ordenes Realizadas</h4>
      </div>
      <div class="modal-body">
        <p>Los enlaces que están en cada Orden se pueden visualizar los Repuestos que<br />
        se añadieron por cada Orden Realizada.<br />"R": Añadir Repuesto a la orden.<br />
        "E": Editar Repuesto.<br />"X": Eliminar Repuesto.</p>
      </div>
    </div>

  </div>
</div>

<?php include("../encabezado.php"); ?>

<div id="encabezado" style="height:200px;position:absolute;display:block;font-size:1.5em;">
<br />
<h2>Cliente:</h2>
<div class='table‐responsive'>
<table class='table table-hover'>
<thead><th>Documento</th><th>Cliente</th><th>Placa</th></thead>
<tbody><tr>
<td><?php echo $_GET['nit']; ?></td>
<td><?php echo $_GET['cliente']; ?></td>
<td><?php echo $_GET['placa']; ?></td>
</tr></tbody>
</table>
</div>
</div>

<?php

include('connect-db.php');

mysql_set_charset('utf8');
// numero de resultados a mostrat por páginas

$per_page = 100;


// salida total de páginas por la base de datos

$result = mysql_query("SELECT * FROM servicios INNER JOIN detalles 
  ON servicios.id = detalles.id_servicio WHERE detalles.id_servicio = '".$_GET['id']."'");

$total_results = mysql_num_rows($result);

$total_pages = ceil($total_results / $per_page);



// chequeo de 'page' variable seteo a la URL (pagina: verdetalles.php?page=1)

if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];



// se asegura $show_page valores valido

if ($show_page > 0 && $show_page <= $total_pages)

{

$start = ($show_page -1) * $per_page;

$end = $start + $per_page;

}

else

{

// error - mostrar primeros resultados

$start = 0;

$end = $per_page;

}

}

else

{

// si no existen páginas, mostrat los primeros resultados

$start = 0;

$end = $per_page;

}



// mostrar paginación
?>
</p>
<p><br /><br /></p>
<?php
echo "<ul class='pagination' style='font-size:14px;'>";

for ($i = 1; $i <= $total_pages; $i++)

{
echo "<br /><br /><br /><br />";
//echo "<li><h4>Páginas:</h4><a href='verdetalles.php?page=$i'>$i</a></li>";

}

echo "</p>";

?>
</ul>

<div class="container">

<div class="row">
  <div class="col-sm-10"><h3>Ordenes Realizadas</h3></div>
  <div class="col-sm-2"><h3><!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Ayuda</button></h3></div>
</div>
        <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Busque por cualquier item deseado para filtrar">
      </div>

<?php

// mostrar tabla para resultados

echo "<div class='table‐responsive'>";

echo "<table class='table table-hover'>";

echo "<thead><tr> <th>ID</th> <th>ID_SERVICIO</th> <th>No ORDEN</th> <th>MARCA</th> <th>FECHA ENTREGA</th> <th>NUM ENTRADA</th> <th><h6>Añadir<br />Repuestos</h6></th> <th><h6>Imprimir<br />Orden</h6></th> <th><h6>Editar<br />Orden</h6></th> <th><h6>Eliminar</h6></th></tr></thead>";



// loop a traves de los datos en la tabla, mostrando en la tabla

for ($i = $start; $i < $end; $i++)

{

// aseguro en PHP para que salte si no hay más resultados

if ($i == $total_results) { break; }



// echo salida de contenido por cada fila en la tabla

echo "<tbody class='buscar'>";

echo "<tr>";

echo '<td>' . mysql_result($result, $i, 'id_d') . '</td>';

echo '<td>' . mysql_result($result, $i, 'id_servicio') . '</td>';

echo '<td><a href="verdetallesrepuestos.php?id=' . mysql_result($result, $i, 'id_d') . '&orden=' . mysql_result($result, $i, 'orden') . '&marca=' . mysql_result($result, $i, 'marca') . '" data‐toggle="tooltip" title="Ver Repuestos">' . mysql_result($result, $i, 'orden') . '</a></td>';

echo '<td>' . mysql_result($result, $i, 'marca') . '</td>';

echo '<td>' . mysql_result($result, $i, 'fec_entrega') . '</td>';

echo '<td>' . mysql_result($result, $i, 'num_entrada') . '</td>';

echo '<td><a class="btn btn-success" href="insertar_repuestos.php?id=' . mysql_result($result, $i, 'id_d') . '&orden=' . mysql_result($result, $i, 'orden') . '&marca=' . mysql_result($result, $i, 'marca') . '&cliente='.$_GET['cliente'].'" data‐toggle="tooltip" title="Añadir Repuestos">R</a></td>';

echo '<td><a class="btn btn-info" href="imprimir_orden.php?telefono=' . mysql_result($result, $i, 'telefono') . '&id_d=' . mysql_result($result, $i, 'id_d') . '&id_servicio=' . mysql_result($result, $i, 'id_servicio') . '&cliente='.$_GET['cliente'].'&nit='.$_GET['nit'].'&cliente='.$_GET['cliente'].'&orden=' . mysql_result($result, $i, 'orden') . '&foto=' . mysql_result($result, $i, 'foto') . '&direccion=' . mysql_result($result, $i, 'direccion') . '" data‐toggle="tooltip" title="Imprimir Orden">I</a></td>';

echo '<td><a class="btn btn-primary" href="editar_detalles.php?id_d=' . mysql_result($result, $i, 'id_d') . '&id_servicio=' . mysql_result($result, $i, 'id_servicio') . '" data‐toggle="tooltip" title="Editar Orden">E</a></td>';

echo '<td><a class="btn btn-danger" href="delete_detalles.php?id=' . mysql_result($result, $i, 'id_d') . '" data‐toggle="tooltip" title="Eliminar Detalle">X</a></td>';

echo "</tr>";

echo "</tbody>";

}

// cerrar tabla

echo "</table>";
echo "</div>";



// paginacion



?>
    </tbody>
  </table>
</div>

</body>

</html>