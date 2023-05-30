<?php

// BREAK e CONTINUE

/* 
Os loops (ciclos) são usados para executar o mesmo código múltiplas vezes.
Em determinadas situações, podemos querer que o ciclo não execute todas as
suas iterações, ou queremos que seja simplesmente interrompido.

É nestes cenários que entram o break e o continue.
*/

// ---------------------------------------------
// BREAK - permite interromper a execução de um ciclo antes do previsto

$paragem = 5;
for ($i = 0; $i <= 10; $i++) {
    echo "$i<br>";
    if($i == $paragem) {
        break;
    }

    // ou
    // if($i == $paragem) break;
}

echo '<hr>';

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$nome_que_vai_interromper = "francisco";
foreach($nomes as $nome){
    echo "$nome<br>";
    if($nome == $nome_que_vai_interromper) break;
}

// IMPORTANTE: tanto o break ou o continue, 
// também funcionam nos ciclos while e do while




?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->