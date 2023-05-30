<?php

// CICLO FOR

/* 
É uma das estruturas de ciclo mais usadas.
Permite executar blocos de código enquanto uma condição for verdadeira

Ao contrário do ciclo while e do while, o ciclo for já inclui
a lógica para atualizar o valor da condição.

Contém 3 expressões separadas por ponto e vírgula

for(expressão de iniciação; expressão de condição; expressão de incremento){
    # código
}
*/

for ($indice = 1; $indice <= 10; $indice++) {
    echo "Índice: $indice<br>";
}

// em cenários menos comuns, podemos remover algumas expressões

/* 

for(;;){
    
}

Trata-se de um ciclo infinito. Para que ele termine, será necessário
criar um cenário no interior do ciclo para que ele seja interrompido.
Veremos como usar as instruções Continue e Break num outro vídeo.

*/

echo '<hr>';

// Também é possível algo do tipo:
for ($i = 0; $i < 10; print $i, $i++) {
}

echo '<hr>';

// Também podemos usar o ciclo For para fazer uma iteração
// pelos dados de um array, da seguinte forma
$nomes = ['joao', 'ana', 'carlos'];
for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . '<br>';
}

echo '<hr>';

// ou iterar pelas letras de uma string
$frase = "Teste com uma string.";
for ($i = 0; $i < strlen($frase); $i++) {
    echo $frase[$i] . '<br>';
}

// IMPORTANTE: sobre questões de performance
// se usármos uma função na expressão de avaliação da condição
// podemos comprometer a performance, no caso de ser um ciclo longo.
// Então:

$valores = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]; // vamos imaginar um array gigante

// em vez de:
for ($i = 0; $i < count($valores); $i++) {
}

// podemos escrever:
for ($i = 0, $total_valores = count($valores); $i < $total_valores; $i++) {
}

// $total_valores só vai ser executado no primeiro passo do ciclo.
// A expressão de avaliação da condição vai apenas analisar o valor da variável.






?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->