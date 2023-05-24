<?php

    // FLOATS

    // Tal como os inteiros, o valor mínimo e máximo depende da plataforma
    // 32 ou 64 bits

    echo PHP_FLOAT_MIN;
    echo '<br>';
    echo PHP_FLOAT_MAX;
    echo '<br>';


    // Infinity - INF - O valor é demasiado elevado para ser apresentado
    $valor = PHP_FLOAT_MAX * 2;
    echo $valor;
    echo '<br>';
    var_dump($valor);

    // converter para float
    echo '<br>';
    $valor = 10;
    $valor_float = (float)$valor;
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);

    // ou ainda
    echo '<br>';
    $valor = 20;
    $valor_float = floatval($valor);
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);





?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    24/05/2023
-->