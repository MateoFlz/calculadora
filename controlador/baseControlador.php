<?php

namespace controlador;

class baseControlador{

    protected function vista($metodo = '', $datos = []){
        if(file_exists(_RUTA_.'vista\\'.$metodo.'.php')){
            require_once _RUTA_.'vista\\'.$metodo.'.php';
        }else{
            die('MATEO TODO ESTA MALO');
        }
    }
}