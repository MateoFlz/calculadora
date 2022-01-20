<?php

namespace controlador;

class indexControlador extends baseControlador{

    public function index(){
        return $this->vista('index/index');
    }
}