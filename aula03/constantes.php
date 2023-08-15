<?php 
    //Constantes são como variáveis, exceto que, uma vez definidas, não podem ser alteradas ou indefinidas.
    //Uma constante é um identificador (nome) para um valor simples. O valor não pode ser alterado durante o script.
    //São automaticamente globais em todo o script.
    //Sintaxe:  define("NOME_DA_CONSTANTE",valor,case_insentive);
    //default é falso no case_insentive

    define("FMP", "Faculdade Municipal de Palhoça");
    echo FMP, "<br>";

    define("PI",pi());
    define("App_Name","Minha Aplicação");
    echo PI , "<br>" , App_Name, "<br>";
?>