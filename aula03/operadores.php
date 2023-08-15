<?php 
    //Adição + ; Subtração - ; Multiplicalção * ; Divisão / ; Módulo % ;
    $valor1 = 10;
    $valor2 = 5;
    $soma = $valor1 + $valor2;

    echo "Valor 1: " . $valor1 . "<br>";
    echo "Valor 2: " . $valor2 . "<br>";
    echo "Soma: " . $soma . "<br>";

    //Atrubuição com Adição += ; com Subtração -= ; com Multiplicação *= ; com Divisão /= ;

    $valor = 24; 
    $valor += 3; //Equivalente a $valor = $valor + 3; 
    echo "Valor após atrubuição com divisão: " . $valor . "<br>";

    //Algumas funções em PHP:
    
    //A função pi() retorna o valor de PI:
    echo pi() . "<br>";

    //As funções min() e max() podem ser usadas oara encontrar o valor mais baixo ou mais alto em uma lista de argumentos;
    echo min(0, 150, 30, 20, -8, -200) . "<br>";
    echo max(0, 150, 30, 20, -8, -200) . "<br>";

    //A função abs() retorna o valor absoluto (positivo) de um número:
    echo abs(-6.2) . "<br>";

    //A função sqrt() retorna a raiz quadrada de um número;
    echo sqrt(144) . "<br>";
    
    //A função round() arredonda um número float para o inteiro mais próximo;
    echo round(0.6) . "<br>";
    echo round(0.49) . "<br>";
    
    //A função rand() gera um número aletório;
    echo rand() . "<br>";
    //É possível escolher um range;
    echo rand(10,100);
?>