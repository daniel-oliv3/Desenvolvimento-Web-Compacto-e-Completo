<?php

// PARÂMETROS DE UMA FUNÇÃO

/*
O PHP vai sempre tentar determinar o data type dos parâmetros e do return.
Podemos reforçar o tipo de valores que vão ser retornados da seguinte forma:
*/

function adicionar($a, $b): int {
    return $a + $b;
}

echo adicionar(10,20) . '<br>';

/* 
Se for alterado o data type para string...
*/

function multiplicar($a, $b): string {
    return $a * $b;
}

echo multiplicar(10,2); // vai apresentar o resultado normalmente. Porquê?

// Existe uma mecanismo no PHP designado por strict types.
// Se esse mecanismo não estiver ativo, o PHP vai tentar sempre fazer
// a conversão implícita dos valores.







?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/05/2023
-->
