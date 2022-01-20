<?php
//globales en otro archivos

define('_RUTA_', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('RAIZ', 'http://localhost/http/php/Practice/PracticaCal/Calprofe/');

///
require_once 'core/cargador.php';
core\Load::Loaded();
core\Enrutador::enrutar(new core\Solicitud());
