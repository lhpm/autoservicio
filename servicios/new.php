<?php include("../seguridad.php"); ?>
<?php

/*
NUEVO CLIENTE
*/

function renderForm($placa, $cliente, $nit, $fecha_recibo, $direccion, $telefono, $hora_recibo, $foto, $error)

{

?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nuevo Servicio</title>

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
<br />
<h2>Nuevo Cliente</h2>
<form action="" method="post" enctype="multipart/form-data">

<div>
<p><br /><br /><br /></p>
<div class="form-group" style="position:relative;left:20%;font-size:1.5em">
  <label for="usr">Placa</label>
   <input type="text" class="" name="placa" value="<?php echo $placa; ?>">

  <label for="usr">NIT:</label>
   <input type="text" class="" name="nit" value="<?php echo $nit; ?>">

   <p><br /></p>

  <label for="usr">Cliente</label>
   <input type="text" style="width:46%;" name="cliente" value="<?php echo $cliente; ?>">

   <p><br /></p>

  <label for="usr">Dirección</label>
   <input type="text" style="width:25%;" name="direccion" value="<?php echo $direccion; ?>">

  <label for="usr">Teléfono</label>
   <input type="tel" style="width:15%;" name="telefono" value="<?php echo $telefono; ?>">

   <p><br /></p>

  <label for="usr">Fecha Creación</label>
   <input type="text" class="" name="fecha_recibo" value="<?php echo date("d-m-Y",time()-3600);?>" readonly>

  <label for="usr">Hora Creación</label>
   <input type="text" class="" name="hora_recibo" value="<?php echo date("H:i:s",time()-3600);?>" readonly>
<br />
  <label for="usr">Firma</label>
   <input type="file" name="foto" multiple class="alert alert-info" value="<?php echo $foto; ?>">

<p>* CAMPOS OBLIGATORIOS</p>

<input type="submit" name="submit" value="Guardar" class="btn btn-success">

<a class="btn btn-info" href="javascript:history.back()">Cancelar</a>

</div>

</form>
    </form>
    <!-- JavaScript Includes UPLOAD -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="fotouploadlibrary/js/jquery.knob.js"></script>

    <!-- jQuery File Upload Dependencies -->
    <script src="fotouploadlibrary/js/jquery.ui.widget.js"></script>
    <script src="fotouploadlibrary/js/jquery.iframe-transport.js"></script>
    <script src="fotouploadlibrary/js/jquery.fileupload.js"></script>
    
    <!-- Our main JS file -->
    <script src="fotouploadlibrary/js/script.js"></script>
  <!-- FIN JavaScript Includes UPLOAD -->

<?php

date_default_timezone_set('America/Bogota');

}

include('connect-db.php');

if (isset($_POST['submit']))

{

$placa = $_POST['placa'];

$cliente = $_POST['cliente'];

$nit = $_POST['nit'];

$fecha_recibo = $_POST['fecha_recibo'];

$direccion = $_POST['direccion'];

$telefono = $_POST['telefono'];

$hora_recibo = $_POST['hora_recibo'];

$foto = "foto";


if ($placa == '')

{


$error = '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡Por favor rellene todos los campos!
</div>';


renderForm($placa, $cliente, $nit, $fecha_recibo, $direccion, $telefono, $hora_recibo, $foto, $error);

}

else

{
//UPLOAD
  // A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');

if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0){

  $extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

  if(!in_array(strtolower($extension), $allowed)){
    echo '{"status":"error"}';
    exit;
  }

  //$nombre_foto = $_FILES['foto']['name']; // nombre original del archivo
  $nombre_foto = $_FILES['foto']['name']; //$_POST['id_foto'];
  if(move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/'.$nombre_foto)){
  echo '{"status":"success"}';

  // Guardado en la base de datos
  mysql_query("INSERT servicios SET placa='$placa', cliente='$cliente', nit='$nit', fecha_recibo='$fecha_recibo', direccion='$direccion', telefono='$telefono', hora_recibo='$hora_recibo', foto='$nombre_foto'")

   or die(mysql_error());

  header("Location: view-paginated.php");
  // FIN Guardado en la base de datos
    exit;
  }
}
echo '{"status":"error"}';
exit;
//UPLOAD

}

}

else

{

renderForm('','','','','','','','','');

}

?>
</body>
</html>