<?php

namespace clases;

abstract class Operaciones{

    abstract function operaciones();

    private $numeroUno;
    private $numeroDos;

    public function __construct($numeroUno, $numeroDos)
    {
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
    }

    public function getnumeroUno(){
        return $this->numeroUno;
    }

    public function getnumeroDos(){
        return $this->numeroDos;
    }
    public function setnumeroUno($numeroUno){
        return $this->numeroUno = $numeroUno;
    }

    public function setnumeroDos($numeroDos){
        return $this->numeroDos = $numeroDos;
    }
}