<?php

    // --------------------------------------
    // definir o nome e valor de uma variável
    $nome1 = "Daniel";

    echo $nome1;

    // alterar o valor de uma variável
    $nome1 = "Sapupa";

    echo $nome1;

    // --------------------------------------
    // $nome2 = carla; // NOK

    $parcela1 = $parcela2 = $parcela3 = 100;

    // --------------------------------------
    $valor1 = 100;
    $valor2 = $valor1;
    echo $valor1;   // 100
    echo $valor2;   // 100

    $valor2 = 200;

    echo $valor1;   // 100
    echo $valor2;   // 200
     
    // --------------------------------------
    $valor3 = 100;
    $valor4 = 300;
    $valor5 = $valor3 + $valor4;

    echo $valor5;   // 400

    // --------------------------------------
    // apresentar o valor de uma variável dentro de uma string
    $nome = "Daniel";
    echo 'O meu nome é $nome';  // O meu nome é $nome
    echo "O meu nome é $nome";  // O meu nome é Daniel


?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    24/05/2023
-->

