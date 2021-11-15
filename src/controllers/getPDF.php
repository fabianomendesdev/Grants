<?php
session_start();
requireValidSession(false);
$pdf = $_GET['pdf'];

require("../../data/pdf/$pdf");