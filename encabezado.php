<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ARCHIVOS DEL MENU -->
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><img width="75px" height="75px" src="img/logo_empresa.jpg" title="Logo" alt="Logo"></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
	  <li class="active"><span id="inicio"><a href="index.php" class="btn btn-primary" title="Inicio">INICIO</a></span>
      <li><span id="nuevo"><a href="new.php" class="btn btn-success" title="Registrar Nuevo Cliente">NUEVO CLIENTE</a></span></li>
	  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          INFORMES<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><span id="verconsultas"><a title="Informe 1" href="informe1.php">Servicios</a></li></span>
          <li><span id="vercitas"><a title="Informe 2"href="informe2.php">Repuestos</a></li></span>
		</ul>
      </li>
	  </li>
    </ul>
    <!--<form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>-->
	
	<ul class="nav navbar-nav navbar-center">
      <li>
        <span class="label label-primary">AUTOSERVICIO</span>
        <span class="label label-secundary">Usuario: <?php echo $_SESSION["usuarioactual"] ?></span>

      </li></ul>
    </form>
 
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          SISTEMA<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
		<li><span id="backup"><a href="backup.php" title="Realizar Copia de seguridad de la Base de datos y descargarla al Computador">Backup</a></span></li>
          <li><span id="log"><a href="../log.php" title="Visualizar Log de Operaciones">Log</a></span></li>
          <li class="divider"></li>
          <li></li>
		</ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          USUARIO<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="label label-warning"><?php echo $_SESSION["usuarioactual"] ?></span></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li class="divider"></li>
          <li><a title="Salir de forma segura del sistema" href="../salir.php" class="btn btn-default" role="button">Cerrar sesion</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav><br><br><br>
</div>
</body>
</html>