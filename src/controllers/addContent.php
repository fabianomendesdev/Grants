<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";
require_once API_PATH."/UploadPDF.php";
$message = '';

if(!isset($_SESSION['data'])){
    header("Location: formContent");
}else{
    switch($_SESSION['data']['type']){
        case "pdf":
            if(isset($_FILES['pdf'])){
                try{
                    $pdfName = savePDFByFile($_FILES['pdf']);
                    $data = new Data(['path' => $pdfName, 'title' => $_SESSION['data']['title'], 'abstract' => $_SESSION['data']['abstract'], 'areas' => $_SESSION['data']['areas'], 'type' => $_SESSION['data']['type'], 'matter' => $_SESSION['data']['mat']]);
                    $data->insert();
                    unset($_SESSION['data']);
                    header("Location: formContent");
                }catch(AppException $e){
                    $message = $e->getMessage();
                }
            }

            loadTemplateView("addPdfContent", "Grants: Adicionar PDF", ['addPdfContent'], ['menu-toggle'], true, $message);
            break;

        case "video":
            if(isset($_POST['link'])){
                try{
                    $data = new Data(['link' => $_POST['link'], 'title' => $_SESSION['data']['title'], 'abstract' => $_SESSION['data']['abstract'], 'areas' => $_SESSION['data']['areas'], 'type' => $_SESSION['data']['type'], 'matter' => $_SESSION['data']['mat']]);
                    $data->validateURL();
                    $data->insert();
                    unset($_SESSION['data']);
                    header("Location: formContent");
                }catch(AppException $e){
                    $message = $e->getMessage();
                }
            }
            loadTemplateView("addVideoContent", "Grants: Adicionar Vídeo", ['addVideoContent'], ['menu-toggle'], true, $message);
            break;
    }
}