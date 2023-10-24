<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $db="aula12";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $db);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>