<?php

    // INTEIROS (INT)

    // podemos transformar variáveis fazendo 'cast' para inteiros

    $valor_str = "145";
    $valor_int = (int)$valor_str;
    // ou
    $valor_int_1 = (integer)$valor_str;

    echo $valor_int . '<br>';
    echo $valor_int_1 . '<br>';

    // conversões de string para inteiro
    echo (int)'100';
    echo '<br>';
    echo (int)'25teste';
    echo '<br>';
    echo (int)'teste';

    // podemos verificar se a variável é inteira
    echo '<br>';

    $final = 100;
    var_dump(is_int($final));

    // e ainda podemos definir valores inteiros desta forma:
    echo '<br>';
    $outro_valor = 1_500_000;
    echo $outro_valor;










?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    24/05/2023
-->