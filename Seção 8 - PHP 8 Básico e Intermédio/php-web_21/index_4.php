<?php

    // STRINGS
    // ------------------------------------------------------------------

    // Um aspeto importante nas strings: o PHP contém um vasto conjunto de
    // funções para efetuar operações com strings.
    // Vejamos apenas alguns exemplos.

    $frase = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.";

    // apresentar número de caracteres de uma string
    echo strlen($frase) . '<br>';

    // transformar todas as letras em maiúsculas
    echo strtoupper($frase) . '<br>';

    // apresentar apenas parte da frase
    echo substr($frase, 0, 20) . '<br>';

    // verifica se uma palavra existe dentro da string
    echo str_contains($frase, 'xxxxxx');

    // Existem várias dezenas de funções para strings.
    // Não te preocupes, ao longo do módulo iremos aprender bastantes
    // à medida das necessidades.


?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->