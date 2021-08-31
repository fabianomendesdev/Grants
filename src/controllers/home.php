<h1>Logado</h1>
<?php 
    session_start();
    requireValidSession();
    var_dump($_SESSION['user']);
?>