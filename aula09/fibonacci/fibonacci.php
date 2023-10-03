<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Fibonacci</title>
</head>
<body>
    <h1>Sua Sequência:</h1>

    <?php 
    function fibo($n){
        if ($n <= 1){
            return $n;
        }else {
            return fibo($n - 1) + fibo($n - 2);
        }
    }
    if(isset($_POST['enviar'])){
        $num = $_POST['numfin'];
        $resultado = fibo($num);

        echo "O $num º número na Sequência é $resultado .";
    }

?>
</body>
</html>
