<?php
ob_start();
?>
<?php include("../seguridad.php"); ?>
<?php

/*
ORDEN DEL SERVICIO
*/

function renderForm($id, $orden, $marca, $serie, $chasis, $color, $num_entrada, 
$fec_entrega, $hora_entrega, $modelo_anio, $motor, $kilometros, $placa, $herramienta, 
$extintor, $radio, $tapetes, $stops, $llanta, $luzplaca, $brazostras, $gato, 
$antena, $frontal, $farolas, $boceles, $exploradoras, $mac, $triangulo, 
$encendedor, $cajacd, $cocuyos, $copas, $tapagas, $brazoslimp, $espejos, 
$cenicero, $tapiceria, $vidrios, $batera, $plumillas, $bomperes, $nivelcombustible,
$aceite, $hidrogeno, $bateria, $liquidofrenos, $luces, $ser_req_veh, $error)

{

?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nueva Orden</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="bootstrap/js/twitter-bootstrap-hover-dropdown.min.js"></script>
</head>
<body>
<?php include("../encabezado.php"); ?>
<?php

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>

<div id="encabezado" style="height:200px;position:relative;display:block;">
<br /><br /><br />
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

<h3>Servicio a realizar</h3>
<form action="" method="post">

<input type="hidden" name="id_servicio" value="<?php echo $_GET['id']; ?>">
<div class="form-group" style="left:6%;position:relative;">
  <label for="usr">Orden:</label>
  <input type="text" class="" name="orden" value="<?php echo $orden; ?>">

  <label for="usr">Marca:</label>
   <input type="text" class="" name="marca" value="<?php echo $marca; ?>">

  <label for="usr">Serie:</label>
   <input type="text" class="" name="serie" value="<?php echo $serie; ?>">

  <label for="usr">Chasis:</label>
   <input type="text" class="" name="chasis" value="<?php echo $chasis; ?>">

  <label for="usr">Color:</label>
   <input type="text" class="" name="color" value="<?php echo $color; ?>">

   <p><br /></p>

  <label for="usr">No Entrada:</label>
   <input type="text" class="" name="num_entrada" value="<?php echo $num_entrada; ?>">

  <label for="usr">Fecha Entrega:</label>
   <input type="date" class="" name="fec_entrega" value="<?php echo $fec_entrega; ?>">

  <label for="usr">Hora Entrega:</label>
   <input type="time" class="" name="hora_entrega" value="<?php echo $hora_entrega; ?>">

  <label for="usr">Modelo/Año:</label>
   <input type="text" class="" name="modelo_anio" value="<?php echo $modelo_anio; ?>">

   <p><br /></p>

  <label for="usr">Motor:</label>
   <input type="text" class="" name="motor" value="<?php echo $motor; ?>">

  <label for="usr">Kilometros:</label>
   <input type="text" class="" name="kilometros" value="<?php echo $kilometros; ?>">

  <label for="usr">Placa:</label>
   <input type="text" class="" name="placa" value="<?php echo $_GET['placa']; ?>">

   <p><br /></p>
   <h4>Inventario:</h4>

   <label for="usr">Herramienta</label>
   <input type="checkbox" class="" name="herramienta" value="1">

   <label for="usr">Extintor</label>
   <input type="checkbox" class="" name="extintor" value="1">

   <label for="usr">Radio</label>
   <input type="checkbox" class="" name="radio" value="1">

   <label for="usr">Tapetes</label>
   <input type="checkbox" class="" name="tapetes" value="1">

   <label for="usr">Stops</label>
   <input type="checkbox" class="" name="stops" value="1">

   <label for="usr">Llanta</label>
   <input type="checkbox" class="" name="llanta" value="1">

   <label for="usr">Luz placa</label>
   <input type="checkbox" class="" name="luzplaca" value="1">

   <label for="usr">Brazos tras</label>
   <input type="checkbox" class="" name="brazostras" value="1">

   <label for="usr">Gato</label>
   <input type="checkbox" class="" name="gato" value="1">

   <label for="usr">Antena</label>
   <input type="checkbox" class="" name="antena" value="1">

   <label for="usr">Frontal</label>
   <input type="checkbox" class="" name="frontal" value="1">

   <label for="usr">Farolas</label>
   <input type="checkbox" class="" name="farolas" value="1">

   <label for="usr">Boceles</label>
   <input type="checkbox" class="" name="boceles" value="1">

   <br />

   <label for="usr">Exploradoras</label>
   <input type="checkbox" class="" name="exploradoras" value="1">

   <label for="usr">Mac</label>
   <input type="checkbox" class="" name="mac" value="1">

   <label for="usr">Triangulo</label>
   <input type="checkbox" class="" name="triangulo" value="1">

   <label for="usr">Encendedor</label>
   <input type="checkbox" class="" name="encendedor" value="1">

   <label for="usr">Caja CD</label>
   <input type="checkbox" class="" name="cajacd" value="1">

   <label for="usr">Cocuyos</label>
   <input type="checkbox" class="" name="cocuyos" value="1">

   <label for="usr">Copas</label>
   <input type="checkbox" class="" name="copas" value="1">

   <label for="usr">Tapagas</label>
   <input type="checkbox" class="" name="tapagas" value="1">

   <label for="usr">Brazos Limp</label>
   <input type="checkbox" class="" name="brazoslimp" value="1">

   <label for="usr">Espejos</label>
   <input type="checkbox" class="" name="espejos" value="1">

   <label for="usr">Cenicero</label>
   <input type="checkbox" class="" name="cenicero" value="1">

   <label for="usr">Tapiceria</label>
   <input type="checkbox" class="" name="tapiceria" value="1">

   <br />

   <label for="usr">Vidrios</label>
   <input type="checkbox" class="" name="vidrios" value="1">

   <label for="usr">Batera</label>
   <input type="checkbox" class="" name="batera" value="1">

   <label for="usr">Plumillas</label>
   <input type="checkbox" class="" name="plumillas" value="1">

   <label for="usr">Bomperes</label>
   <input type="checkbox" class="" name="bomperes" value="1">

   <label for="usr">Nivel combustible</label>
   <input type="checkbox" class="" name="nivelcombustible" value="1">

   <h4>Niveles:</h4>

   <label for="usr">Aceite</label>
   <input type="text" class="" name="aceite" value="<?php echo $aceite; ?>">

   <label for="usr">H2O</label>
   <input type="text" class="" name="hidrogeno" value="<?php echo $hidrogeno; ?>">

   <label for="usr">Batería</label>
   <input type="text" class="" name="bateria" value="<?php echo $bateria; ?>">

   <label for="usr">Líquido Frenos</label>
   <input type="text" class="" name="liquidofrenos" value="<?php echo $liquidofrenos; ?>">

   <label for="usr">Luces</label>
   <input type="text" class="" name="luces" value="<?php echo $luces; ?>">

   <label for="usr">Servicio que requiere el vehículo</label><br />
   <textarea name="ser_req_veh" rows="6" cols="90" value="<?php echo $ser_req_veh; ?>">
   <?php echo $ser_req_veh; ?></textarea>

   <p>* CAMPOS OBLIGATORIOS</p>

<input type="submit" name="submit" value="Guardar" class="btn btn-success">

<a class="btn btn-info" href="javascript:history.back()">Cancelar</a>
</div>

</form>

<?php

}

