<?php

    // INTEIROS (INT)

    // os valores são normalmente definidos com números inteiros
    $valor1 = 100;
    echo $valor1 . '<br>';

    // mas podem ser definidos com valores hexadecimais
    $valor2 = 0xa3;
    echo $valor2 . '<br>';

    // ou ainda no sistema octal
    $valor3 = 045;
    echo $valor3 . '<br>';

    // ou ainda com valores binários
    $valor4 = 0b101;
    echo $valor4 . '<br>';

    // vejamos o que acontece quando ultrapassamos o limite do valor inteiro
    $valor_ultrapassado = PHP_INT_MAX + 1;
    echo $valor_ultrapassado . '<br>';
    var_dump($valor_ultrapassado);
    echo '<br>';
    // passou a ser do tipo float (números com casas decimais)



?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    24/05/2023
-->