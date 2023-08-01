<?php

// DECLARAÇÃO STRICT TYPES

/* 
Para que o PHP obrigue a passar argumentos que correspondem
ao tipo de dado esperado, temos que ativar o strict_types = 1
*/

declare(strict_types = 1);

function apresentar1($mensagem)
{
    echo "Mensagem: $mensagem<br>";
}

function apresentar2(String $mensagem)
{
    echo "Mensagem: $mensagem<br>";
}

apresentar1("Mensagem do tipo string");
apresentar2(100);

// como podes ver, a segunda função já vai apresentar um erro.




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->