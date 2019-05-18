<?php include("seguridad.php"); ?>
<?php include("encabezado.php"); ?>
<center>
<legend>LOG DE OPERACIONES</legend>
<?php
  $ar=fopen("log.txt","r") or
    die("No se pudo abrir el archivo");
  while (!feof($ar))
  {
    $linea=fgets($ar);
    $lineasalto=nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);
?>
</center>