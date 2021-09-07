<?php
session_start();
requireValidSession();
session_regenerate_id();

loadTemplateView("home", "Grants: Home", ['home'], ['menu-toggle'], true);