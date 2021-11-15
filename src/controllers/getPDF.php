<?php
session_start();
requireValidSession(false);
$pdf = $_GET['pdf'];

$file="../data/pdf/$pdf";
header('Content-type: application/pdf');
header("Content-Disposition: inline; filename='$pdf'");
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
@readfile($file);