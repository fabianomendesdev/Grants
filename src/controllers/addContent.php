<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";

if(!empty($_POST)){
    try{
        $data = new Data($_POST);
        $data->validateInputs();
    }catch(AppArrayException $e){

    }
}

loadTemplateView("addContent", "Grants: Adicionar Conteúdo", ['addContent'], ['menu-toggle'], true);