<?php

    // PRECEDÊNCIA DE OPERADORES

    // Frequentemente os operadores são combinados para formar expressões complexas.
    // Quando isso acontece, eles são tratados de acordo com a sua precedência.
    // No PHP ela funciona maioritariamente da mesma forma como funcionam as precedências na Matemática.

    $resultado = 10 + 20 * 4;
    // a multiplicação acontece primeiro (20 * 4 = 80)
    // depois acontece a adição (10 + 80 = 90)

    // Podemos forçar precedência usando parêntisis

    $resultado = (10 + 20) * 4;
    // neste caso a adição acontece primeiro e só depois a multiplicação
    // 30 * 4 = 120

    $valor1 = 4;
    $valor2 = 2;
    $valor3 = 10;

    $resultado = $valor1 / $valor2 * $valor3;
    echo $resultado;

    // No decorrer do estudo da linguagem iremos aprofundar essas precedências sempre que necessário.






    
?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/05/2023
-->