<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";

if(isset($_GET['update']) && !empty($_GET['update'])){
    
}elseif(isset($_GET['delete']) && !empty($_GET['delete'])){
    loadTemplateView("deleteContent", "Grants: delete", ['home'], ['menu-toggle'], true);
}else{
    header("Location: areas?a=re&mat=all");
}