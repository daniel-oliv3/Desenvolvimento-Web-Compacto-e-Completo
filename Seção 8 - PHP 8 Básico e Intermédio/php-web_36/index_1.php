<?php

// EXPRESSÃO CONDICIONAL SWITCH

/* 
É uma estrutura muito semelhante ao IF...ELSEIF...ELSE
O parâmetro é o valor a ser avaliado
Cada 'case' verifica se o valor é igual e executa o código a seguir aos :

break - ignora o resto do código

default é semelhante ao else - executado se nenhuma das comparações
resultar em verdadeiro.
*/

$estado_encomenda = 'em processamento';

switch ($estado_encomenda) {
    case 'em processamento':
        # código
        break;

    case 'anulada':
        # código
        break;

    case 'enviada':
        # código
        break;

    default:
        # code...
        break;
}


?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    29/05/2023
-->