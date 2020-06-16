<?php

session_start();

if (!(isset($_SESSION["NombreUsuario"]))) {
 header("location:../../Index.php");    
}


require_once('../../Conexion.php');
require_once('../Modelo/Factura.php');
require_once('../Modelo/CrudFactura.php');

$CrudFactura = new CrudFactura();
$ListaFacturas = $CrudFactura->ListarFacturas();

//var_dump($ListaCompetencias);

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1 align="center">Listado de Competencias</h1>
     <br>
     <div align="center">
     <button ><a href="../../TCPDF/examples/reportepdfCompetencias.php" target="_blank">Reporte Pdf</a></button>
     </div>
     <br>
     <table align="center" border="1">
          <thead>
               <tr>
               <th>Codigo Competencia</th>
               <th>Nombre Competencia</th>
               <th>Acciones</th>
               </tr>
          </thead>
          <tbody>
          <?php
               foreach ($ListaCompetencias as $Competencia) {
                    ?>
                    <tr>
                    <td><?php echo $Competencia->getCodigoCompetencia();?></td>
                    <td><?php echo $Competencia->getNombreCompetencia();?></td>
                    <td>
                    <a href="EditarCompetencias.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia();?>">Editar</a> 
                    <a href="../Controlador/ControladorCompetencia.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia();?>&Accion=EliminarCompetencia">Eliminar</a> 
                    </td>

                    <?php
               }
          ?>
          </tbody>
     
     </table>
     <br>
     <div align="center">
     <button><a href="../index.php">Volver</a></button>
     </div>
</body>
</html>



