<?php

echo '<pre>';

// listagem de ficheiros
echo __DIR__ . '<br>';
$files = scandir(__DIR__);  // constante mágica __DIR__
print_r($files);

/* 
O . e o .. estão sempre presentes em cada pasta.
São identificados como a pasta atual (.) e a pasta anterior (..)
*/

echo '<hr>';
$files2 = scandir('./');  // lista a pasta atual
print_r($files2);

echo '<hr>';
$files3 = scandir('../');  // lista a pasta anterior (mãe)
print_r($files3);

// -----------------------------------------
// Podemos questionar se cada elemento encontrado é um ficheiro ou uma pasta
echo '<hr>';
foreach ($files as $item) {
    echo is_file($item) ? 'Ficheiro' : 'Pasta'; // is_dir() identifica se é pasta
    echo '<br>';
}

// -----------------------------------------
// se quisermos listar apenas os ficheiros...
echo '<hr>';
$files = scandir(__DIR__);
foreach ($files as $item) {
    if (is_file($item)) {
        echo $item . '<br>';
    }
}



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    16/06/2023
-->