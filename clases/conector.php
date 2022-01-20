<?php

namespace clases;

use interfaces\Ioperacion;

class Conector
{

    private $operacion;

    public function __construct(Ioperacion $operacion)
    {
        $this->operacion = $operacion;
    }

    public function calcular()
    {
        return $this->operacion->operaciones();
    }
}
