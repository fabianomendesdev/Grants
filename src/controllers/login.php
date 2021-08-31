<?php
loadModel('Login');
session_start();
validSession();

if(isset($_POST['email']) && isset($_POST['password'])){
    $login = new Login(['email' => $_POST['email'], 'password' => $_POST['password']]);
    $user = $login->checkLogin();
    $_SESSION['user'] = $user;
    // header("Location: home.php");
}

loadTemplateView("login", ["load" => '<link rel="stylesheet" href="assets/css/login.css">'], "Grants: Login");