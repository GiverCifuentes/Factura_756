<?php

session_start();

if (!(isset($_SESSION["NombreUsuario"]))) {
 header("location:../../Index.php");    
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1 align="center">Competencia</h1>
     <form align="center" action="../Controlador/ControladorCompetencia.php" method="post">
     Codigo competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia">
     <br><br>
     Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia">
     <br><br>

     <input type="hidden" name="Registrar" id="Registrar">
     <button type="submit">Registrar</button>
     </form>
     <br>
     <div align="center">
     <button><a href="../Index.php">Volver</a></button>
     </div>

</body>
</html>


