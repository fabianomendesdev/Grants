<?php
loadModel('Login');
session_start();
validSession();
require_once(EXCEPTION_PATH."/LoginException.php");
$message = '';
$errors = [];

if(isset($_POST['email']) && isset($_POST['password'])){
    try{
        $login = new Login(['email' => $_POST['email'], 'password' => $_POST['password']]);
        $login->validate();
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("Location: home.php");
    }catch(LoginException $e){  
        $errors = $e->getErrors();
    }catch(AppException $e){
        $message = $e->getMessage();
    }
}

loadTemplateView("login", "Grants: Login", ['<link rel="stylesheet" href="assets/css/login.css">'], false, $message, $errors);