<?php
/*

CONNECT-DB.PHP

Allows PHP to connect to your database

*/

// Database Variables (edit with your own server information)

$server = 'localhost';

$user = 'luipat7_dg';

$pass = 'Sistemas2018';

$db = 'luipat7_dg';


// Connect to Database

$connection = @mysql_connect($server, $user, $pass)

or die ("No se pudo conectar con el servidor ... \n" . mysql_error ());

mysql_select_db($db)

or die ("No se pudo conectar con la Base de datos ... \n" . mysql_error ());
?>