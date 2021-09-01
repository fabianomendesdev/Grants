<?php
session_start();
validSession();
$message = '';
$errors = [];

loadTemplateView("register", "Grants: Criar Conta", ['<link rel="stylesheet" href="assets/css/register.css">'], false, $message, $errors);