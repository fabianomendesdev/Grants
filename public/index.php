<?php 
require_once(dirname(__FILE__, 2). '/src/config/config.php');

$uri = explode("/",urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
array_shift($uri);

if(empty($uri[0]) || $uri[0] === 'index.php') {
    $uri[0] = 'home';
}

require_once(CONTROLLER_PATH . "/$uri[0].php");