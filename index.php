<?php
//Crea una variable con el tiempo inicial
$tiempo_inicial = microtime(true);

include("nocache.php");
nocache();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FUCIAM FACTURACION</title>
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="img/logo_empresa.jpg" style="width:100%;height:100%;">
<center>
<h2 style="color:white;font-size:3em;left:39%;position:absolute;">Fuciam</h2>
<form role="form" action="control.php" method="post" id="form" style="top:25%;position:absolute;">
<div class="input-group" style="width:30%;">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite el Usuario">
</div>
<div class="input-group" style="width:30%;">
   <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
   <input type="password" class="form-control" name="clave" id="clave" placeholder="Digite la clave">
</div>
<input type="submit" name="submit" value="Entrar" class="btn btn-success" 
style="left:35%;top:110%;position:absolute;width:30%;">
</form>
<!-- Trigger the modal with a button -->
<button style="left:35%;top:50%;position:absolute;width:30%;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Ayuda</button></h3></div>
</center>
<?php include_once("footer.php"); 
//Crea una variable con el tiempo final
$tiempo_final = microtime(true);
//Restamos los dos tiempos
$tiempo_ejecucion = $tiempo_final - $tiempo_inicial;

echo 'LA PAGINA tard&oacute; '.round($tiempo_ejecucion,4).' segundos en ejecutarse';

?>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ayuda - Inicio de Sesión</h4>
      </div>
      <div class="modal-body">
        <p>El Usuario y la Contraseña será suministrada por el proveedor.<br />
        Posteriormente en una actualización se implementarán más funciones<br />
        administrativas como las de poder crear sus propios usuarios ilimitadamente.</p>
      </div>
    </div>

  </div>
</div>

</body>
</html>