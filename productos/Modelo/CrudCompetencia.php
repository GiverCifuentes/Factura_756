<?php

//require_once('../Conexion.php');


class CrudCompetencia{

     public function __construct(){
     }

     public function InsertarCompetencia($Competencia){
          $Db = Db::Conectar();// conectar a la base de Datos
          //definir la insercion a realizar
          $Insert = $Db->prepare('INSERT INTO competencia VALUES(:CodigoCompetencia,:NombreCompetencia)');
          $Insert->bindValue('CodigoCompetencia', $Competencia->getCodigoCompetencia());
          $Insert->bindValue('NombreCompetencia', $Competencia->getNombreCompetencia());
          try {
               $Insert->execute();//ejecutar el insert
               //Echo " Registro exitoso";
               ?>
               <script>
          //header("location:../../index.php");
               alert("Registro exitoso");
               document.location.href="../Index.php";
               </script>
               <?php
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }

     }

     //Listar todos los datos.

     public function ListarCompetencias(){
          $Db = Db::Conectar();
          $ListaCompetencias = [];
          $Sql = $Db->query('SELECT * FROM competencia');
          $Sql->execute();

          foreach ($Sql->fetchAll() as $Competencia) {
               $MyCompetencia = new Competencia();

               // echo $Competencia['CodigoCompetencia']."-----".$Competencia['NombreCompetencia'];

               $MyCompetencia->setCodigoCompetencia($Competencia['CodigoCompetencia']);
               $MyCompetencia->setNombreCompetencia($Competencia['NombreCompetencia']);
               $ListaCompetencias[] = $MyCompetencia;
          }

          return $ListaCompetencias;
     }

     public function ObtenerCompetencia($CodigoCompetencia){//Codigo para obtener una competencia
          $Db = Db::Conectar();
          $Sql = $Db->prepare('SELECT * FROM competencia WHERE CodigoCompetencia=:CodigoCompetencia');
          $Sql->bindValue('CodigoCompetencia', $CodigoCompetencia);
          $MyCompetencia = new Competencia();

          try {
               $Sql->execute();//ejecutar el insert
               $Competencia = $Sql->fetch();
               $MyCompetencia->setCodigoCompetencia($Competencia['CodigoCompetencia']);
               $MyCompetencia->setNombreCompetencia($Competencia['NombreCompetencia']);

          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la modificacion
               die();
          }
          return $MyCompetencia;
     }

     public function ModificarCompetencia($Competencia){
          $Db = Db::Conectar();// conectar a la base de Datos
          //definir la modificacion a realizar
          $Sql = $Db->prepare('UPDATE competencia SET NombreCompetencia=:NombreCompetencia WHERE CodigoCompetencia=:CodigoCompetencia');
          $Sql->bindValue('CodigoCompetencia', $Competencia->getCodigoCompetencia());
          $Sql->bindValue('NombreCompetencia', $Competencia->getNombreCompetencia());
          try {
               $Sql->execute();//ejecutar el insert
               //Echo " Modificacion exitosa";
               ?>
               <script>
               //header("location:../../index.php");
               alert("Modificacion Exitosa!!");
               document.location.href="../Vista/ListarCompetencias.php";
               </script>
               <?php
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }

     }
     public function EliminarCompetencia($CodigoCompetencia){
          $Db = Db::Conectar();// conectar a la base de Datos
          //definir la modificacion a realizar
          $Sql = $Db->prepare('DELETE FROM competencia WHERE CodigoCompetencia=:CodigoCompetencia');
          $Sql->bindValue('CodigoCompetencia', $CodigoCompetencia);
          
          try {
               $Sql->execute();//ejecutar el insert
               //Echo "Eliminacion exitosa";
               ?>
               <script>
               //header("location:../../index.php");
               alert("Eliminacion exitosa!!");
               document.location.href="../Vista/ListarCompetencias.php";
               </script>
               <?php
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }

     }

}


?>