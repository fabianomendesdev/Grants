<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";
$message = '';
$errors = [];

if(!empty($_POST)){
    try{
        $data = new Data(['title' => $_POST['title'], 'abstract' => $_POST['abstract'], 'areas' => $_POST['areas'], 'type' => $_POST['type'], 'matter' => $_POST['mat']]);
        $data->validateInputs();
        $_SESSION['data'] = [
            'title' => $data->title,
            'abstract' => $data->abstract,
            'areas' => $data->areas,
            'type' => $data->type,
            'mat' => $data->matter
        ];
        header("Location: addContent");
    }catch(AppArrayException $e){
        $errors = $e->getErrors();
    }
}elseif(isset($_SESSION['data'])){
    $_POST = $_SESSION['data'];
}

loadTemplateView("formContent", "Grants: Adicionar Conteúdo", ['formContent'], ['menu-toggle'], true, $message, $errors);