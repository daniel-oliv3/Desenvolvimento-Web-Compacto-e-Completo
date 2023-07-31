<?php

require_once('index_6.php');

use Estrutuas_principais\Loja;
use Estrutuas_principais\Armazem;

$loja = new Loja();
$armazem = new Armazem();

// sempre que quiser criar novos objetos dentro deste script,
// já não tenho necessidade de fazer da seguinte forma:
$loja_1 = new Estrutuas_principais\Loja();
$loja_2 = new Estrutuas_principais\Loja();
$loja_3 = new Estrutuas_principais\Loja();

// posso simplesmente escrever
$loja_1 = new Loja();
$loja_2 = new Loja();
$loja_3 = new Loja();







?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/07/2023
-->