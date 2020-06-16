<?php

class Competencia{

     //parametros e entrada
     private $CodigoCompetencia;
     private $NombreCompetencia;

     //Definir consructtor
     public function __construct(){}

     //Definir los metodos  set y get para cada  atribut de la clase
     public function setCodigoCompetencia($CodigoCompetencia){
          $this->CodigoCompetencia = $CodigoCompetencia;
     }

     public function getCodigoCompetencia(){
          return $this->CodigoCompetencia;
     }

     public function setNombreCompetencia($NombreCompetencia){
          $this->NombreCompetencia = $NombreCompetencia;
     }

     public function getNombreCompetencia(){
          return $this->NombreCompetencia;
     }
}

// // testear  funcionalidad de clase.
// $Competencia = new Competencia(); //Crear objeto
// $Competencia->setCodigoCompetencia(27);
// $Competencia->setNombreCompetencia("Pytom");
// echo "Codigo Competencia : " .$Competencia->getCodigoCompetencia(). " Nombre Competencia : " .$Competencia->getNombreCompetencia();

?>