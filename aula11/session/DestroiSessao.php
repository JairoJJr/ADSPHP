<?php 
    session_start();

    $_SESSION = array();

    session_destroy();

    echo "<h2>Sessão destruída com sucesso!</h2>";

    header('location: sessao.php');
?>