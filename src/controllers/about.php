<?php
session_start();
requireValidSession(false);
session_regenerate_id();

loadTemplateView("about", "Grants: Sobre", ['about'], ['menu-toggle'], true);