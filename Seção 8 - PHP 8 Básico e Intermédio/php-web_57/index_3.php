<?php

/* 
A leitura é feita usando a função fgetcsv
*/

echo '<pre>';

$file = fopen('dados.csv', 'r');
while(!feof($file)){
    $linha = fgetcsv($file);
    print_r($linha);
}
fclose($file);




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->