<?php

    // STRINGS
    // ------------------------------------------------------------------

    // Outras duas formas de definir strings (menos usadas) são:

    // Heredoc

    $texto1 = <<<TEXT
    frase 1
    frase 2
    frase 3
    TEXT;

    echo $texto1; // as linhas vão aparecer sem quebras

    echo nl2br($texto1);    // as linhas vão aparecer com quebras

    // Nowdoc
    $texto2 = <<<'TEXT'
    frase 1
    frase 2
    frase 3
    TEXT;

    echo nl2br($texto2);

?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->