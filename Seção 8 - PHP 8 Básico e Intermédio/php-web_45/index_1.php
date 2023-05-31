<?php

// PARÂMETROS DE UMA FUNÇÃO

/*
Podemos passar valores (argumentos) para o interior de uma função
se essa função aceitar parâmetros.

Parâmetros são variáveis indicadas dentro dos parêntisis da função
e que vão estar disponiveis para serem usadas dentro da função.

Argumentos são os valores que passamos para o interior dessa função.
Vejamos um exemplo simples.
*/

function adicionar($a, $b){
    return $a + $b;
}

echo adicionar(100,50);

/* 
adicionar - nome da função
$a e $b são parâmetros da função. Os parâmetros são separados por vírgulas.
Ao chamar a função, o valor 100 e o valor 50 são designados por argumentos.
O 100 irá ser atribuído ao parâmetro $a e o 50 ao parâmetro $b da função.
*/




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/05/2023
-->