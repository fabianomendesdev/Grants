<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";

if(isset($_GET['update']) && !empty($_GET['update'])){
    
    
}elseif(isset($_GET['delete']) && !empty($_GET['delete'])){
    $data = Data::getOne(['id' => base64_decode($_GET['delete'])]);
    loadTemplateViewWithGetOne('deleteContent', "Grants: Delete", $data, ['deleteContent'], ['menu-toggle'], true);
}else{
    header("Location: areas?a=re&mat=all");
}