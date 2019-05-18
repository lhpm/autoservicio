<?php
ob_start();
?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
<title>Editar Orden - Autoservicio</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<?php include("../seguridad.php"); ?>
<?php include("../encabezado.php"); ?>
<p><br /><br /></p>
<?php

function renderForm($id_d, $id_servicio, $orden, $marca, $serie, $chasis, $color,
$num_entrada, $fec_entrega, $hora_entrega, $modelo_anio, $motor, $kilometros,
$placa, $herramienta, $extintor, $radio, $tapetes, $stops, $llanta, $luzplaca,
$brazostras, $gato, $antena, $frontal, $farolas, $boceles, $exploradoras,
$mac, $triangulo, $encendedor, $cajacd, $cocuyos, $copas, $tapagas,
$brazoslimp, $espejos, $cenicero, $tapiceria, $vidrios, $batera, $plumillas, 
$bomperes, $nivelcombustible, $aceite, $hidrogeno, $bateria, $liquidofrenos, $luces, $ser_req_veh, 
$error)

{

?>
<?php

// Si hay errores posible errores

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>
<p><br /><br /></p>
<h2>Editar Orden de Servicio</h2>

<form action="" method="post">

<input type="hidden" name="id_d" value="<?php echo $id_d; ?>"/>
<input type="hidden" name="id_servicio" value="<?php echo $id_servicio; ?>"/>

<div>

<p><strong>ID_D:</strong> <?php echo $_GET['id_d']; ?>
<strong>ID_SERVICIO:</strong> <?php echo $_GET['id_servicio']; ?>
</p>

<div class="form-group" style="position:relative;left:20%;font-size:1.3em;">
  <label for="usr">Orden:</label>
   <input type="text" name="orden" value="<?php echo $orden; ?>">

  <label for="usr">Marca:</label>
   <input type="text" name="marca" value="<?php echo $marca; ?>">

   <p><br /></p>

   <label for="">Serie:</label>
   <input type="text" style="width:20%;" name="serie" value="<?php echo $serie; ?>">

  <label for="usr">Chasis:</label>
   <input type="text" style="width:25%;" name="chasis" value="<?php echo $chasis; ?>">

    <p><br /></p>

  <label for="usr">Color:</label>
   <input type="text" style="width:15%;" name="color" value="<?php echo $color; ?>">

  <label for="usr">No Entrada:</label>
   <input type="text" style="width:15%;" name="num_entrada" value="<?php echo $num_entrada; ?>">

  <label for="usr">Fecha Entrega:</label>
   <input type="date" style="width:14%;" name="fec_entrega" value="<?php echo $fec_entrega; ?>">

     <p><br /></p>

  <label for="usr">Hora Entrega:</label>
   <input type="time" style="width:11%;" name="hora_entrega" value="<?php echo $hora_entrega; ?>">

  <label for="usr">Modelo año:</label>
   <input type="text" name="modelo_anio" value="<?php echo $modelo_anio; ?>">

  <label for="usr">Motor:</label>
   <input type="text" name="motor" value="<?php echo $motor; ?>">

      <p><br /></p>

  <label for="usr">Kilometros:</label>
   <input type="text" name="kilometros" value="<?php echo $kilometros; ?>">

  <label for="usr">Placa:</label>
   <input type="text" name="placa" value="<?php echo $placa; ?>">

      <p><br /></p>

  <label for="usr">Herramienta:</label>
  <?php if ($herramienta == "1"){ $check = "checked"; }else{ $check = "";} ?>
   <input type="checkbox" name="herramienta" value="1" <?php echo $check; ?>>

  <label for="usr">Extintor:</label>
  <?php if ($extintor == "1"){ $check2 = "checked"; }else{ $check2 = "";} ?>
   <input type="checkbox" name="extintor" value="1" <?php echo $check2; ?>>

  <label for="usr">Radio:</label>
  <?php if ($radio == "1"){ $check3 = "checked"; }else{ $check3 = "";} ?>
   <input type="checkbox" name="radio" value="1" <?php echo $check3; ?>>

  <label for="usr">Tapetes:</label>
  <?php if ($tapetes == "1"){ $check4 = "checked"; }else{ $check4 = "";} ?>
   <input type="checkbox" name="tapetes" value="1" <?php echo $check4; ?>>

  <label for="usr">Stops:</label>
  <?php if ($stops == "1"){ $check5 = "checked"; }else{ $check5 = "";} ?>
   <input type="checkbox" name="stops" value="1" <?php echo $check5; ?>>

  <label for="usr">Llanta:</label>
  <?php if ($llanta == "1"){ $check6 = "checked"; }else{ $check6 = "";} ?>
   <input type="checkbox" name="llanta" value="1" <?php echo $check6; ?>>

  <label for="usr">Luz Placa:</label>
  <?php if ($luzplaca == "1"){ $check7 = "checked"; }else{ $check7 = "";} ?>
   <input type="checkbox" name="luzplaca" value="1" <?php echo $check7; ?>>

  <label for="usr">Brazos Tras:</label>
  <?php if ($brazostras == "1"){ $check8 = "checked"; }else{ $check8 = "";} ?>
   <input type="checkbox" name="brazostras" value="1" <?php echo $check8; ?>>

   <p><br /></p>

  <label for="usr">Gato:</label>
  <?php if ($gato == "1"){ $check9 = "checked"; }else{ $check9 = "";} ?>
   <input type="checkbox" name="gato" value="1" <?php echo $check9; ?>>

  <label for="usr">Antena:</label>
  <?php if ($antena == "1"){ $check10 = "checked"; }else{ $check10 = "";} ?>
   <input type="checkbox" name="antena" value="1" <?php echo $check10; ?>>

  <label for="usr">Frontal:</label>
  <?php if ($frontal== "1"){ $check11 = "checked"; }else{ $check11 = "";} ?>
   <input type="checkbox" name="frontal" value="1" <?php echo $check11; ?>>

  <label for="usr">Farolas:</label>
  <?php if ($farolas == "1"){ $check12 = "checked"; }else{ $check12 = "";} ?>
   <input type="checkbox" name="farolas" value="1" <?php echo $check12; ?>>

  <label for="usr">Boceles:</label>
   <?php if ($boceles == "1"){ $check13 = "checked"; }else{ $check13 = "";} ?>
   <input type="checkbox" name="boceles" value="1" <?php echo $check13; ?>>

  <label for="usr">Exploradoras:</label>
  <?php if ($exploradoras == "1"){ $check14 = "checked"; }else{ $check14 = "";} ?>
   <input type="checkbox" name="exploradoras" value="1" <?php echo $check14; ?>>

  <label for="usr">Mac:</label>
   <?php if ($mac == "1"){ $check15 = "checked"; }else{ $check15 = "";} ?>
   <input type="checkbox" name="mac" value="1" <?php echo $check15; ?>>

  <label for="usr">Triángulo:</label>
   <?php if ($triangulo == "1"){ $check16 = "checked"; }else{ $check16 = "";} ?>
   <input type="checkbox" name="triangulo" value="1" <?php echo $check16; ?>>

      <p><br /></p>

  <label for="usr">Encendedor:</label>
  <?php if ($encendedor == "1"){ $check17 = "checked"; }else{ $check17 = "";} ?>
   <input type="checkbox" name="encendedor" value="1" <?php echo $check17; ?>>

  <label for="usr">Caja CD:</label>
  <?php if ($cajacd == "1"){ $check18 = "checked"; }else{ $check18 = "";} ?>
   <input type="checkbox" name="cajacd" value="1" <?php echo $check18; ?>>

  <label for="usr">Cocuyos:</label>
  <?php if ($cocuyos == "1"){ $check19 = "checked"; }else{ $check19 = "";} ?>
   <input type="checkbox" name="cocuyos" value="1" <?php echo $check19; ?>>

  <label for="usr">Copas:</label>
  <?php if ($copas == "1"){ $check20 = "checked"; }else{ $check20 = "";} ?>
   <input type="checkbox" name="copas" value="1" <?php echo $check20; ?>>

  <label for="usr">Tapagas:</label>
  <?php if ($tapagas == "1"){ $check21 = "checked"; }else{ $check21 = "";} ?>
   <input type="checkbox" name="tapagas" value="1" <?php echo $check21; ?>>

  <label for="usr">Brazos Limp:</label>
  <?php if ($brazoslimp == "1"){ $check22 = "checked"; }else{ $check22 = "";} ?>
   <input type="checkbox" name="brazoslimp" value="1" <?php echo $check22; ?>>

  <label for="usr">Espejos:</label>
  <?php if ($espejos == "1"){ $check23 = "checked"; }else{ $check23 = "";} ?>
   <input type="checkbox" name="espejos" value="1" <?php echo $check23; ?>>

   <p><br /></p>

  <label for="usr">Cenicero:</label>
  <?php if ($cenicero == "1"){ $check24 = "checked"; }else{ $check24 = "";} ?>
   <input type="checkbox" name="cenicero" value="1" <?php echo $check24; ?>>

  <label for="usr">Tapicería:</label>
  <?php if ($tapiceria == "1"){ $check25 = "checked"; }else{ $check25 = "";} ?>
   <input type="checkbox" name="tapiceria" value="1" <?php echo $check25; ?>>

  <label for="usr">Vídrios:</label>
  <?php if ($vidrios == "1"){ $check26 = "checked"; }else{ $check26 = "";} ?>
   <input type="checkbox" name="vidrios" value="1" <?php echo $check26; ?>>

  <label for="usr">Batera:</label>
  <?php if ($batera == "1"){ $check28 = "checked"; }else{ $check28 = "";} ?>
   <input type="checkbox" name="batera" value="1" <?php echo $check28; ?>>

  <label for="usr">Plumillas:</label>
  <?php if ($plumillas == "1"){ $check29 = "checked"; }else{ $check29 = "";} ?>
   <input type="checkbox" name="plumillas" value="1" <?php echo $check29; ?>>

  <label for="usr">Bomperes:</label>
  <?php if ($bomperes == "1"){ $check30 = "checked"; }else{ $check30 = "";} ?>
   <input type="checkbox" name="bomperes" value="1" <?php echo $check30; ?>>

  <label for="usr">Nivel Combustible:</label>
  <?php if ($nivelcombustible == "1"){ $check31 = "checked"; }else{ $check31 = "";} ?>
   <input type="checkbox" name="nivelcombustible" value="1" <?php echo $check31; ?>>

   <h4>Niveles</h4>

  <label for="usr">Aceite:</label>
   <input type="text" style="width:25%;" name="aceite" value="<?php echo $aceite; ?>">

  <label for="usr">Hidrógeno:</label>
   <input type="text" style="width:25%;" name="hidrogeno" value="<?php echo $hidrogeno; ?>">
<br />
  <label for="usr">Batería:</label>
   <input type="text" style="width:25%;" name="bateria" value="<?php echo $bateria; ?>">

  <label for="usr">Líquido de Frenos:</label>
   <input type="text" style="width:25%;" name="liquidofrenos" value="<?php echo $liquidofrenos; ?>">
<br />
  <label for="usr">Luces:</label>
   <input type="text" style="width:25%;" name="luces" value="<?php echo $luces; ?>">
<br />
  <label for="usr">Servicio que requiere el vehículo</label><br />
   <textarea name="ser_req_veh" rows="6" cols="90" value="<?php echo $ser_req_veh; ?>">
   <?php echo $ser_req_veh; ?></textarea>

   <p>* Por favor llenar todos los campos.</p>

  <input type="submit" name="submit" value="Guardar" class="btn btn-success">

  <a class="btn btn-info" href="javascript:history.back()">Cancelar</a>

</div>

</div>

</form>

<?php

}

