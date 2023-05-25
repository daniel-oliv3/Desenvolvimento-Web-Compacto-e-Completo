<?php

    // FUNÇÕES ASSOCIADAS A ARRAYS

    $cliente = [
        'nome' => "joao",
        'apelido' => "ribeiro",
        'idade' => 48,
        'email' => 'joao@gmail.com'
    ];

    // apresentar um valor de um array associativo
    echo $cliente['apelido'];

    // verificar se existe uma determinada key no array
    var_dump(key_exists('telefone', $cliente)); // bool(false)

    // array para string
    $resultado = implode(",", $cliente);
    var_dump($resultado);   //  "joao,ribeiro,48,joao@gmail.com"

    // criar um novo array a partir de uma porção de outro array
    $nomes = ["joao", "ana", "carlos", "francisco", "cristina"];
    $nomes_parte = array_slice($nomes, 2);  // ["carlos", "francisco", "cristina"]

    // funções para arrays em PHP: 
    // https://www.php.net/manual/en/ref.array.php


?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->