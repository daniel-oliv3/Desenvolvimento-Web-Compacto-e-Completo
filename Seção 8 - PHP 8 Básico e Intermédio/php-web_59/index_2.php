<?php

// CONSTANTES MÁGICAS

// __DIR__
/*
A pasta à qual pertence o script atual.
Se usada dentro de um include, será devolvida a pasta do ficheiro
que está a ser incluído.
Tem o mesmo output que dirname(__FILE__).
Não tem barra no final do valor, a não ser que estejamos na raiz.
*/

echo '(index_2.php): ' . __DIR__ . '<br>';

include 'outros/script.php';


// ------------------------------------------------
// __FUNCTION__
/*
O nome da função onde o código está a ser executado. 
*/

adicionar(10,20);

function adicionar($a, $b)
{
    echo $a + $b . '<br>';
    echo __FUNCTION__;
}











?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->