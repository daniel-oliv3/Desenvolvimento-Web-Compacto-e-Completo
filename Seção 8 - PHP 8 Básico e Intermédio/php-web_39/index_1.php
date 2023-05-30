<?php

// CICLOS

/* 
Os ciclos permitem a repetição de blocos de código até que uma
determinada condição interrompa a sua execução.
São estruturas muito presentes em qualquer script de PHP
*/

// -------------------------------
// WHILE

// Enquanto a condição for verdadeira, o código é repetido
$valor = 1;
while($valor <= 10){
    echo "Valor: $valor</br>";
    $valor++;
}

// IMPORTANTE: Se não alterarmos o valor da condição,
// o ciclo fica infinito.

// Neste caso pode nunca executar o bloco, uma vez que a
// avaliação da condição acontece no início do ciclo.

// outro exemplo
echo '<hr>';
$valor = 1;
while($valor <=10){
    echo "3 x $valor = " . $valor * 3 . "</br>";
    $valor++;
}





?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->