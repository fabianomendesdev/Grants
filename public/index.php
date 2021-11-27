<?php 
require(dirname(__FILE__, 2). '/src/config/config.php');

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$uri = str_replace(['.php', '.js', '.html'], '', $uri);

if($uri == '' || $uri == '/' || $uri == 'index.php'){
    $uri = 'home';
}

$array_uri = str_split($uri);
$tempUri = '';
foreach($array_uri as $key => $letter){
    if($key > 0){
        if($letter != '/'){
            $tempUri .= $letter;
        }else{
            $uri = "/".$tempUri;
            if(array_key_last($array_uri) > $key){
                $uri = $uri."?".parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
                header("Location: $uri");
            }
            break;
        }
    }
}

require_once(CONTROLLER_PATH . "/$uri.php");