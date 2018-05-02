<?php
class Empleado extends Persona{
    var $id;

    function __construct ($nombre,$id){
        parent::__construct($nombre,$id);
        $this->temp = $id;
    }

    function getTemp (){
        return $this->id;
    }

    function setid ($id){
        $this->id = $id;
    }

    function mostrar(){
        return $this->getid;
    }
}
