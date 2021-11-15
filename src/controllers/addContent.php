<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";

if(!isset($_SESSION['data'])){
    header("Location: formContent");
}else{
    switch($_SESSION['data']['type']){
        case "pdf":
            loadTemplateView("addPdfContent", "Grants: Adicionar PDF", ['addPdfContent'], ['menu-toggle'], true);
            break;

        case "video":
            loadTemplateView("addVideoContent", "Grants: Adicionar Vídeo", ['addVideoContent'], ['menu-toggle'], true);
            break;
    }
}