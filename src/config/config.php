<?php 
date_default_timezone_set('America/Recife');
setlocale(LC_TIME, 'pt_BR', 'pt-BR.utf-8', 'portuguese');

// Pastas 
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));
define('API_PATH', realpath(dirname(__FILE__) . '/../api'));
define('IMG_PATH', realpath(dirname(__FILE__) . '/../../img'));

// Arquivos
require_once(realpath(dirname(__FILE__))."/loader.php");
require_once(realpath(dirname(__FILE__))."/database.php");
require_once(realpath(dirname(__FILE__))."/session.php");
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/User.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/AppArrayException.php'));
require_once(realpath(EXCEPTION_PATH . '/ErrorBD.php'));