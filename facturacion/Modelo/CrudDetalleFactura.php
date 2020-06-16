<?php
class CrudDetalleFactura{

     public function __construct(){}

     public function InsertarDetalleFactura($DetalleFactura){
     $DetalleInsertado=0;
     $Db = Db::Conectar();
     $Sql = $Db->prepare('INSERT INTO detallefacturas(CodigoDetalleFactura, CodigoFactura, CodigoProducto, Cantidad, ValorUnitario) VALUES(NULL,:CodigoFactura,:CodigoProducto,:Cantidad,:ValorUnitario)');
     $Sql->bindValue('CodigoFactura',$DetalleFactura->getCodigoFactura());
     $Sql->bindValue('CodigoProducto',$DetalleFactura->getCodigoProducto());
     $Sql->bindValue('Cantidad',$DetalleFactura->getCantidad());
     $Sql->bindValue('ValorUnitario',$DetalleFactura->getValorUnitario());
     try
     {
          $Sql->execute();//ejecutar el INSERT
          $DetalleInsertado = 1;
          
     }
     catch(Exception $e)
     {
      echo $e->getMessage();//Mostrar errores en la insercion.
      echo "<br>";
      //die();
     
     }
     return $DetalleInsertado;
     }

}


?>