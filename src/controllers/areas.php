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
    if($_GET['mat'] === 'all'){
        $resul = $data->searchAreas(0);  
        if(!is_null($resul)){
            while($result = $resul->fetch_assoc()){
                $arrayResult[] = $result; 
            }
        }
    }else{             
        $resul = $data->searchAreasAndMatter(0);  
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

if(count($arrayResult) > 0){
    print_r($arrayResult);
}

loadTemplateView("areas", "Grants: $a", ['areas'], ['menu-toggle'], true, $message, $errors);