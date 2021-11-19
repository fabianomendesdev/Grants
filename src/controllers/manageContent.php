<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";

function redirect(){
    if(isset($_SESSION['redirect']) && substr($_SESSION['redirect'], 0, 9) == "/areas?a="){
        $redirect = $_SESSION['redirect'];
        unset($_SESSION['redirect']);
        header("Location: $redirect");
    }else{
        header("Location: home");
    }
}

if(isset($_GET['update']) && !empty($_GET['update']) && is_int(intval(base64_decode($_GET['update'])))){
    $data = Data::getOne(['id' => base64_decode($_GET['delete'])]);
    loadTemplateViewWithGetOne('updateContent', "Grants: Update", $data, ['updateContent'], ['menu-toggle'], true);
}elseif(isset($_GET['delete']) && !empty($_GET['delete']) && is_int(intval(base64_decode($_GET['update'])))){
    if(isset($_POST['confirm']) && !!intval($_POST['confirm'])){
        $data = new Data(['id' => base64_decode($_GET['delete'])]);
        $data->delete();
        
        redirect();
    }elseif(isset($_POST['confirm']) && !(!!intval($_POST['confirm']))){
        redirect();
    }else{
        $data = Data::getOne(['id' => base64_decode($_GET['delete'])]);
        loadTemplateViewWithGetOne('deleteContent', "Grants: Delete", $data, ['deleteContent'], ['menu-toggle'], true);
    }
}else{
    redirect();
}