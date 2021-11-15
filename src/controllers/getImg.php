<?php
session_start();
requireValidSession(false);
$photo = $_GET['photo'];
$format = substr($photo, strlen($photo)-3);

if($_SESSION['user']->photo === $photo){
    switch($format){
        case "png":
            header ("Content-type: image/png");
            $image = imagecreatefrompng(IMG_PATH."/". $photo);
            imagepng($image);            
            break;
        case "jpg":
            header ("Content-type: image/jpg");
            $image = imagecreatefromjpeg(IMG_PATH."/". $photo);
            imagejpeg($image); 
            break;
    }
    
}else{
    echo "erro";
}