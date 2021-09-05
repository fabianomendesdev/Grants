<?php 
session_start();
validSession();
$message = '';
$errors = [];
require_once(EXCEPTION_PATH."/RegisterException.php");
loadModel('Register');

if(verify()){
    try{
        $register = new Register($_POST);
        $register->validate();
        $user = new User($register->getFormattedData());
        $user->insert();    
        header("Location: login.php?email={$_POST['email']}");
    }catch(RegisterException $e){
        $errors = $e->getErrors();
    }
}

function verify(){
    $fields = ['name','email','day','month','year','series','sex','password','passwordConfirmation'];
    foreach($fields as $value){
        if(!isset($_POST[$value])){
            return false;
        }
    }
    return true;
}

loadTemplateView("register", "Grants: Criar Conta", ['<link rel="stylesheet" href="assets/css/register.css">'], false, $message, $errors);