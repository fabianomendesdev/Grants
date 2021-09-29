<?php
session_start();
requireValidSession();
session_regenerate_id();
require_once MODEL_PATH."/Data.php";
$errors = [];
$message;
$quantItms = 5;

switch(empty($_GET['a']) ? 're' : $_GET['a']){
    case 're':
        $a = 'Resumos';
        if(verify($_GET['mat'])){
            $data = new Data(["quantItms" => $quantItms,"areas" => 're', "matter" => $_GET['mat'], "search" => $_GET['search']]);
            $arrayResult = search($data);
            $data = $arrayResult[0];
            $count = $arrayResult[1];
        }
        break;
    case 'at':
        $a = 'Atividades';
        if(verify($_GET['mat'])){
            $data = new Data(["quantItms" => $quantItms,"areas" => 'at', "matter" => $_GET['mat'], "search" => $_GET['search']]);
            $arrayResult = search($data);
            $data = $arrayResult[0];
            $count = $arrayResult[1];        
        }
        break;
    case 'au':
        $a = 'Aulas';
        if(verify($_GET['mat'])){
            $data = new Data(["quantItms" => $quantItms,"areas" => 'au', "matter" => $_GET['mat'], "search" => $_GET['search']]);
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
    }

    function countPag($count){
        if($_GET['pag'] > (ceil($count/$GLOBALS["quantItms"])-1)){
            $_GET['pag'] = (ceil($count/$GLOBALS["quantItms"])-1);
        }
        return $_GET['pag'] * $GLOBALS["quantItms"];
    }

    if($_GET['mat'] === 'all'){
        if(isset($_GET['search'])){
            $count = $data->searchResulCount("searchTextAndAreas");
            $resul = $data->searchTextAndAreas(countPag($count));
        }else{
            $count = $data->searchResulCount("searchAreas");
            $resul = $data->searchAreas(countPag($count));  
        }
        
        if(!is_null($resul)){
            while($result = $resul->fetch_assoc()){
                $arrayResult[] = $result; 
            }
        }
    }else{  
        if(isset($_GET['search'])){
            $count = $data->searchResulCount("searchAll");
            $resul = $data->searchAll(countPag($count));
        }else{
            $count = $data->searchResulCount("searchAreasAndMatter");
            $resul = $data->searchAreasAndMatter(countPag($count)); 
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

loadTemplateViewWithResultFromSearch($quantItms, "areas", "Grants: $a", [$data, $count], ['areas'], ['menu-toggle', 'div-search-control'], true, $message, $errors);