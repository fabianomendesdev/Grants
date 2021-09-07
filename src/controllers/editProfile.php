<?php
session_start();
requireValidSession();
session_regenerate_id();
require_once API_PATH."/saveImg.php";
$errors = [];

if(verify()){
    $file = $_FILES['photo'];
    try{
        if(isset($file['name']) && isset($file['type']) && isset($file['tmp_name']) && !$file['error']){
            $namePhoto = saveImgByfile($file);
        }
        $user = new User(['id' => $_SESSION['user']->id, 'photo' => $namePhoto]+$_POST);
        $_SESSION['user'] = $user->updateEditProfile();
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

loadTemplateView("editProfile", "Grants: Editar Perfil", ["load" => '<link rel="stylesheet" href="assets/css/editProfile.css">'], true, '', $errors);