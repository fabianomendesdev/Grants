<?php 
date_default_timezone_set('America/Recife');
setlocale(LC_TIME, 'pt_BR', 'pt-BR.utf-8', 'portuguese');

// Pastas 
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));

// Arquivos
require_once(realpath(dirname(__FILE__))."/loader.php");
