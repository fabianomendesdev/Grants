<?php
loadModel('Login');
session_start();
validSession();
$message = '';
$errors = [];

if(isset($_POST['email']) && isset($_POST['password'])){
    unset($_GET);
    try{
        $login = new Login(['email' => $_POST['email'], 'password' => $_POST['password']]);
        $login->validate();
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("Location: home.php");
    }catch(AppArrayException $e){  
        $errors = $e->getErrors();
    }catch(AppException $e){
        $message = $e->getMessage();
    }
}

loadTemplateView("login", "Grants: Login", ['login'], [], false, $message, $errors);