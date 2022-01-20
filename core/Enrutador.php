<?php

namespace core;

class Enrutador
{

    public static function enrutar(Solicitud $request)
    {

        $controlador = $request->getControlador() . 'controlador';
        $ruta = _RUTA_ . 'controlador' . DIRECTORY_SEPARATOR . $controlador . '.php';
        $metodo = $request->getMetodo();

        if ($metodo == 'index.php') {
            $metodo = 'index';
        }

        $argumento = $request->getArgumento();

        if (is_readable($ruta)) {
            require_once $ruta;
            $vista = 'controlador' . DIRECTORY_SEPARATOR . $controlador;

            $controlador = new $vista;
            if (!isset($argumento)) {
                call_user_func(array($controlador, $metodo));
            } else {
                call_user_func_array(array($controlador, $metodo), $argumento);
            }
        }

        $ruta = _RUTA_ . DIRECTORY_SEPARATOR . 'vista' . DIRECTORY_SEPARATOR . $request->getControlador() . DIRECTORY_SEPARATOR . $request->getMetodo() . DIRECTORY_SEPARATOR . '.php';
        if (is_readable($ruta)) 
        {
            require_once $ruta;
        } else {
            if (!empty($request->getMetodo) != '' && !empty($argumento)) 
            {
                if (is_readable(_RUTA_ . 'vista/' . $request->getControlador() . '/' . $request->getMetodo() . '\\' . $argument[0] . '.php')) 
                {
                    require_once _RUTA_ . 'vista/' . $request->getControlador() . '/' . $request->getMetodo() . '\\' . $argument[0] . '.php';
                }
            }
        }
    }
}
