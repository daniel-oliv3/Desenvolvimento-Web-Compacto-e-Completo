<?php
echo '<pre>';

// Uma forma muito simples de obter o 
// tamanho de um ficheiro em bytes
$dados = filesize('registos.txt');
echo $dados . ' bytes';

echo '<hr>';

// E para obter várias informações sobre
// um determinado ficheiro.
$info = pathinfo('registos.txt');
print_r($info);





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    16/06/2023
-->