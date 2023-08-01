<?php

// AUTOLOAD DE CLASSES

/* 
Até agora vimos que, para usar as classes que criamos,
é necessário fazer a importação do script ou scripts que 
contêm essas classes. Neste vídeo vamos ver como é possível
fazer o carregamento das classes de forma automática.

Temos duas classes criadas dentro da pasta classes
É uma boa prática cada classe estar no seu ficheiro próprio.
*/


// Na metodologia tradicional ...

require_once 'classes/Humano.php';
require_once 'classes/Animal.php';

$humano = new Humano();
$animal = new Animal();

// Esta metodologia funciona bem, se tens poucas classes para carregar.
// Imagina que em vez de duas, tens dezenas!





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->
