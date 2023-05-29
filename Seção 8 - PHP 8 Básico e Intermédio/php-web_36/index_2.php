<?php

// EXPRESSÃO CONDICIONAL SWITCH

// podemos agrupar vários valores em análise para
// execução do mesmo bloco de código.

$estado_encomenda = 'em processamento';

switch ($estado_encomenda) {
    case 'em processamento':
    case 'em análise':
        # código
        break;

    case 'anulada':
    case 'cancelada':
    case 'inválida':
        # código
        break;

    case 'enviada':
        # código
        break;

    default:
        # código
        break;
}




?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    29/05/2023
-->