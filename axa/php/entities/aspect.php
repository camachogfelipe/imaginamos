<?php

class aspect{

    private $id;
    private $name;
    private $value;
    private $descr;

    function __construct(){
			$this->id = 'null';
            $this->name = 'null';
            $this->value = 'null';
            $this->descr = 'null';
    }

    //GET'S & SET'S
    function setId($idp){
        $this->id = $idp;
    }

    function getId(){
        return $this->id;
    }

    function setName($namep){
        $this->name = $namep;
    }

    function getName(){
        return $this->name;
    }

    function setValue($nvalue){
        $this->value = $nvalue;
    }

    function getValue(){
        return $this->value;
    }

    function getValue4HTML(){
        return nl2br($this->value);
    }


    function setDescrp($descp){
        $this->descr = $descp;
    }

    function getDescrip(){
        return $this->descr;
    }


    function setObject($aspect){
        $this->id = $aspect->getId();
        $this->name = $aspect->getName();
        $this->value = $aspect->getValue();
        $this->descr = $aspect->getDescrip();
    }


}

?>
