<?php
requiere_once ("Persona.php");

class Cliente extends Persona{
    var $cif;

    function __construct ($nombre,$cif){
        parent::__construct($nombre);
        $this->cif = $cif;

    }

    function getcif (){
        return $this->cif;
    }

    function setcif ($cif){
        $this->cif = $cif;
    }

    function anadirRepostajeUno ($repostaje) {
        $this->repostaje [] =;
    function mostrar(){
       parent::mostrar ();
       echo $this->getCif(). "<br>";
       
    }
}
