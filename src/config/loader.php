<?php

function loadModel($model){
    require_once MODEL_PATH."/".$model.'.php';
}

function loadView($view, $is_admin, $message, $errors){
    require_once VIEW_PATH."/$view.php";
}

function loadViewData($quantItms, $view, $is_admin, $data, $message, $errors){
    require_once VIEW_PATH."/$view.php";
}

function loadExceptions($message, $errors = []){

}

function loadTemplateView($view, $title = "Grants", $loadCss = [], $loadJs = [], $activationWidgets = false, $message = '', $errors = []){
    $is_admin = false;
    $is_admin = !!((new User(['email' => $_SESSION['user']->email, 'id' => $_SESSION['user']->id]))->is_admin()->is_admin);
    if($is_admin && !!($_SESSION['user']->is_admin)){
        $is_admin = true;
    }else{
        $is_admin = false;
    }
    require_once TEMPLATE_PATH."/top.php";
    require_once TEMPLATE_PATH."/header.php";
    loadView($view, $is_admin, $message, $errors);
    require_once TEMPLATE_PATH."/footer.php";
}

function loadTemplateViewWithResultFromSearch($quantItms = 0, $view, $title = "Grants", $data = [], $loadCss = [], $loadJs = [], $activationWidgets = false, $message = '', $errors = []){
    $is_admin = false;
    $is_admin = !!((new User(['email' => $_SESSION['user']->email, 'id' => $_SESSION['user']->id]))->is_admin()->is_admin);
    if($is_admin && $_SESSION['user']->is_admin){
        $is_admin = true;
    }else{
        $is_admin = false;
    }
    require_once TEMPLATE_PATH."/top.php";
    require_once TEMPLATE_PATH."/header.php";
    loadViewData($quantItms, $view, $is_admin, $data, $message, $errors);
    require_once TEMPLATE_PATH."/footer.php";
}