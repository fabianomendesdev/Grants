<?php
session_start();
requireValidSession(false);


loadTemplateView("redaction", "Grants: Redação", ['redaction'], ['menu-toggle'], true);