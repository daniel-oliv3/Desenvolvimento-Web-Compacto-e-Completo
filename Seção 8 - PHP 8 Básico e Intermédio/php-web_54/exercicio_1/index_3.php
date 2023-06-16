<?php

// Para remover uma pasta...
// rmdir(__DIR__ . '/pasta_teste');

// Mais uma vez, vai aparecer um aviso se a pasta não existe.
if(file_exists(__DIR__ . '/pasta_teste')){
    rmdir(__DIR__ . '/pasta_teste');
}

// IMPORTANTE: A pasta só pode ser removida se estiver vazia.
rmdir(__DIR__ . '/data');





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    16/06/2023
-->