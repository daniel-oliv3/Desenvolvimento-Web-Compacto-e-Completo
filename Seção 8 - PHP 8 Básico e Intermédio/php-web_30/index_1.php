<?php

    // OPERADOR DE CONTROLO DE ERRO

    // Existem várias formas de contornar erros no PHP.
    // Este operador, quando aplicado a uma expressão que vai gerar um erro,
    // permite que esse erro seja ignorado.

    $ficheiro = file('teste123.txt');

    // este código vai gerar um aviso.
    // se adicionarmos o operador de controlo do erro,
    // a mensagem do aviso vai desaparecer, sendo a instrução ignorada.

    $ficheiro = @file('teste123.txt');

    echo 'fim';

    // Não é aconselhável usar este operador, excepto em situações
    // muito específicas, uma vez que a supressão da mensagem de erro
    // pode impedir que encontremos um erro no nosso código.




?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    26/05/2023
-->