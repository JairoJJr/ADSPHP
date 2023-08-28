<?php 
    $idade = filter_input(INPUT_POST, "txtIdade");
    $temAutorizacao = true;
    $temPermissao = true;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP Operadores Lógicos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulário PHP Operadores Lógicos</h1>
    </header>
    <section>
        <form method="post">
            <label>Idade: <input type="text" name="txtIdade"></label><br>
            
            <input type="submit" name ="btnEnviar" value="enviar">
        </form>
        <h1>Vai a Festa?</h1>
        <?php 
            if((($idade >= 18) && $temAutorizacao) && $temPermissao){
                echo "Vai sim!";
            }else{
                echo "Vai não.";
            }     ?>
    </section>
</body>
</html>
