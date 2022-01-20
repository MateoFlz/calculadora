<?php

namespace clases;
use interfaces\Ioperacion;

class Division extends Operaciones implements Ioperacion{
 
    public function __construct($numeroUno, $numeroDos)
    {
        parent::__construct($numeroUno, $numeroDos);
    }
    
    public function operaciones(){
        return ($this->getnumeroUno() / $this->getnumeroDos());
    }
}
