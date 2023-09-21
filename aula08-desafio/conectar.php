<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Aula07_php";

    $strcon = mysqli_connect($servername , $username , $password , $database);

    if (!$strcon){
        die("Falha " . mysqli_connect_error());
    }
    echo "Sucesso na Conexão";
?>