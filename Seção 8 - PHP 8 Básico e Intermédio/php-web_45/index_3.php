<?php

// PARÂMETROS DE UMA FUNÇÃO

/*
O PHP 8 veio introduzir a possibilidade de alterar a ordem dos argumentos
quando chamamos uma função.

É um conceito designado por named arguments.
*/

function apresentar($a, $b, $c = 100){
    return "$a | $b | $c";
}

echo apresentar(10,20) . '<br>';            // 10 | 20 | 100
echo apresentar(10,20,30) . '<br>';         // 10 | 20 | 30
echo apresentar(c: 1, b: 2, a: 3) . '<br>'; // 3 | 2 | 1

// se quisermos misturar conceitos, os valores não nomeados devem vir sempre primeiro.
// Exemplo:
echo apresentar(10, c: 1, b: 2000);     // 10 | 2000 | 1






?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/05/2023
-->