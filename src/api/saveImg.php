<?php

function saveImgByFile(&$fileImg){
    if(isset($fileImg)){
        $nameFile = "{$_SESSION['user']->id}.";
        switch ($fileImg['type']){
            case 'image/png':
                $nameFile .= 'png';
                break;
            case 'image/jpeg': 
                $nameFile .= 'jpg';
                break;
            default:
                throw new AppArrayException(['photo' => 'Formato não suportado envie (png,jpg)']);
        }

        $folderUpload = realpath(dirname(__FILE__).'/../../img').'/';
        $file = $folderUpload . $nameFile;
        $tmp = $fileImg['tmp_name'];
        
        if(move_uploaded_file($tmp, $file)){
            unset($fileImg);
            return $nameFile;
        } else {
            throw new AppArrayException(['photo' => 'Falha ao salvar a imagem!']);
        }
    }
}