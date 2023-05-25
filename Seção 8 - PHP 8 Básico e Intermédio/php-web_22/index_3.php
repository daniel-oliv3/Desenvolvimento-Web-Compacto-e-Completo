<?php

    // ARRAYS
    
    // Como podemos adicionar e remover valores?

    $nomes = ["joao", "ana", "carlos"];

    // adicionar (push)
    $nomes[] = "novo nome";
    // $nomes = ["joao", "ana", "carlos", "novo nome"];

    // ou
    array_push($nomes, "pedro");
    array_push($nomes, "rui", "carla", "marta");

    echo '<pre>';
    print_r($nomes);
    echo '</pre>';

    // remover elemento (a chave vai desaparecer)
    unset($nomes[5]);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';

    // existem dezenas de funções para operar arrays
    // iremos abordando cada uma delas à medida da necessidade




?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->