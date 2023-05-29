<?php

// EXPRESSÃO MATCH

/* 
É uma nova estrutura condicional que apareceu no PHP 8.
Retorna um determinado valor de acordo com a análise efetuada
*/


$estado_encomenda = 'em processamento';

// -------------------------------------------------
switch ($estado_encomenda) {
    case 'em processamento':
        # código
        break;

    case 'anulada':
    case 'cancelada':
        # código
        break;

    case 'enviada':
        # código
        break;

    default:
        # código
        break;
}

// -------------------------------------------------
$resultado = match($estado_encomenda) {
    'em processamento' => 'A encomenda está a ser tratada.',
    'anulada', 'cancelada' => 'A encomenda foi anulada ou cancelada.',
    'enviada' => 'A encomenda foi enviada.',
    default => 'Estado da encomenda é desconhecido'
};

echo $resultado;





?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    29/05/2023
-->