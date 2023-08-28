<?php 
    $N1 = filter_input(INPUT_POST, "txtNumero1"); //Captura o valor do campo N1
    $N2 = filter_input(INPUT_POST, "txtNumero2"); //Captura o valor do campo N1
    $soma = ($N1 + $N2);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulário PHP</h1>
    </header>
    <section>
        <form method="post">
            <label>Número 1: <input type="text" name="txtNumero1"></label><br>            
            <label>Número 2: <input type="text" name="txtNumero2"></label><br>
            
            <input type="submit" name ="btnCalcular" value="Calcular">
        </form>
        <h1>Resultado</h1>
        <h1><?php echo $soma?></h1>
    </section>
</body>
</html>
