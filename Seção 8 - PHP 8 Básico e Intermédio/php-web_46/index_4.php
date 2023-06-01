<?php

// ESCOPO DE VARIÁVEIS

/* 
É possível aceder dentro de uma função a uma variável global.
Fazemos da seguinte forma:
*/

$nome = 'Daniel';

function dados(){
    global $nome;
    $nome = 'Joaquim';
}

dados();

echo $nome;

// IMPORTANTE: A melhor estratégia passa por usar parâmetros nas funções.



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/06/2023
-->