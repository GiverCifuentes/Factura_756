<?php
class DetalleFactura{
    private $CodigoDetalleFactura;
    private $CodigoFactura;
    private $CodigoProducto;
    private $Cantidad;
    private $ValorUnitario;

    function __construct(){}

    public function setCodigoDetalleFactura($CodigoDetalleFactura)
    {
        $this->CodigoDetalleFactura = $CodigoDetalleFactura;
    }

    public function getCodigoDetalleFactura(){
        return $this->CodigoDetalleFactura;
    }

    public function setCodigoFactura($CodigoFactura)
    {
        $this->CodigoFactura = $CodigoFactura;
    }

    public function getCodigoFactura(){
        return $this->CodigoFactura;
    }

    public function setCodigoProducto($CodigoProducto)
    {
        $this->CodigoProducto = $CodigoProducto;
    }

    public function getCodigoProducto(){
        return $this->CodigoProducto;
    }

    public function setCantidad($Cantidad)
    {
        $this->Cantidad = $Cantidad;
    }

    public function getCantidad(){
        return $this->Cantidad;
    }

    public function setValorUnitario($ValorUnitario)
    {
        $this->ValorUnitario = $ValorUnitario;
    }

    public function getValorUnitario(){
        return $this->ValorUnitario;
    }

}
?>