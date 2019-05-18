<?php
//Reanudamos la sesión
session_start();

    //Archivo Log
    //ponemos tipo 'a' para añadir lineas sin borrar
    $file=fopen("log.txt","a") or die("Problemas");
    //vamos añadiendo el contenido
    fputs($file,"Salió del Sistema");
    fputs($file,",");
    fputs($file,date("d/m/Y H:i:s",time()-3600));
    fputs($file,",");
    fputs($file,$_SESSION["usuarioactual"]);
    fputs($file,",");
    fputs($file,"{$_SERVER['REMOTE_ADDR']}");
    fputs($file,"\r\n");
    fclose($file);
    // FIN Archivo Log 

//Literalmente la destruimos
session_destroy();
//Redireccionamos a index.php (al inicio de sesión)
header("Location: http://luismachadoportafolio.com.co/autoservicio/index.php");
?>