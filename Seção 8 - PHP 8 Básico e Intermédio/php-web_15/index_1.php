<?php

    // CONSTANTES
    // ao contrário das variáveis, as constantes têm valores que não podem ser alterados.

    // definir uma constante
    define('nome', 'valor');

    // por convenção, as constantes são definidas com letras maiúsculas
    define('TAXA_FIXA', 10);
    define('APRESENTAR_DADOS', false);

    // apresentar o valor de uma constante
    echo TAXA_FIXA; // 10

    // usar o valor de uma constante
    $preco_inicial = 500;
    $preco_final = $preco_inicial + TAXA_FIXA;
    echo $preco_final;  // 510

    // Não podemos alterar o valor de uma constante
    TAXA_FIXA = 100;



?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    24/05/2023
-->