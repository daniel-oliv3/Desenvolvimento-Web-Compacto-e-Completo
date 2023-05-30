<?php

// CICLO FOREACH

/* 
É a melhor opção para iterações em arrays ou objetos.
(falaremos de objetos noutro módulo de PHP)

foreach([array] as  $value ou $key=>$value){
    # código
}

*/

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
foreach($nomes as $nome){
    echo "$nome<br>";
}

echo '<hr>';

$posicoes = [
    'administrador' => 'joao',
    'secretario' => 'ana',
    'colaborador' => 'carlos'
];

foreach($posicoes as $chave=>$valor){
    echo "Com a posição de $chave, temos a seguinte pessoa: $valor<br>";
}

// no final da execução, a variável $valor e a $chave vão permanecer disponíveis
echo "<hr>$valor<br>$chave";





?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->