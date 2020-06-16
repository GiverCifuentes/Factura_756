<?php

class Factura{

    private $CodigoFactura;
    private $CodigoCliente;
    private $FechaFactura;

    function __construct(){}

    public function setCodigoFactura($CodigoFactura)
    {
        $this->CodigoFactura = $CodigoFactura;
    }

    public function getCodigoFactura(){
        return $this->CodigoFactura;
    }

    public function setCodigoCliente($CodigoCliente)
    {
        $this->CodigoCliente = $CodigoCliente;
    }

    public function getCodigoCliente(){
        return $this->CodigoCliente;
    }

    public function setFechaFactura($FechaFactura)
    {
        $this->FechaFactura = $FechaFactura;
    }

    public function getFechaFactura(){
        return $this->FechaFactura;
    }
}

// // testear  funcionalidad de clase.
// $Competencia = new Competencia(); //Crear objeto
// $Competencia->setCodigoCompetencia(27);
// $Competencia->setNombreCompetencia("Pytom");
// echo "Codigo Competencia : " .$Competencia->getCodigoCompetencia(). " Nombre Competencia : " .$Competencia->getNombreCompetencia();

?>