<?php
     /* Realizamos la conexión con nuestra base de datos en MySQL */
     $link = mysql_connect("localhost","luipat7_dg","Sistemas2018");
     mysql_select_db("luipat7_dg", $link);

     /* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función 
     htmlentities para evitar inyecciones SQL. */
     $myusuario = mysql_query("select idusuario from usuarios 
                                 where idusuario =  '".htmlentities($_POST["usuario"])."'",$link);
     $nmyusuario = mysql_num_rows($myusuario);

     //Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario...
     if($nmyusuario != 0){
          $sql = "select idusuario
               from usuarios
               where estado = 1
               and idusuario = '".htmlentities($_POST["usuario"])."' 
               and clave = '".md5(htmlentities($_POST["clave"]))."'";
          $myclave = mysql_query($sql,$link);
          $nmyclave = mysql_num_rows($myclave);

          //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo.
          if($nmyclave != 0){
               session_start();
               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
               $_SESSION["autentica"] = "SIP";
               $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); //nombre del usuario logueado.
               //Direccionamos a nuestra página principal del sistema.
               header ("Location: servicios/view-paginated.php?page=1");

    //Archivo Log
    //ponemos tipo 'a' para añadir lineas sin borrar
    $file=fopen("log.txt","a") or die("Problemas");
    //vamos añadiendo el contenido
    fputs($file,"Ingreso al Sistema");
    fputs($file,",");
    fputs($file,date("d/m/Y H:i:s",time()-3600));
    fputs($file,",");
    fputs($file,$_SESSION["usuarioactual"]);
    fputs($file,",");
    fputs($file,"{$_SERVER['REMOTE_ADDR']}");
    fputs($file,"\r\n");
    fclose($file);
    // FIN Archivo Log 
          }
          else{
               echo"<script>alert('LA CONTRASEÑA DEL USUARIOS NO ES CORRECTA.');
               window.location.href=\"index.php\"</script>";

                   //Archivo Log
    //ponemos tipo 'a' para añadir lineas sin borrar
    $file=fopen("log.txt","a") or die("Problemas");
    //vamos añadiendo el contenido
    fputs($file,"La Contraseña del Usuario no es correcta");
    fputs($file,",");
    fputs($file,date("d/m/Y H:i:s",time()-3600));
    fputs($file,",");
    fputs($file,"Intento de Entrada Fallida");
    fputs($file,",");
    fputs($file,"{$_SERVER['REMOTE_ADDR']}");
    fputs($file,"\r\n");
    fclose($file);
    // FIN Archivo Log
          }
     }else{
          echo"<script>alert('El usuario no existe.');window.location.href=\"index.php\"</script>";
              //Archivo Log
    //ponemos tipo 'a' para añadir lineas sin borrar
    $file=fopen("log.txt","a") or die("Problemas");
    //vamos añadiendo el contenido
    fputs($file,"El Usuario no existe");
    fputs($file,",");
    fputs($file,date("d/m/Y H:i:s",time()-3600));
    fputs($file,",");
    fputs($file,"Intento de Entrada Fallida");
    fputs($file,",");
    fputs($file,"{$_SERVER['REMOTE_ADDR']}");
    fputs($file,"\r\n");
    fclose($file);
    // FIN Archivo Log 
     }
     mysql_close($link);
?>
