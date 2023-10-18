<?php 
    $nome = "usuario";
    $valor = "Aluno";

    setcookie($nome, $valor, time() + 3600);
?>

<html>
    <body>
        
        <?php 
            if (isset($_COOKIE[$nome])) {
                echo "Cookie" . $nome . " está atribuído.<br>";
                echo "Valor: " . $_COOKIE[$nome];
            } else {
                echo "Cookie" . $nome . " não está atribuído";
            }
        ?>
    </body>
</html>