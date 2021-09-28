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
            $data = $arrayResult[0];
            $count = $arrayResult[1];
        }
        break;
    case 'at':
        $a = 'Atividades';
        if(verify($_GET['mat'])){
            $data = new Data(["areas" => 'at', "matter" => $_GET['mat'], "search" => $_GET['search']]);
            $arrayResult = search($data);
            $data = $arrayResult[0];
            $count = $arrayResult[1];        
        }
        break;
    case 'au':
        $a = 'Aulas';
        if(verify($_GET['mat'])){
            $data = new Data(["areas" => 'au', "matter" => $_GET['mat'], "search" => $_GET['search']]);
            $arrayResult = search($data);
            $data = $arrayResult[0];
            $count = $arrayResult[1];
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
        $contPag = $_GET['pag'] * 2;
    }

    if($_GET['mat'] === 'all'){
        if(isset($_GET['search'])){
            $resul = $data->searchTextAndAreas($contPag);
            $count = $data->searchResulCount("searchTextAndAreas");
        }else{
            $resul = $data->searchAreas($contPag);  
            $count = $data->searchResulCount("searchAreas");
        }
        
        if(!is_null($resul)){
            while($result = $resul->fetch_assoc()){
                $arrayResult[] = $result; 
            }
        }
    }else{  
        if(isset($_GET['search'])){
            $resul = $data->searchAll($contPag);
            $count = $data->searchResulCount("searchAll");
        }else{
            $resul = $data->searchAreasAndMatter($contPag); 
            $count = $data->searchResulCount("searchAreasAndMatter");
        }
         
        if(!is_null($resul)){
            while($result = $resul->fetch_assoc()){
                $arrayResult[] = $result; 
            }
        }
    }
    return [$arrayResult,$count];
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

loadTemplateViewWithResultFromSearch("areas", "Grants: $a", [$data, $count], ['areas'], ['menu-toggle', 'div-search-control'], true, $message, $errors);