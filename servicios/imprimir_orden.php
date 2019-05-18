<?php include("../seguridad.php"); ?>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Impresión Orden</title>
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

$per_page = 100;



// salida total de páginas por la base de datos

$result = mysql_query("SELECT * FROM detalles INNER JOIN repuestos 
  ON repuestos.orden = detalles.orden WHERE id_repuesto =  '".$_GET['id_d']."'");

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

<?php
//echo "<ul class='pagination'>";

for ($i = 1; $i <= $total_pages; $i++)

{

//echo "<li><h4>Páginas:</h4><a href='view-paginated.php?page=$i'>$i</a></li>";

}

//echo "</p>";

?>
</ul>
<div class="container">
<div class='table‐responsive'>
<table class='table table-hover'>
<thead><tr>
  <th><h3 style="text-align:center;">Centro<br />Autoservicio<br />San Jorge</h3><br /><h5 style="text-align:center;">NIT: 1094249102-6</h5></th>
  <th><h4 style="text-align:center;">Almacén de Repuesto y<br />Mecánica Especializada<br>Motores Gasolina y Diesel</h4><br /><h5 style="text-align:center;margin-bottom:-30px;">Calle 11 No 7-153 Pasaje Florian Pamplona N de S</h5><br /><h5 style="text-align:center;">Tel.: 5688600 Cel.: 3112615611 - 3148014471 - 3203870891</h5></th>
  <th><h4 style="text-align:center;color:red;margin-bottom:50px;">ORDEN DE<br />REPARACION<br />No:<?php echo $_GET['orden']; ?></h4></th>
</tr></thead>
</table>
</div>

  <div class="form-group" style="font-size:1.3em;">

  <?php // LHPM IMPRESION DE DATOS RELACION 2 TABLAS MetallicA

    for ($i = $start; $i < $end; $i++){

     if($_GET['id_d'] == $_GET['id_d']){

        //echo '<span style="font-size:1em;">ID_D:' . mysql_result($result, $i, 'id_d') . '</span>';

     	echo '<label for="usr">Documento:</label>
         <input style="width:40%;" type="text" value="' .$_GET['nit']. '" readonly>';

      	echo '<label for="usr">Cliente:</label>
         <input style="width:40%;" type="text" value="' .$_GET['cliente']. '" readonly>';

     	echo '<br /><label for="usr">Dirección:</label>
         <input type="text" style="width:40%;" value="' .$_GET['direccion']. '" readonly>';

        echo '<label for="usr">Teléfono:</label>
         <input type="text" style="width:40.4%;" value="' .$_GET['telefono']. '" readonly>';

        echo '<br /><label for="usr">Marca:</label>
         <input style="width:25%;" type="text" value="' .mysql_result($result, $i, 'marca'). '" readonly>';

     	echo '<label for="usr">Serie/Chasis:</label>
         <input style="width:25%;" type="text" value="' .mysql_result($result, $i, 'serie'). '" readonly>';

        echo '<label for="usr">Color:</label>
         <input style="width:25%;" type="text" value="' .mysql_result($result, $i, 'color'). '" readonly>';

        echo '<br /><label for="usr">Num Entrada:</label>
         <input style="width:15.9%;" type="text" value="' .mysql_result($result, $i, 'num_entrada'). '" readonly>';

     	echo '<label for="usr">Modelo/Año:</label>
         <input style="width:27%;" type="text" value="' .mysql_result($result, $i, 'modelo_anio'). '" readonly>';

        echo '<label for="usr">Motor:</label>
         <input style="width:27%;" type="text" value="' .mysql_result($result, $i, 'motor'). '" readonly>';

        echo '<br /><label for="usr">Kilometros:</label>
         <input style="width:41%;" type="text" value="' .mysql_result($result, $i, 'kilometros'). '" readonly>';

        echo '<label for="usr">Placa:</label>
         <input style="width:41%;" type="text" value="' .mysql_result($result, $i, 'placa'). '" readonly>';

        echo '<br /><label for="usr">Fecha Entrega:</label>
         <input style="width:37%;" type="text" value="' .mysql_result($result, $i, 'fec_entrega'). '" readonly>';

        echo '<label for="usr">Hora Entrega:</label>
         <input style="width:36.5%;" type="text" value="' .mysql_result($result, $i, 'hora_entrega'). '" readonly>';

        echo '<h5>INVENTARIO</h5>';

        echo '<label for="usr">Herramienta:</label>';
        if (mysql_result($result, $i, 'herramienta') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Extintor:</label>';
        if (mysql_result($result, $i, 'extintor') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Radio:</label>';
        if (mysql_result($result, $i, 'radio') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Tapetes:</label>';
        if (mysql_result($result, $i, 'tapetes') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Stops:</label>';
        if (mysql_result($result, $i, 'stops') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Llanta:</label>';
        if (mysql_result($result, $i, 'llanta') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Luz Placa:</label>';
        if (mysql_result($result, $i, 'luzplaca') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Brazos tras:</label>';
        if (mysql_result($result, $i, 'brazostras') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Gato:</label>';
        if (mysql_result($result, $i, 'gato') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Antena:</label>';
        if (mysql_result($result, $i, 'antena') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Frontal:</label>';
        if (mysql_result($result, $i, 'frontal') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Farolas:</label>';
        if (mysql_result($result, $i, 'farolas') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Boceles:</label>';
        if (mysql_result($result, $i, 'boceles') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Exploradoras:</label>';
        if (mysql_result($result, $i, 'exploradoras') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Mac:</label>';
        if (mysql_result($result, $i, 'mac') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Triangulo:</label>';
        if (mysql_result($result, $i, 'triangulo') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Encendedor:</label>';
        if (mysql_result($result, $i, 'encendedor') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Caja CD:</label>';
        if (mysql_result($result, $i, 'cajacd') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Cocuyos:</label>';
        if (mysql_result($result, $i, 'cocuyos') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Copas:</label>';
        if (mysql_result($result, $i, 'copas') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Tapa gas:</label>';
        if (mysql_result($result, $i, 'tapagas') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Brazos Limp:</label>';
        if (mysql_result($result, $i, 'brazoslimp') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Espejos:</label>';
        if (mysql_result($result, $i, 'espejos') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Cenicero:</label>';
        if (mysql_result($result, $i, 'cenicero') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Tapicería:</label>';
        if (mysql_result($result, $i, 'tapiceria') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Vidrios:</label>';
        if (mysql_result($result, $i, 'vidrios') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Batera:</label>';
        if (mysql_result($result, $i, 'batera') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Plumillas:</label>';
        if (mysql_result($result, $i, 'plumillas') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Bomperes:</label>';
        if (mysql_result($result, $i, 'bomperes') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<label for="usr">Nivel Combustible:</label>';
        if (mysql_result($result, $i, 'nivelcombustible') == "1"){ $check = "checked"; }else{ $check = "";}
        echo'<input type="checkbox" '.$check.'>';

        echo '<h5>INSPECCION DEL SERVICIO</h5>';

        echo '<label for="usr">Aceite:</label>
         <input type="text" value="' .mysql_result($result, $i, 'aceite'). '" readonly>';

        echo '<label for="usr">Hidrógeno:</label>
         <input type="text" value="' .mysql_result($result, $i, 'hidrogeno'). '" readonly>';

        echo '<label for="usr">Batería:</label>
         <input type="text" value="' .mysql_result($result, $i, 'bateria'). '" readonly>';

        echo '<br /><label for="usr">Líquido Frenos:</label>
         <input type="text" value="' .mysql_result($result, $i, 'liquidofrenos'). '" readonly>';

        echo '<label for="usr">Luces:</label>
         <input type="text" value="' .mysql_result($result, $i, 'luces'). '" readonly>';

     	break;
     }

    }  

  ?>
</div>

<?php

// mostrar tabla para resultados

echo "<div class='table‐responsive'>";

echo "<table class='table table-hover'>";

echo "<thead><tr> <th>REPUESTO</th> <th>VALOR</th> </tr></thead>";



// loop a traves de los datos en la tabla, mostrando en la tabla

for ($i = $start; $i < $end; $i++)

{

// aseguro en PHP para que salte si no hay más resultados

if ($i == $total_results) { break; }



// echo salida de contenido por cada fila en la tabla

echo "<tbody>";

echo "<tr>";

echo '<td>' . mysql_result($result, $i, 'repuesto') . '</td>';

echo '<td>' . mysql_result($result, $i, 'valor') . '</td>';

echo "</tr>";

echo "</tbody>";

}

// cerrar tabla

echo "</table>";
echo "</div>";



// paginacion



?>

  <?php // LHPM IMPRESION DE DATOS RELACION 2 TABLAS MetallicA

    for ($i = $start; $i < $end; $i++){

     if($_GET['id_d'] == $_GET['id_d']){

      echo '<label for="usr">Servicios que Requiere el Vehículo:</label><br />
         <textarea rows="6" cols="154" readonly="readonly">' .mysql_result($result, $i, 'ser_req_veh'). '</textarea>';

     	break;
     }

    }  

  ?>
  <br />
  <textarea rows="8" cols="180" style="text-align:justify;font-size:0.8em;" readonly="readonly">El cliente autoriza a CA San Jorge para efectuar las reparaciones ordenadas así como para colocar los repuestos y materiales necesarios para ellos. Probar el vehículo
  antes y después de la reparación dentro del perímetro urbano de la Ciudad para lo cual exonera a C.A San Jorge de responsabilidad por daños, hurtos, robo, incendios, pedreos, alteración de orden  público y otros. C.A San Jorge no se hace responsable por pérdida de objetos que no quedan detallados en el inventario, ni por daños ocurridos al vehículo por casos fortuitos de fuerza mayor. Igualmente por averías o pérdidas que sufra el vehículo cuando a petición del cliente se recoja o entregue a domicilio. El cliente se compromete a efectuar el pago del costo total de la reparación al recibir el trabajo. Así mismo se compromete a recoger el vehículo dentro de 24 horas siguiente a la terminación, en caso contrario reconocerá el importe de la pensión establecida por los días siguientes. El cliente autoriza expresamente a C.A San Jorge para retener una prenda al vehículo hasta tanto el importe de la factura haya sido totalmente cancelada.
NOTA: Se hace constar que C.A San Jorge recibe el vehículo de la persona que firma la presente orden de trabajo el supuesto de que ella es la propietaria del auto, o que debidamente autorizada por el dueño para ordenar el servicio y retirar el vehículo posteriormente.</textarea>
    
    </tbody>
  </table>
</div>
<div class='table‐responsive'>
<table class='table table-hover'>
<thead><tr>
  <th><h5 style="text-align:center;"><img style="width:250px;height:140px;" src="uploads/<?php echo $_GET['foto'] ?>"><br />FIRMA DEL CLIENTE</h5></th>
  <th><h5 style="text-align:center;">_____________________________<br/>TECNICO</h5></th>
  <th><h5 style="text-align:center;">_____________________________<br/>JEFE DEL SERVICIO</h5></th>
</tr></thead>
</table>
</div>

</body>
</html>