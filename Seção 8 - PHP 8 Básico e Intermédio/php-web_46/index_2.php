<?php

// ESCOPO DE VARIÁVEIS

/* 
No entanto, a variável não estará acesível dentro de uma função.
*/

$nome = 'Daniel';

function executar(){
    echo $nome;
}

executar();

/* 
Todas as variáveis dentro de uma função têm escopo local.
Apenas existem dentro da função.
Elas são criadas dentro da função e destruídas assim que
a função termina a sua execução.
*/

function adicionar(){
    $a = 100;
}

echo $a;



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/06/2023
-->