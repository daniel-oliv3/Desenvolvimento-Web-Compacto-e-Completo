<?php

// BREAK e CONTINUE

// CONTINUE - permite passar de imediato para a iteração seguinte

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$ignorar = "carlos";
foreach($nomes as $nome){

    if($nome == $ignorar) continue;
    echo "$nome<br>";
}





?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->