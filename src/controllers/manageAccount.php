<?php
session_start();
requireValidSession(false);
session_regenerate_id();
$errors = [];
$message;

if(isset($_POST['email']) && $_POST['email'] !== $_SESSION['user']->email){
    try {
        $user = new User(['id' => $_SESSION['user']->id, 'email' => $_POST['email']]);        
        $_SESSION['user'] = $user->updateEmail();
        $message = 'Email Atualizado com sucesso.';
    }catch(AppArrayException $e){
        $errors = $e->getErrors();
    }
}

if(isset($_POST['currentPassword']) && isset($_POST['newPassword']) && isset($_POST['passwordConfirmation'])){
    try {
        $user = new User(['id' => $_SESSION['user']->id, 'currentPassword' => $_POST['currentPassword'], 'newPassword' => $_POST['newPassword'], 'passwordConfirmation' => $_POST['passwordConfirmation']]);
        $_SESSION['user'] = $user->updatePassword();
        $message = 'Senha Atualizada com sucesso.';
    }catch(AppArrayException $e){
        $errors = $e->getErrors();
    }
}

loadTemplateView("manageAccount", "Grants: Gerenciar Conta", ['manageAccount'], ['menu-toggle','div-form-control'], true, $message, $errors);