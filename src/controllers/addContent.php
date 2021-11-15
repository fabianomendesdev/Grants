<?php
session_start();
requireValidSession(false);
session_regenerate_id();