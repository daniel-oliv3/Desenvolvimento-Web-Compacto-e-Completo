<?php

// BREAK e CONTINUE

// BREAK com vários níveis
/* 
Imagina o cenário em que estamos a executar dois ciclos, um dentro do outro.
O ciclo interior encontra uma condição para ser interrompido.
Queremos que o ciclo interior e o exterior sejam interrompidos.
*/

$paises = [
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Brasil' => ['Brasília', 'São Paulo', 'Rio de Janeiro'],
    'Angola' => ['Luanda', 'Cabinda', 'Huambo'],
    'Moçambique' => ['Maputo', 'Matola', 'Nampula']
];

foreach($paises as $pais=>$cidades){

    echo "<h3><u>$pais</u></h3>";

    foreach($cidades as $cidade){
    
        // vamos parar os dois ciclos quando a cidade é Cabinda
        // if($cidade == 'Cabinda') break 2;

        echo "<p>$cidade</p>";

    }
}

echo '<hr>FIM';





?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->