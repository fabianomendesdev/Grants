<?php
session_start();
requireValidSession(true);
session_regenerate_id();
$message = '';
$data = [];
$qtdItems = 6;

if(!empty($_GET['u'])){
    try {
        $user = new User(['id' => intval(base64_decode($_GET['u'])), 'active' => $_POST['active'] == 'on' ? 1 : 0, 'is_admin' => $_POST['is_admin'] == 'on' ? 1 : 0]);
        $user->update();
    }catch(AppException $e){
        $message = $e->getMessage();
    }
}

$result = Database::getResultFromQuery("SELECT * FROM users");

if($result->num_rows > 0){
    while($item = $result->fetch_assoc()){
        $data[] = new User($item);
    }
}

loadTemplateViewWithResultFromSearch($qtdItems,"managerUsers", "Grants: Gerenciar Usuários", $data, ['managerUsers'], ['menu-toggle'], true, $message);