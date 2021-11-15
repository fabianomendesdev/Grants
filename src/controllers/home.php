<?php
session_start();
requireValidSession(false);
session_regenerate_id();

loadTemplateView("home", "Grants: Home", ['home'], ['menu-toggle'], true);