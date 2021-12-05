<?php 
session_start();
validSession();
$message = '';
$errors = [];

if(verify()){
    try{
        $user = new User($_POST);
        $user->registrationDate = time();
        $user->insert();    
        header("Location: login?email={$user->email}");
    }catch(AppArrayException $e){
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

loadTemplateView("register", "Grants: Criar Conta", ['register'], [], false, $message, $errors);