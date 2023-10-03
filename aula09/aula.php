<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Funções na mesma página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exemplo de Funções na mesma página</h1>
    <form action="" method="POST">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1"><br>

        <label for="num2">Número 2:</label>
        <input type="text" name="num2"><br>

        <input type="submit" name="enviar" value="Calcular Soma">

    </form>

    <?php 
            
        if (isset($_POST['enviar'])){
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
        
            $resultado = somar($numero1, $numero2);
            
            echo "<p> A soma de $numero1 e $numero2 é igual a: $resultado</p>";
            }
        function somar($numero1, $numero2){
            $soma = $numero1 + $numero2;
            return $soma;
        }

    ?>

</body>
</html>