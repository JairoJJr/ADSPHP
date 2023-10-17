<?php 
if(!isset($_COOKIE['autenticado']) || $_COOKIE['autenticado'] !== 'true') {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo Restrito</title>
</head>
<body>
    <h1>Conteúdo</h1>
    <p>Este é o conteúdo</p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>