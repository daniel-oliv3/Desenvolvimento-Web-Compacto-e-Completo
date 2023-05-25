<?php

    // ARRAYS
    // É uma variável que funciona como uma coleção de dados.

    $nome1 = "Daniel";
    $nome2 = "Priscila";
    $nome3 = "João";

    $nomes = array("Daniel", "Priscila", "João");
    // ou
    $nomes = ["Daniel", "Priscila", "João"];

    // como aceder a cada elemento
    echo $nomes[0]; // primeiro nome da coleção
    echo $nomes[2]; // terceiro nome da coleção

    // No caso anterior, as chaves são atribuídas automaticamente.
    // Podemos definir as nossas próprias chaves

    $nomes = [
        10 => "Daniel",
        20 => "Priscila",
        30 => "João"
    ];

    echo $nomes[20];

    // se tentarmos aceder a uma chave que não existe, surge um aviso

    echo $nomes[100];

    // para evitar o aviso, podemos verificar se o item existe
    var_dump(isset($nomes[200]));

?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->