<?php include("../seguridad.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script>
/*Funcion Cargar y Mostrar datos*/
$(document).ready(function(){
    $('#boton-cargar').ready(function(){           
        /*Obtener datos almacenados*/
        var emagrim = localStorage.getItem("Emagrim");
        var precio = localStorage.getItem("Precio");
        /*Mostrar datos almacenados*/      
        document.getElementById("emagrim").innerHTML = emagrim;
        document.getElementById("precio").innerHTML = precio;
        $("#emagriminput").val(emagrim); /*Insertar el precio en el input*/ 
        $("#precioinput").val(precio); /*Insertar el precio en el input*/  
    });
});
</script>
</head>
<body>
<?php include("../encabezado.php"); ?>
<h3>Lista de Repuestos</h3>
<label type="text" id="nombre"></label>
<?php
error_reporting(0);
$con = @mysql_connect('localhost','root','') or die('Error en conexion a la DB');
mysql_select_db('autoservicio', $con) or die('Error al seleccionar la DB');
$id_repuesto=$_POST['id_repuesto'];
$orden=$_POST['orden'];
$repuestos=$_POST['repuesto'];
$valor=$_POST['valor'];

for ($i=0; $i<count($repuestos); $i++) {
    echo '<table class="table">';
	    echo '<thead>';
        echo '<tr>';
            echo '<th>Orden</th>';
            echo '<th>Repuesto</th>';
            echo '<th>Valor</th>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
	echo '<tr>';
    echo '<td>';
	echo $orden;
	echo '</td>';
	echo '<td>';
	echo $repuestos[$i];
	echo '</td>';
	echo '<td>';
	echo $valor[$i];
	echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>';
	$total = $valor[$i] + $total;
	echo '</td>';
	echo '</tr>';
	echo '</tbody>';
	echo '</table>';
$res = mysql_query("INSERT INTO repuestos (id_repuesto,orden,repuesto,valor) VALUES ('$id_repuesto','$orden','$repuestos[$i]','$valor[$i]')"); 
}
print "Total Repuestos:";
echo $total;
?>
<body>
</html>