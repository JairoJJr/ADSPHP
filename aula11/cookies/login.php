<?php 
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === 'usuario' && $senha === 'senha123') {
        setcookie('autenticado', 'true', time() + 3600);
        header('location: conteudo_restrito.php');
        exit;
    }else {
        $mensagem_erro = "credenciais inválidas. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
    if(isset($mensagem_erro)){
        echo $mensagem_erro;
    }
    ?>
    <form method="Post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label for="senha">Senha:</label>
        <input type="text" name="senha">
        <br>
        <input type="submit" name="login" value="Login">
    </form>
    
</body>
</html>
