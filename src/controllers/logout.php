<?php
session_start();
unset($_SESSION);
session_destroy();
unset($_COOKIE['user']);
header("Location: login.php");