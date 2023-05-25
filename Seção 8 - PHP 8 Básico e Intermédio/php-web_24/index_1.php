<?php

    // FUNÇÕES ASSOCIADAS A ARRAYS
    // Existem dezenas de funções para arrays
    // Arrays é um tipo de dados muito importante para o PHP

    // Vamos conhecer algumas funções de maior destaque.

    $nomes = ["joao", "ana", "carlos", "joaquim"];

    // queremos saber se uma variável é um array?
    $resultado = is_array($nomes);  // true

    // queremos saber quantos elementos tem um array?
    $resultado = count($nomes);     // 4

    // ---------------------------------------------------
    // adicionar valores no final do array
    array_push($nomes, "fernando", "manuela");

    // adicionar um valor no início do array
    array_unshift($nomes, "marcos");

    // ---------------------------------------------------
    // retirar um valor do final do array
    $resultado = array_pop($nomes);     // $resultado = "manuela"

    // retirar um valor do início do array
    $resultado = array_shift($nomes);   // $resultado = "marcos"

    // eliminar um determinado elemento pelo indice
    unset($nomes[0]);   // remove o primeiro elemento do array



?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->