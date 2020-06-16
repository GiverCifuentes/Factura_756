<?php

class CrudFactura{
     public function __construct(){}
 
     public function InsertarFactura($Factura){
          $CodigoFacturaGenerado = -1;
          $Db = Db::Conectar();
          $Sql = $Db->prepare('INSERT INTO facturas VALUES(NULL,
          :CodigoCliente,NOW())');
          $Sql->bindValue('CodigoCliente',$Factura->getCodigoCliente());
          try{
               $Sql->execute(); //Ejecutar la inserción
               echo "Factura Generada";
               echo "<br>";
               $CodigoFacturaGenerado = $Db->lastInsertId();//Consultar el último Id Insertado
          }
          catch(Exception $e)
          {
               echo $e->getMessage();
               die();
          }
         return $CodigoFacturaGenerado; //Retornar el Id Insertado
     }
}

?>