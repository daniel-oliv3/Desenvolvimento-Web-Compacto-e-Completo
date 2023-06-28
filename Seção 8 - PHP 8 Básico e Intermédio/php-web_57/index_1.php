<?php

/* 
CSV - significa Comma Separated Values (valores separados por vírgula)
É um ficheiro com uma estrutura particular que permite ser usado entre
aplicações para transporte de dados. Excel, LibreOffice, Google Sheets, ...
*/

// criar um ficheiro CSV
$file = fopen('dados.csv', 'w');

// header das colunas
$header = ['Coluna A', 'Coluna B', 'Coluna C'];
fputcsv($file, $header);

// linhas
for ($i = 1; $i <= 100; $i++) {
    $linha = [rand(100, 999), rand(100, 999), rand(100, 999)];
    fputcsv($file, $linha);    
}

fclose($file);




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->