<?php
session_start();
requireValidSession();
$photo = $_GET['photo'];
$format = substr($photo, strlen($photo)-3);

if($_SESSION['user']->photo === $photo){
    switch($format){
        case "png":
            header ("Content-type: image/png");
            $image = imagecreatefrompng(IMG_PATH."/". $photo);
            break;
        case "jpg":
            header ("Content-type: image/jpg");
            $image = imagecreatefromjpeg(IMG_PATH."/". $photo);
            break;
    }
    
    imagepng($image);
}else{
    echo "erro";
}