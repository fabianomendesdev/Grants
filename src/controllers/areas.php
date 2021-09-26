<?php
session_start();
requireValidSession();
session_regenerate_id();
require_once MODEL_PATH."/Data.php";
$errors = [];
$message;

switch(empty($_GET['a']) ? 're' : $_GET['a']){
    case 're':
        $a = 'Resumos';
        if(verify($_GET['mat'])){
            $data = new Data(["areas" => 're', "matter" => $_GET['mat'], "search" => $_GET['search']]);
            $arrayResult = search($data);
        }
        break;
    case 'at':
        $a = 'Atividades';
        if(verify($_GET['mat'])){
            $data = new Data(["areas" => 'at', "matter" => $_GET['mat'], "search" => $_GET['search']]);
            $arrayResult = search($data);        
        }
        break;
    case 'au':
        $a = 'Aulas';
        if(verify($_GET['mat'])){
            $data = new Data(["areas" => 'au', "matter" => $_GET['mat'], "search" => $_GET['search']]);
            $arrayResult = search($data);
        }
        break;
}

function search($data) {
    $arrayResult = [];
    $contPag = 0;
    if(isset($_GET['pag'])){
        if($_GET['pag'] < 0){
            $_GET['pag'] = 0;
        }
        $_GET['pag'] = intval($_GET['pag']);
        $contPag = $_GET['pag'] * 25;
    }

    if($_GET['mat'] === 'all'){
        if(isset($_GET['search'])){
            $resul = $data->searchTextAndAreas($contPag);
        }else{
            $resul = $data->searchAreas($contPag);  
        }
        
        if(!is_null($resul)){
            while($result = $resul->fetch_assoc()){
                $arrayResult[] = $result; 
            }
        }
    }else{  
        if(isset($_GET['search'])){
            $resul = $data->searchAll($contPag);
        }else{
            $resul = $data->searchAreasAndMatter($contPag); 
        }
         
        if(!is_null($resul)){
            while($result = $resul->fetch_assoc()){
                $arrayResult[] = $result; 
            }
        }
    }
    return $arrayResult;
}

function verify($mat){
    $array = ['all','mat', 'por', 'his', 'geo', 'bio', 'qui', 'fis'];
    foreach($array as $value){
        if($mat === $value){
            return true;
        }
    }
    
    return false;
}

loadTemplateViewWithResultFromSearch("areas", "Grants: $a", $arrayResult, ['areas'], ['menu-toggle', 'div-search-control'], true, $message, $errors);