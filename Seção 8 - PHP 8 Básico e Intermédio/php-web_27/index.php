<?php

    // OPERADORES DE ATRIBUIÇÃO
    // =  +=  -=  *=  /=  %=  **=

    $x = 100; // atribui o valor da direita à variável da esquerda
    $a = $b = $c = 200;
    $x = ($y = 10) * 10; // 100 - Não é recomendável este tipo de escrita


    $x = 10;
    $x = $x * 2;    // 20

    $x = 1;
    $x += 4;    // 5

    $x = 45;
    $x -= 15;   // 30

    $x = 10;
    $x *= 2;    // 20

    $x = 100;
    $x /= 4;    // 25

    $x = 100;
    $x %= 60;   // 40 (100/60 = 1, sobra 40)
    
    $x = 9;
    $x **= 2;   // int(81) (9 * 9)

    // cuidado... usar estes operadores em variáveis que não
    // estão definidas, vai originar um aviso do PHP
    $valor += 100;



?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    26/05/2023
-->
    