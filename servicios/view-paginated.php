<?php include("../seguridad.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clientes para Servicio - Autoservicio</title>
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
        <h4 class="modal-title">Ayuda</h4>
      </div>
      <div class="modal-body">
        <p>En esta pantalla saldrán los clientes que se registren<br />
        El Primer paso a seguir es Registrar el Cliente para poder Operar insertar<br />
      las Órdenes de Servicios correspondiente y finalmente poder agregar<br />
      los Repuestos a cada orden.<p>Los enlaces del cliente sirve para editar el cliente<br />
      en cualquier momento que se desee.<p>"V": es Ver Ordenes realizadas por cliente y a su vez allí mismo<br />
      poder Ingresar los repuestos a cada Orden que se realice.<br />"Orden": Agregar Orden
      <br />"X": Eliminar Orden.</p>
      </div>
    </div>

  </div>
</div>

<?php include("../encabezado.php"); ?>
<?php

include('connect-db.php');

mysql_set_charset('utf8');
// numero de resultados a mostrat por páginas

$per_page = 5;



// salida total de páginas por la base de datos

$result = mysql_query("SELECT * FROM servicios");

$total_results = mysql_num_rows($result);

$total_pages = ceil($total_results / $per_page);



// chequeo de 'page' variable seteo a la URL (pagina: view-paginated.php?page=1)

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
echo "<ul class='pagination'>";

for ($i = 1; $i <= $total_pages; $i++)

{

echo "<li><h4>Páginas:</h4><a href='view-paginated.php?page=$i'>$i</a></li>";

}

echo "</p>";

?>
</ul>
<div class="container">
<div class="row">
  <div class="col-sm-10"><h3>Clientes Registrados</h3></div>
  <div class="col-sm-2"><h3><!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Ayuda</button></h3></div>
</div>
        <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingresar placa o nombre del cliente">
      </div>

<?php

// mostrar tabla para resultados

echo "<div class='table‐responsive'>";

echo "<table class='table table-hover'>";

echo "<thead><tr> <th>ID</th><th>PLACA</th> <th>CLIENTE</th> <th>DOCUMENTO</th> <th><h6>Ver<br />Ordenes</h6></th> <th><h6>Agregar<br />Orden</h6></th> <th><h6>Eliminar</h6></th></tr></thead>";



// loop a traves de los datos en la tabla, mostrando en la tabla

for ($i = $start; $i < $end; $i++)

{

// aseguro en PHP para que salte si no hay más resultados

if ($i == $total_results) { break; }



// echo salida de contenido por cada fila en la tabla

echo "<tbody class='buscar'>";

echo "<tr>";

echo '<td>' . mysql_result($result, $i, 'id') . '</td>';

echo '<td>' . mysql_result($result, $i, 'placa') . '</td>';

echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'id') . '" data‐toggle="tooltip" title="Editar Cliente">' . mysql_result($result, $i, 'cliente') . '</a></td>';

echo '<td>' . mysql_result($result, $i, 'nit') . '</td>';

echo '<td><a class="btn btn-success" href="verdetalles.php?id=' . mysql_result($result, $i, 'id') . '&nit=' . mysql_result($result, $i, 'nit') . '&cliente=' . mysql_result($result, $i, 'cliente') . '&placa=' . mysql_result($result, $i, 'placa') . '" data‐toggle="tooltip" title="Ver Ordenes">V</a></td>';

echo '<td><a class="btn btn-warning" href="insertar_detalles.php?id=' . mysql_result($result, $i, 'id') . '&nit=' . mysql_result($result, $i, 'nit') . '&cliente=' . mysql_result($result, $i, 'cliente') . '&placa=' . mysql_result($result, $i, 'placa') . '" data‐toggle="tooltip" title="Nueva Orden">Orden</a></td>';

echo '<td><a class="btn btn-danger" href="delete.php?id=' . mysql_result($result, $i, 'id') . '" data‐toggle="tooltip" title="Eliminar Cliente">X</a></td>';

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