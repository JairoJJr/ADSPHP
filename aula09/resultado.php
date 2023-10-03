<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado da Soma</h1>
    
    <?php 
        include 'funcoes.php';

        if(isset($_POST['enviar'])) {
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];

            $resultado = $_POST['operacao']($numero1, $numero2);

            echo "A soma de $numero1 e $numero2 é igual a: $resultado";
        } else {
            echo "Por favor, preencha o formulário e envie os valores.";
        } 
    ?>
</body>
</html>