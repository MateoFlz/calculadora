<?php

namespace core;

class Load
{

    public static function Loaded()
    {
        spl_autoload_register(function ($clase) {
            $ruta = str_replace('\\', '/', $clase) . '.php';
            if (is_readable($ruta))
                require_once $ruta;
        });
    }
}
