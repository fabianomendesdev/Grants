<?php
session_start();
requireValidSession();
session_regenerate_id();

loadTemplateView("editProfile", "Grants: Editar Perfil", ["load" => '<link rel="stylesheet" href="assets/css/editProfile.css">'], true);