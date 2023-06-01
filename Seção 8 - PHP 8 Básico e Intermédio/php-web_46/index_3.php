<?php

// ESCOPO DE VARIÁVEIS

/* 
Neste caso, a variável $nome terá duas versões:
Uma global que existe ao longo do script.
Outra local que é criada e terminada dentro do bloco da função.
*/

$nome = 'Daniel';

function dados(){
    $nome = 'Joaquim';
}

dados();

echo $nome;


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/06/2023
-->