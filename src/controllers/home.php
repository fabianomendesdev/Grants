<?php
session_start();
requireValidSession();

loadTemplateView("home", ["load" => '<link rel="stylesheet" href="assets/css/home.css">'], "Grants: Home", true);