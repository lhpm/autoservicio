<?php
ob_start();
?>

<!DOCTYPE html>

<html lang="es">

<head>
<meta charset="utf-8">
<title>Editar Cliente - Autoservicio</title>

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

function renderForm($id, $placa, $cliente, $nit, $fecha_recibo, $direccion, $telefono, $hora_recibo, $foto, $error)

{

?>
<?php

// Si hay errores posible errores

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>

<h2>Editar Cliente</h2>

<form action="" method="post" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>

<div class="form-group" style="position:relative;left:20%;font-size:1.5em;">
  <label for="usr">Placa *:</label>
   <input type="text" class="" name="placa" value="<?php echo $placa; ?>">

  <label for="usr">Nit *:</label>
   <input type="text" class="" name="nit" value="<?php echo $nit; ?>">

   <p><br /></p>

   <label for="">Cliente *:</label>
   <input type="text" style="width:47%;" name="cliente" value="<?php echo $cliente; ?>">

   <p><br /></p>

  <label for="usr">Dirección:</label>
   <input type="text" style="width:25%;" name="direccion" value="<?php echo $direccion; ?>">

  <label for="usr">Teléfono *:</label>
   <input type="text" style="width:15%;" name="telefono" value="<?php echo $telefono; ?>">

   <p><br /></p>

  <label for="usr">Fecha Creación:</label>
   <input type="text" style="width:10%;" name="fecha_recibo" value="<?php echo $fecha_recibo; ?>" readonly>

  <label for="usr">Hora Creación:</label>
   <input type="text" style="width:10%;" name="hora_recibo" value="<?php echo $hora_recibo; ?>" readonly>

   <br />


  <h5>Nombre del archivo de la firma: <?php echo "$foto" ?></h5>

  <label for="usr">Firma:</label>
   <input type="file" name="foto" value="<?php echo $foto; ?>" readonly>
   <img src="uploads/<?php echo "$foto" ?>" style="width:300px;height:200px;">

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

if (is_numeric($_POST['id']))

{

// Homologacion de campos

$id = $_POST['id'];

$placa = $_POST['placa'];

$cliente = $_POST['cliente'];

$nit = $_POST['nit'];

$fecha_recibo = $_POST['fecha_recibo'];

$direccion = $_POST['direccion'];

$telefono = $_POST['telefono'];

$hora_recibo = $_POST['hora_recibo'];

$foto = $_POST['foto'];

// valida los campos importantes

if ($placa == '')

{

// Generar mensaje de error

$error = '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡Llene todos los campos.
</div>';



//error, muestar el formulario

renderForm($id, $placa, $cliente, $nit, $fecha_recibo, $direccion, $telefono, $hora_recibo, $foto, $error);

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

// Guarda los datos a mysql bd

mysql_query("UPDATE servicios SET placa='$placa', cliente='$cliente', nit='$nit', fecha_recibo='$fecha_recibo' , direccion='$direccion' , telefono='$telefono' , hora_recibo='$hora_recibo' , foto='$nombre_foto' WHERE id='$id'")

or die(mysql_error());

// grabacion, redirecciona a la pagina

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

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM servicios WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// revisa el id que este en la bd

if($row)

{



// obtener datos desde la db

$placa = $row['placa'];

$cliente = $row['cliente'];

$nit = $row['nit'];

$fecha_recibo = $row['fecha_recibo'];

$direccion = $row['direccion'];

$telefono = $row['telefono'];

$hora_recibo = $row['hora_recibo'];

$foto = $row['foto'];

// muestra el formulario

renderForm($id, $placa, $cliente, $nit, $fecha_recibo, $direccion, $telefono, $hora_recibo, $foto, '');

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