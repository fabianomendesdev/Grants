<?php
session_start();
requireValidSession();
session_regenerate_id();

loadTemplateView("home", "Grants: Home", ["load" => '<link rel="stylesheet" href="assets/css/home.css">'], true);