<?php
session_start();
requireValidSession(true);
session_regenerate_id();
$message = '';
$data = [];
$qtdItems = 6;

if(!empty($_POST['u'])){
    try {
        $user = new User(['id' => intval(base64_decode($_POST['u'])), 'active' => $_POST['active'] == 'on' ? 1 : 0, 'is_admin' => $_POST['is_admin'] == 'on' ? 1 : 0]);
        $user->update();
    }catch(AppException $e){
        $message = $e->getMessage();
    }
}

if(isset($_POST['search']) && !empty($_POST['search'])){
    $email = $_POST['search'];
    $email = strip_tags(trim($email));
    $email = htmlspecialchars($email);
    $conn = Database::getConnection();
    $email = mysqli_real_escape_string($conn, $email);
    $conn->close();
    $email = str_replace(array("<","WHERE","where",">","=","?"), "", $email);
    $result = Database::getResultFromQuery("SELECT * FROM users WHERE email like '%".$email."%' ORDER BY is_admin desc");
    unset($_POST['u']);
}else{
    $result = Database::getResultFromQuery("SELECT * FROM users ORDER BY is_admin desc");
}

if($result->num_rows > 0){
    while($item = $result->fetch_assoc()){
        $data[] = new User($item);
    }
}

loadTemplateViewWithResultFromSearch($qtdItems,"managerUsers", "Grants: Gerenciar Usuários", $data, ['managerUsers'], ['menu-toggle', 'div-search-control'], true, $message);