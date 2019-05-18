<?php

/*

DELETE.PHP

Borrar un item especifoco

*/



// conexion bd

include('connect-db.php');



// valida la variavle correspondiente al ID

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// transmite ID

$id = $_GET['id'];



// Elimina el ITEM

$result = mysql_query("DELETE FROM detalles WHERE id_d=$id")

or die(mysql_error());



// se redirecciona a la página de resultados

header("Location: view-paginated.php");

}

else


{

header("Location: view-paginated.php");

}



?>