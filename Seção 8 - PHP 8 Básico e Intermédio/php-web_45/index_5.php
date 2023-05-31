<?php

// PARÂMETROS DE UMA FUNÇÃO

// como forçar os strict types?
declare(strict_types=1);

function multiplicar($a, $b): int|float {
    return $a * $b;
}

echo multiplicar(10.3,2);






?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/05/2023
-->