<?php
session_start();
requireValidSession();
session_regenerate_id();
$errors = [];
$message;

loadTemplateView("manageAccount", "Grants: Gerenciar Conta", ['manageAccount'], ['menu-toggle','div-form-control'], true, $message, $errors);