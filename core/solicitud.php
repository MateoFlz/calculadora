<?php

namespace core;

class Solicitud
{

    private $controlador;
    private $metodo;
    private $argumento;

    public function __construct()
    {
        if (isset($_GET['url'])) {
            $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $ruta = explode('/', rtrim($_GET['url'], '/'));
            $ruta = array_filter($ruta);
            $this->ruta($ruta);
        } else {
            $this->controlador = 'index';
            $this->metodo = 'index';
        }
    }

    private function ruta($ruta)
    {

        if ($ruta[0] == 'index.php') {
            $this->controlador = 'index';
        } else {
            $this->controlador = strtolower(array_shift($ruta));
        }
        $this->metodo = strtolower(array_shift($ruta));

        if (!$this->metodo) {
            $this->metodo = 'index';
        }
        $this->argumento = $ruta;
    }


    public function getControlador()
    {
        return $this->controlador;
    }

    public function getMetodo()
    {
        return $this->metodo;
    }
    public function getArgumento()
    {
        return $this->argumento;
    }
}
