<?php

    // OPERADORES DE STRINGS
    // .    .=

    // São operadores específicos para efetuar operações com strings
    // Estamos a falar especificamente de operadores de concatenação.

    $nome = "daniel";
    $nome = $nome . " oliveira";     // daniel oliveira
    $apresentacao = "Bom dia, " . $nome . '.';  // Bom dia, daniel oliveira.

    // Podemos simplificar uma parte do código acima da seguinte forma
    $nome = "daniel";
    $nome .= " oliveira"; // daniel oliveira

    // portanto...
    $cliente = "daniel oliveira";
    $telefone = "123456789";
    $email = "daniel.oliveira@gmail.com";

    $completo = $cliente . ' - ' . $telefone . ' - ' . $email; 
    // daniel oliveira - 123456789 - daniel.oliveira@gmail.com

?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    26/05/2023
-->