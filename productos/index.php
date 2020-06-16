<?php

session_start();

if (!(isset($_SESSION["NombreUsuario"]))) {
 header("location:../Index.php");    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="css/estilosIndex.css"></link>
</head>
<body>
     <h1 align="center">Administar Competencias</h1>

     <section class="section-1" align="center">
               <div class="section-1_card" align="center">
                    <a href="Vista/IngresarCompetencia.php">Ingresar</a>
               </div>
               <div class="section-1_card" align="center">
                    <a href="Vista/ListarCompetencias.php">Listar</a>
               </div>
     </section>
</body>
</html>