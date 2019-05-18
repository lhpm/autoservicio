<?php include("../seguridad.php"); ?>
<h5>Usuario: <?php echo $_SESSION["usuarioactual"] ?></h5>
<?php
header("Location: view-paginated.php");
?>