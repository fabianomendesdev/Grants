<?php

function requireValidSession($require_admin){
    $user = null;
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else if(isset($_COOKIE['user'])){
        $user = $_COOKIE['user'];
    }

    $is_admin = false;
    $is_admin = !!((new User(['email' => $_SESSION['user']->email, 'id' => $_SESSION['user']->id]))->is_admin()->is_admin);
    if($is_admin && $_SESSION['user']->is_admin){
        $is_admin = true;
    }else{
        $is_admin = false;
    }

    if(is_null($user)){
        header("Location: login");
    }else{
        $userLogin = User::getOne(['email' => $user->email, 'password' => $user->password]);        
        if(is_null($userLogin)){
            header("Location: login");
        }else if($require_admin){
            if(!$is_admin){
                header("Location: home");
            }
        }
    }

    if(strval(date('Y-m-d', $user->lastAcess)) !== strval(date('Y-m-d', time()))){
        $userLogin->qtdAccess++;    
    }
    $userLogin->lastAcess = time();
    $_SESSION['user'] = $userLogin->update();
    $_COOKIE['user'] = $_SESSION['user'];
}

function validSession(){
    $user = null;
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else if(isset($_COOKIE['user'])){
        $user = $_COOKIE['user'];
    }

    if(isset($user) && !is_null($user)){
        $userLogin = User::getOne(['email' => $user->email, 'password' => $user->password]);
        
        if(!is_null($userLogin)){
            header("Location: home");
        }
    }
}