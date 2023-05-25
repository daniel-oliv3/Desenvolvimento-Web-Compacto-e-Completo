<?php

    // STRINGS
    // ------------------------------------------------------------------

    // Uma string é um conjunto de caracteres.
    // Já vimos muitas strings ao longo do módulo.
    // Vamos relembrar alguns dos conceitos e acrescentar novas informações.

    $nome = "Daniel";
    $apelido = 'Sapup3';

    // As duas variáveis são do tipo string
    // Diferença: nas aspas duplas, podemos adicionar variáveis no interior

    $apresentacao = "O meu nome é $nome e o apelido é $apelido.";

    // Podemos melhorar a leitura com a seguinte equivalência
    $apresentacao = "O meu nome é ${nome} e o apelido é ${apelido}.";
    //ou
    $apresentacao = "O meu nome é {$nome} e o apelido é {$apelido}.";

    // ------------------------------------------------------------------
    // CONCATENAÇÃO DE STRINGS

    $nome_completo = $nome . ' ' . $apelido;

    // ------------------------------------------------------------------
    // COMO OBTER A PRIMEIRA LETRA DO NOME?

    echo $nome[0];  // vamos falar de arrays em breve

    // para obter a 3ª letra
    echo $nome[2];

    // D a n i e l
    // 0 1 2 3 4 5

    // para acesso a letras da direita para a esquerda
    // podemos usar números negativos
    echo $nome[-1];

    // Podemos usar este método para modificar letras
    $apelido[2] = 'B';
    echo $apelido;


?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->