<?php include("../seguridad.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Listado de Servicios por Cliente</title>
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
</head>

<body>
<?php include("../encabezado.php"); ?>
<?php

include('connect-db.php');

mysql_set_charset('utf8');
// numero de resultados a mostrat por páginas

$per_page = 10;



// salida total de páginas por la base de datos

$result = mysql_query("SELECT * FROM servicios INNER JOIN detalles 
  ON servicios.id = detalles.id_servicio ORDER BY id_d DESC");

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
  <h2>Listado de Servicios</h2>

<?php

// mostrar tabla para resultados

echo "<div class='table‐responsive'>";

echo "<table class='table table-hover'>";

echo "<thead><tr> <th>CLIENTE</th> <th>ORDEN</th> </tr></thead>";



// loop a traves de los datos en la tabla, mostrando en la tabla

for ($i = $start; $i < $end; $i++)

{

// aseguro en PHP para que salte si no hay más resultados

if ($i == $total_results) { break; }



// echo salida de contenido por cada fila en la tabla

echo "<tbody>";

echo "<tr>";

echo '<td>' . mysql_result($result, $i, 'cliente') . '</td>';

echo '<td>' . mysql_result($result, $i, 'orden') . '</td>';

echo "</tr>";
echo '<td>Marca: ' . mysql_result($result, $i, 'marca') . ' 
Motor: ' . mysql_result($result, $i, 'motor') . '
Color: ' . mysql_result($result, $i, 'color') . '
Fecha Entrega: ' . mysql_result($result, $i, 'fec_entrega') . '
</td>';

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