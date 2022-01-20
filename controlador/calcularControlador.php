<?php

namespace controlador;

use clases\Conector;
use clases\Operaciones;

class calcularControlador extends baseControlador
{

    public function calcular()
    {
        $calulador = 'clases\\' . $_POST['operacion'];
        $conector = new Conector(new $calulador($_POST['numero-uno'], $_POST['numero-dos']));
        $this->vista('index/index', $conector->calcular());
    }


    /*
        probando json desde POSTMAN

    */

    public function toJson()
    {
        $_POST = json_decode(file_get_contents('php://input'), true);
        $calulador = 'clases\\' . $_POST['operacion'];
        $conector = new Conector(new $calulador($_POST['numero-uno'], $_POST['numero-dos']));
        echo  $conector->calcular();
    }
}
