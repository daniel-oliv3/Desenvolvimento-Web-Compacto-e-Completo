<?php

    // ARRAYS
    
    // Vimos arrays com índices numéricos.
    // Eles também podem ser arrays associativos:
    // Têm índices alfanuméricos.

    $empresa = [
        'ceo' => "joao",
        'administrador' => "ana",
        'executivo' => "carlos",
        'contabilista' => "cristina"
    ];

    echo '<pre>';
    print_r($empresa);
    echo '</pre>';

    // para apresentar um valor, usamos a key
    echo $empresa['administrador'];

    // podemos adicionar mais valores
    $empresa["operario"] = "antonio";
    echo '<pre>';
    print_r($empresa);
    echo '</pre>';

    // no próximo vídeo iremos fazer uma introdução aos arrays multidimensionais


?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->