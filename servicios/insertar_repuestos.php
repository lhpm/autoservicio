<?php include("../seguridad.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INSERTAR REPUESTOS - Autoservicio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="bootstrap/js/twitter-bootstrap-hover-dropdown.min.js"></script>
<!-- AGREGAR REPUESTOS -->
<script type="text/javascript">
 // FUNCION ELIMINAR PRODUCTO LISTADO CARRITO
  $(document).ready(function() {
    // ESTE ES EL BOTON ELIMINAR 
    $("#vaciar").click(function(event) {
      $("#eliminar").remove();
          });
  });

function agregar() {
	campo = '<div style=""><span id="eliminar"><br /><input type="text" style="width:25%;right:20px;font-size:1.5em;" name="repuesto[]" placeholder="Repuesto"><input type="text" style="width:25%;font-size:1.5em;" name="valor[]" placeholder="Valor"></span></div>';
	$("#repuestos").append(campo);
}
</script>
<!-- FIN AGREGAR REPUESTOS -->
</head>

<body>
<?php include("../encabezado.php"); ?>
<center>
<h2>AÑADIR REPUESTOS AL SERVICIO</h2>
<form class="form-vetical" role="form" name="frm_multiple" method="post" action="procesar.php">
	   
    	<span id="repuestos">
        <input type="text" style="width:2%;" name="id_repuesto" value="<?php echo $_GET['id'];?>" readonly>
        <input type="text" style="width:4%;" name="orden" value="<?php echo $_GET['orden'];?>" readonly>
        <br />
        <div class='table‐responsive'>
         <table class='table table-hover' style="font-size:1.5em;">
         <thead><th>Orden</th><th>Cliente</th><th>Marca</th></thead>
         <tbody><tr>
         <td><?php echo $_GET['orden']; ?></td>
         <td><?php echo $_GET['cliente']; ?></td>
         <td><?php echo $_GET['marca']; ?></td>
         </tr></tbody>
         </table>
         </div>
        </div>
        <p><br /></p>
        <input type="text" style="width:25%;right:20px;font-size:1.5em;" name="repuesto[]" placeholder="Repuesto">
        <input type="text" style="width:25%;font-size:1.5em;" name="valor[]" placeholder="Valor">
      </span>

<br />
  <p><br /></p>
	<a class="btn btn-warning" href="#" onclick="agregar();">Agregar Repuesto</a>
  <input class="btn btn-danger" type="button" id="vaciar" value="Quitar">
	<input class="btn btn-success" type="submit" name="Send" value="Guardar" />
  <a class="btn btn-info" href="javascript:history.back()">Cancelar</a>
</form>
</center>
</body>
</html>