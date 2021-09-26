<?php
session_start();
requireValidSession();
session_regenerate_id();
$errors = [];
$message;

$_GET['mat'];

switch(empty($_GET['a']) ? 're' : $_GET['a']){
    case 're':
        $a = 'Resumos';
        break;
    case 'at':
        $a = 'Atividades';
        break;
    case 'au':
        $a = 'Aulas';
        break;
}

loadTemplateView("areas", "Grants: $a", ['areas'], ['menu-toggle'], true, $message, $errors);