include('connect-db.php');

if (isset($_POST['submit']))

{

$id_servicio = $_POST['id_servicio'];

$orden = $_POST['orden'];

$marca = $_POST['marca'];

$serie = $_POST['serie'];

$chasis = $_POST['chasis'];

$color = $_POST['color'];

$num_entrada = $_POST['num_entrada'];

$fec_entrega = $_POST['fec_entrega'];

$hora_entrega = $_POST['hora_entrega'];

$modelo_anio = $_POST['modelo_anio'];

$motor = $_POST['motor'];

$kilometros = $_POST['kilometros'];

$placa = $_POST['placa'];

$herramienta = $_POST['herramienta'];

$extintor = $_POST['extintor'];

$radio = $_POST['radio'];

$tapetes = $_POST['tapetes'];

$stops = htmlspecialchars(trim($_POST['stops']));
    $llanta = htmlspecialchars(trim($_POST['llanta']));
    $luzplaca = htmlspecialchars(trim($_POST['luzplaca']));
    $brazostras = htmlspecialchars(trim($_POST['brazostras']));
    $gato = htmlspecialchars(trim($_POST['gato']));
    $antena = htmlspecialchars(trim($_POST['antena']));
    $frontal = htmlspecialchars(trim($_POST['frontal']));
    $farolas = htmlspecialchars(trim($_POST['farolas']));
    $boceles = htmlspecialchars(trim($_POST['boceles']));
    $exploradoras = htmlspecialchars(trim($_POST['exploradoras']));
    $mac = htmlspecialchars(trim($_POST['mac']));
    $triangulo = htmlspecialchars(trim($_POST['triangulo']));
    $encendedor = htmlspecialchars(trim($_POST['encendedor']));
    $cajacd = htmlspecialchars(trim($_POST['cajacd']));
    $cocuyos = htmlspecialchars(trim($_POST['cocuyos']));
    $copas = htmlspecialchars(trim($_POST['copas']));
    $tapagas = htmlspecialchars(trim($_POST['tapagas']));
    $brazoslimp = htmlspecialchars(trim($_POST['brazoslimp']));
    $espejos = htmlspecialchars(trim($_POST['espejos']));
    $cenicero = htmlspecialchars(trim($_POST['cenicero']));
    $tapiceria = htmlspecialchars(trim($_POST['tapiceria']));
    $vidrios = htmlspecialchars(trim($_POST['vidrios']));
    $batera = htmlspecialchars(trim($_POST['batera']));
    $plumillas = htmlspecialchars(trim($_POST['plumillas']));
    $bomperes = htmlspecialchars(trim($_POST['bomperes']));
    $nivelcombustible = htmlspecialchars(trim($_POST['nivelcombustible']));
    $aceite = htmlspecialchars(trim($_POST['aceite']));
    $hidrogeno = htmlspecialchars(trim($_POST['hidrogeno']));
    $bateria = htmlspecialchars(trim($_POST['bateria']));
    $liquidofrenos = htmlspecialchars(trim($_POST['liquidofrenos']));
    $luces = htmlspecialchars(trim($_POST['luces']));
    $ser_req_veh = htmlspecialchars(trim($_POST['ser_req_veh']));


if ($id_servicio  == '' || $orden == '')

{


$error = '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡Por favor rellene todos los campos!
</div>';


renderForm($id_servicio, $orden, $marca, $serie, $chasis, $color, $num_entrada,
$fec_entrega, $hora_entrega, $modelo_anio, $motor, $kilometros, $placa, $herramienta,
$extintor, $radio, $tapetes, $stops, $llanta, $luzplaca, $brazostras, $gato, $antena,
$frontal, $farolas, $boceles, $exploradoras, $mac, $triangulo, $encendedor, $cajacd,
$cocuyos, $copas, $tapagas, $brazoslimp, $espejos,
$cenicero, $tapiceria, $vidrios, $batera, $plumillas, $bomperes, $nivelcombustible,
$aceite, $hidrogeno, $bateria, $liquidofrenos, $luces, $ser_req_veh, $error);

}

else

{

mysql_query("INSERT detalles SET id_servicio='$id_servicio', orden='$orden', 
marca='$marca', serie='$serie', chasis='$chasis', color='$color', 
num_entrada='$num_entrada', fec_entrega='$fec_entrega', hora_entrega='$hora_entrega'
, modelo_anio='$modelo_anio', motor='$motor', kilometros='$kilometros', placa='$placa'
, herramienta='$herramienta', extintor='$extintor', radio='$radio', tapetes='$tapetes'
, stops='$stops', llanta='$llanta', luzplaca='$luzplaca', brazostras='$brazostras'
, gato='$gato', antena='$antena', frontal='$frontal', farolas='$farolas', boceles='$boceles'
, exploradoras='$exploradoras', mac='$mac', triangulo='$triangulo', encendedor='$encendedor'
, cajacd='$cajacd', cocuyos='$cocuyos', copas='$copas', tapagas='$tapagas'
, brazoslimp='$brazoslimp', espejos='$espejos', cenicero='$cenicero'
, tapiceria='$tapiceria', vidrios='$vidrios', batera='$batera', plumillas='$plumillas'
, bomperes='$bomperes', nivelcombustible='$nivelcombustible', aceite='$aceite'
, hidrogeno='$hidrogeno', bateria='$bateria', liquidofrenos='$liquidofrenos'
, luces='$luces', ser_req_veh='$ser_req_veh'")

or die(mysql_error());

header("Location: view-paginated.php");

}

}

else

{

renderForm('','','','','','','','','','','','','','','','','','','','','','','','',''
  ,'','','','','','','','','','','','','','','','','','','','','','','','','','');

}

?>
<body>
</html>