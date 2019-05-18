<?php
ob_start();
?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
<title>Editar Repuestos - Autoservicio</title>

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

function renderForm($id, $id_repuesto, $orden, $repuesto, $valor, $error)

{

?>
<?php

// Si hay errores posible errores

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>

<h2>Editar Repuesto</h2>

<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<input type="hidden" name="id_repuesto" value="<?php echo $id_repuesto; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?><?php echo $id_repuesto; ?></p>

<div class="form-group" style="position:relative;left:31%;font-size:1.5em;">

  <label for="usr">Orden:</label>
   <input type="text" style="width:8%;" name="orden" value="<?php echo $orden; ?>" readonly="readonly">

   <p><br /></p>

  <label for="usr">Repuesto:</label>
   <input type="text" name="repuesto" value="<?php echo $repuesto; ?>">

   <p><br /></p>

   <label for="">Valor:</label>
   <input type="text" style="width:47%;" name="valor" value="<?php echo $valor; ?>">

   <p><br /></p>

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

$id_repuesto = $_POST['id_repuesto'];

$orden = $_POST['orden'];

$repuesto = $_POST['repuesto'];

$valor = $_POST['valor'];

// valida los campos importantes

if ($orden == '')

{

// Generar mensaje de error

$error = '<div class="alert alert-danger">
  <strong>¡Error!</strong> ¡Llene todos los campos.
</div>';



//error, muestar el formulario

renderForm($id, $id_repuesto, $orden, $repuesto, $valor, $error);

}

else

{

// Guarda los datos a mysql bd

mysql_query("UPDATE repuestos SET orden='$orden', repuesto='$repuesto', 
  valor='$valor' WHERE id='$id'")

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

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM autoservicio.repuestos WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// revisa el id que este en la bd

if($row)

{



// obtener datos desde la db

$id_repuesto = $row['id_repuesto'];

$orden = $row['orden'];

$repuesto = $row['repuesto'];

$valor = $row['valor'];

// muestra el formulario

renderForm($id, $id_repuesto, $orden, $repuesto, $valor, '');

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