// Conexion

include('connect-db.php');



// Formulario enviado
if (isset($_POST['submit']))

{

// Confirma la integridad del ID valido de acuerdo al formulario

if (is_numeric($_POST['id_d']))

{

// Homologacion de campos

$id_d = $_POST['id_d'];

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

$herramienta = htmlspecialchars(trim($_POST['herramienta']));
    $extintor = htmlspecialchars(trim($_POST['extintor']));
    $radio = htmlspecialchars(trim($_POST['radio']));
    $tapetes = htmlspecialchars(trim($_POST['tapetes']));
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

// valida los campos importantes

if ($orden == '')

{

// Generar mensaje de error

$error = '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡Llene todos los campos.
</div>';



//error, muestra el formulario

renderForm($id_d, $id_servicio, $orden, $marca, $serie, $chasis, $color,
$num_entrada, $fec_entrega, $hora_entrega, $modelo_anio, $motor, $kilometros,
$placa, $herramienta, $extintor, $radio, $tapetes, $stops, $llanta, $luzplaca,
$brazostras, $gato, $antena, $frontal, $farolas, $boceles, $exploradoras,
$mac, $triangulo, $encendedor, $cajacd, $cocuyos, $copas, $tapagas,
$brazoslimp, $espejos, $cenicero, $tapiceria, $vidrios, $batera, $plumillas, 
$bomperes, $nivelcombustible, $aceite, $hidrogeno, $bateria, $liquidofrenos, 
$luces, $ser_req_veh, $error);

}

else

{

// Guarda los datos a mysql bd

mysql_query("UPDATE detalles SET orden='$orden', 
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
, bomperes='$bomperes', nivelcombustible='$nivelcombustible' 
, aceite='$aceite', hidrogeno='$hidrogeno' , bateria='$bateria' 
, liquidofrenos='$liquidofrenos' , luces='$luces' , ser_req_veh='$ser_req_veh' 
WHERE id_d='$id_d'")

or die(mysql_error());



// grabacion, redirecciona a la pagina

header("Location: view-paginated.php");

}

}

else

{

// si el ID no es valido, muestra este error

echo '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡Algo salió mal!
</div>';

}

}

else

// Si el problema tiene problema de envio

{



// Valida ID

if (isset($_GET['id_d']) && is_numeric($_GET['id_d']) && $_GET['id_d'] > 0)

{

// query db

$id_d = $_GET['id_d'];

$result = mysql_query("SELECT * FROM autoservicio.detalles WHERE id_d=$id_d")

or die(mysql_error());

$row = mysql_fetch_array($result);



// revisa el id que este en la bd

if($row)

{



// obtener datos desde la db

$id_servicio = $row['id_servicio'];

$orden = $row['orden'];

$marca = $row['marca'];

$serie = $row['serie'];

$chasis = $row['chasis'];

$color = $row['color'];

$num_entrada = $row['num_entrada'];

$fec_entrega = $row['fec_entrega'];

$hora_entrega = $row['hora_entrega'];

$modelo_anio = $row['modelo_anio'];

$motor = $row['motor'];

$kilometros = $row['kilometros'];

$placa = $row['placa'];

$herramienta = $row['herramienta'];

$extintor = $row['extintor'];

$radio = $row['radio'];

$tapetes = $row['tapetes'];

$stops = $row['stops'];

$llanta = $row['llanta'];

$luzplaca = $row['luzplaca'];

$brazostras = $row['brazostras'];

$gato = $row['gato'];

$antena = $row['antena'];

$frontal = $row['frontal'];

$farolas = $row['farolas'];

$boceles = $row['boceles'];

$exploradoras = $row['exploradoras'];

$mac = $row['mac'];

$triangulo = $row['triangulo'];

$encendedor = $row['encendedor'];

$cajacd = $row['cajacd'];

$cocuyos = $row['cocuyos'];

$copas = $row['copas'];

$tapagas = $row['tapagas'];

$brazoslimp = $row['brazoslimp'];

$espejos = $row['espejos'];

$cenicero = $row['cenicero'];

$tapiceria = $row['tapiceria'];

$vidrios = $row['vidrios'];

$batera = $row['batera'];

$plumillas = $row['plumillas'];

$bomperes = $row['bomperes'];

$nivelcombustible = $row['nivelcombustible'];

$aceite = $row['aceite'];

$hidrogeno = $row['hidrogeno'];

$bateria = $row['bateria'];

$liquidofrenos = $row['liquidofrenos'];

$luces = $row['luces'];

$ser_req_veh = $row['ser_req_veh'];

// muestra el formulario

renderForm($id_d, $id_servicio, $orden, $marca, $serie, $chasis, $color,
$num_entrada, $fec_entrega, $hora_entrega, $modelo_anio, $motor, $kilometros,
$placa, $herramienta, $extintor, $radio, $tapetes, $stops, $llanta, $luzplaca,
$brazostras, $gato, $antena, $frontal, $farolas, $boceles, $exploradoras,
$mac, $triangulo, $encendedor, $cajacd, $cocuyos, $copas, $tapagas,
$brazoslimp, $espejos, $cenicero, $tapiceria, $vidrios, $batera, $plumillas, 
$bomperes, $nivelcombustible, $aceite, $hidrogeno, $bateria, $liquidofrenos, 
$luces, $ser_req_veh, '');

}

else

// si no hay registros, muestra esto

{

echo '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡No hay resultados!
</div>';

}

}

else

// Se valida la URL por si se intenta cambiar

{

echo '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡Algo salió mal!
</div>';

}

}

?>

</body>

</html>
<?php
ob_end_flush();
?>