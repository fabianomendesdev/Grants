<?php
session_start();
requireValidSession(false);
session_regenerate_id();
require_once API_PATH."/UploadImagem.php";
$errors = [];
$message;

if(verify()){
    $file = $_FILES['photo'];
    try{
        $namePhoto;
        if(!empty($file) && !$file['error']){
            $upload = new UploadImagem();
            $upload->width = 250;
            $upload->height = 250;
            $namePhoto = $upload->salvar(IMG_PATH."/", $file);
        }
        $user = new User(['id' => $_SESSION['user']->id, 'photo' => $namePhoto]+$_POST);
        $_SESSION['user'] = $user->updateEditProfile();
        $message = "Modificações salvas";
    } catch (AppArrayException $e){
        $errors = $e->getErrors();
    }
}

function verify(){
    if(!isset($_POST['sex']) && isset($_POST['name'])){
        $_POST['sex'] = '';
    } 
    $fields = ['name','day','month','year','series','sex'];
    foreach($fields as $value){
        if(!isset($_POST[$value])){
            return false;
        }
    }
    return true;
}

loadTemplateView("editProfile", "Grants: Editar Perfil", ['editProfile'], ['menu-toggle'], true, $message, $errors);