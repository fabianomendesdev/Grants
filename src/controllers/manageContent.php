<?php
session_start();
requireValidSession(true);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";
require_once API_PATH."/UploadPDF.php";

$errors = [];

function redirect(){
    if(isset($_SESSION['redirect']) && substr($_SESSION['redirect'], 0, 9) == "/areas?a="){
        $redirect = $_SESSION['redirect'];
        unset($_SESSION['redirect']);
        header("Location: $redirect");
    }else{
        header("Location: home");
    }
}

if(isset($_GET['update']) && !empty($_GET['update']) && is_int(intval(base64_decode($_GET['update']))) && !isset($_POST['back'])){
    $data = Data::getOne(['id' => base64_decode($_GET['update'])]);
    if(!empty($_POST)){
        try{
            if(((!empty($_FILES['pdf']['name']) && !empty($_FILES['pdf']['type'])) xor !empty($_POST['link'])) || ((empty($_FILES['pdf']['name']) && empty($_FILES['pdf']['type'])) && empty($_POST['link']))){
                if(!empty($_POST['link'])){
                    if(!filter_var($_POST['link'], FILTER_VALIDATE_URL)){
                        throw new AppException('Envie um link válido!');
                    }

                    $link = $_POST['link'];
                    if(!is_null($link)){
                        if(substr($link, 0, 32) == "https://www.youtube.com/watch?v="){
                            $link = substr($link, 32, strlen($link)-32);
                        }elseif(substr($link, 0, 17) == "https://youtu.be/"){
                            $link = substr($link, 17, strlen($link)-17);
                        }else{
                            throw new AppArrayException(['link' => "Apenas vídeos do youtube!"]);
                        }
                    }

                    $data = new Data(['path' => '','link' => $link, 'title' => $_POST['title'], 'abstract' => $_POST['abstract'], 'areas' => $_POST['areas'], 'type' => "video", 'matter' => $_POST['mat'], 'id' => $data->id]);
                    $data->validateInputs();

                    $dataOld = Data::getOne(['id' => $data->id]);
                    if($dataOld->type == 'pdf'){
                        unlink(realpath(dirname(__FILE__).'/../../data/pdf')."/$dataOld->path");
                    }
                                        
                    $data = $data->update();
                }else if((!empty($_FILES['pdf']['name']) && !empty($_FILES['pdf']['type']))){
                    $pdfName = savePDFByFile($_FILES['pdf']);
                    $data = new Data(['path' => $pdfName,'link' => '', 'title' => $_POST['title'], 'abstract' => $_POST['abstract'], 'areas' => $_POST['areas'], 'type' => "pdf", 'matter' => $_POST['mat'], 'id' => $data->id]);

                    $data->validateInputs();

                    $dataOld = Data::getOne(['id' => $data->id]);
                    if($dataOld->path){
                        unlink(realpath(dirname(__FILE__).'/../../data/pdf')."/$dataOld->path");
                    }

                    $data = $data->update();
                }else{
                    $data = new Data(['title' => $_POST['title'], 'abstract' => $_POST['abstract'], 'areas' => $_POST['areas'], 'matter' => $_POST['mat'], 'id' => $data->id]);
                    $data->validateInputsNotType();
                    $data = $data->update();
                }
                redirect();
            }else{
                throw new AppArrayException(['pdf' => "Só é permitido ou pdf ou video", 'link' => "Só é permitido ou pdf ou video"]);
            }
        }catch(AppArrayException $e){
            $errors = $e->getErrors();
        }
    }
    
    loadTemplateViewWithGetOne('updateContent', "Grants: Update", $data, ['updateContent'], ['menu-toggle'], true, '', $errors);
}elseif(isset($_GET['delete']) && !empty($_GET['delete']) && is_int(intval(base64_decode($_GET['update'])))){
    if(isset($_POST['confirm']) && !!intval($_POST['confirm'])){
        $data = Data::getOne(['id' => base64_decode($_GET['delete'])]);
        
        if($data->type == 'pdf'){
            unlink(realpath(dirname(__FILE__).'/../../data/pdf')."/$data->path");
        }

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