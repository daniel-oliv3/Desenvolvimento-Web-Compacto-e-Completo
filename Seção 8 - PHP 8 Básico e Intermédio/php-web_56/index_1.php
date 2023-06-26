<?php

/* 
Existem várias formas de leitura de dados a partir de um ficheiro de texto.
No vídeo anterior vimos a função file_put_contents() para guardar dados.
Vejamos a função file_get_contents()
*/

$dados = file_get_contents('dados.txt');
echo nl2br($dados);

echo '<hr>';

// podemos ler apenas uma parte do ficheiro
$dados = file_get_contents('dados.txt', offset: 6, length: 40);
echo nl2br($dados);




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    26/06/2023
-->