<?php

function loadModel($model){
    require_once MODEL_PATH."/".$model.'.php';
}

function loadView($view, $message, $errors){
    require_once VIEW_PATH."/$view.php";
}

function loadViewData($quantItms, $view, $data, $message, $errors){
    require_once VIEW_PATH."/$view.php";
}

function loadExceptions($message, $errors = []){

}

function loadTemplateView($view, $title = "Grants", $loadCss = [], $loadJs = [], $activationWidgets = false, $message = '', $errors = []){
    require_once TEMPLATE_PATH."/top.php";
    require_once TEMPLATE_PATH."/header.php";
    loadView($view, $message, $errors);
    require_once TEMPLATE_PATH."/footer.php";
}

function loadTemplateViewWithResultFromSearch($quantItms = 0, $view, $title = "Grants", $data = [], $loadCss = [], $loadJs = [], $activationWidgets = false, $message = '', $errors = []){
    require_once TEMPLATE_PATH."/top.php";
    require_once TEMPLATE_PATH."/header.php";
    loadViewData($quantItms, $view, $data, $message, $errors);
    require_once TEMPLATE_PATH."/footer.php";
}