<?php
session_start();
requireValidSession(false);
session_regenerate_id();
require_once MODEL_PATH."/Data.php";

$data = Data::getOne(['id' => base64_decode($_GET['r'])], '*');
$data->access++;
$data->update();

loadTemplateViewWithGetOne('showContent', "Grants: $data->title", $data, ['showContent'], ['menu-toggle'], true);