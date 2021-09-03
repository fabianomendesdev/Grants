<?php 
session_start();
validSession();
$message = '';
$errors = [];
require_once(EXCEPTION_PATH."/RegisterException.php");
loadModel('Register');

// $register = new Register()

loadTemplateView("register", "Grants: Criar Conta", ['<link rel="stylesheet" href="assets/css/register.css">'], false, $message, $errors);