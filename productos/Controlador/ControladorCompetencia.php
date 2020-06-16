<?php

session_start();

if (!(isset($_SESSION["NombreUsuario"]))) {
 header("location:../../Index.php");    
}



require_once('../../Conexion.php');
require_once('../Modelo/Competencia.php');// vincular la clase
require_once('../Modelo/CrudCompetencia.php');

$Competencia = new Competencia(); // creal el objeto competencia
$CrudCompetencia = new CrudCompetencia();

if (isset($_POST["Registrar"]))// si lapeticion se registra
{

     $Competencia->setCodigoCompetencia($_POST["CodigoCompetencia"]);//instanciar el atributo
     $Competencia->setNombreCompetencia($_POST["NombreCompetencia"]);// instanciar  el atributo
     //echo $Competencia->getNombreCompetencia();// verifica la instancia

     $CrudCompetencia::InsertarCompetencia($Competencia);// llamar al metodo para  indertar

}
else if (isset($_POST["Modificar"]))// si lapeticion se registra
{
     //echo "Modificar ";
     $Competencia->setCodigoCompetencia($_POST["CodigoCompetencia"]);//instanciar el atributo
     $Competencia->setNombreCompetencia($_POST["NombreCompetencia"]);// instanciar  el atributo
     //echo $Competencia->getNombreCompetencia();// verifica la instancia

     $CrudCompetencia::ModificarCompetencia($Competencia);// llamar al metodo para  Modificar

}

else if ($_GET['Accion'] == "EliminarCompetencia") {
     // echo "En Desarrollo";
     // echo $_GET["CodigoCompetencia"];
     $CrudCompetencia::EliminarCompetencia($_GET["CodigoCompetencia"]);
}


?>