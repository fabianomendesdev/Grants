<?php

function loadModel($model){
    require_once MODEL_PATH."/".$model.'.php';
}

function loadView($view){
    require_once VIEW_PATH."/$view.php";
}


function loadTemplateView($view, $load = [], $title = "Grants"){
    require_once TEMPLATE_PATH."/top.php";
    require_once TEMPLATE_PATH."/header.php";
    loadView($view);
    require_once TEMPLATE_PATH."/footer.php";
}