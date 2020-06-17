<?php

session_start();

if (!(isset($_SESSION["NombreUsuario"]))) {
 header("location:Index.php");    
}

// echo "El usuario es : " .$_SESSION["NombreUsuario"];
// echo "<br>";
// echo "El Roll es : " .$_SESSION["IdRol"];
// echo "<br>";
// echo "El Id es : " .$_SESSION["IdUsuario"];
// echo "<br>";

?>


<a href="facturacion/">Facturacion</a>
<br>
<a href="CerrarSesion.php">Cerrar</a>