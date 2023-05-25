<?php

    // ARRAYS MULTIDIMENSIONAIS
    // são arrays que contém outros arrays.

    $lojas = [
        'porto' => [
            'telefone' => '12345',
            'email' => 'porto@gmail.com'
        ],
        'lisboa' => [
            'telefone' => '34567',
            'email' => 'lisboa@gmail.com'
        ],
        'coimbra' => [
            'telefone' => '67890',
            'email' => 'coimbra@gmail.com'
        ]
    ];

    echo '<pre>';
    print_r($lojas);
    echo '</pre>';

    // apresentar um valor específico
    echo $lojas['lisboa']['email'];

    // nos arrays com indices numéricos, também podemos ter multidimensão
    $notas = [
        [10,20,30],
        [100,200,300],
        [1000,2000,3000]
    ];

    echo '<pre>';
    print_r($notas);
    echo '</pre>';

    echo $notas[2][0]; // 1000

?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->