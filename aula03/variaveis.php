<?php 
    $idade = 35;
    $status = ($idade >= 18) ? "Maior de idade" : "Menor de idade" ;
    $nome = "João";
    //ponto (.) serve para concatenar
    echo "Idade: " . $idade . "<br>";
    echo "Status: " . $status . "<br>";
    echo "Nome: " . $nome . "<br>";

    //VARIÁVEIS BOOLEANAS

    $temConta = true;   //Atribui o valor verdadeiro (true) à variável $temConta
    $possuiCartao = false;  //Atribui o valor false (false) à variável $possioCartao

    //Imprime a frase "Tem conta?" seguida do valor da variável $temConta (usando operador ternário)
    echo "Tem conta? " . ($temConta ? "Sim" : "Não") . "<br>" ;

    //Imprime a frase "Possui cartão?" seguida do valor dad variável $possuiCartao (usando operador ternário)
    echo "Possui cartão? " . ($possuiCartao ? "Sim" : "Não") . "<br>";

    //Array 
    $cores = array("vermelho", "verde", "azul");
    $numeros = [1, 2, 3, 4, 5];

    $posicao = 1;
    echo "posição " . $posicao . "<br/>";
    echo "Cor na posição " . $posicao . ": " . $cores[$posicao];
    
?>

