<?php

$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_teste = [];

$file = fopen('dados.dat', 'r');
while(!feof($file)){
    $linha = fgets($file);
    if(is_numeric($linha)){
        if($linha > 0){
            $numeros_positivos[] = $linha;
        } elseif($linha < 0) {
            $numeros_negativos[] = $linha;
        }
        continue;
    }
    if(str_contains($linha, 'TESTE')){
        $textos_teste[] = $linha;
    } else {
        $textos[] = $linha;
    }
}
fclose($file);
echo '<pre>';
print_r($numeros_positivos);
echo '<hr>';
print_r($numeros_negativos);
echo '<hr>';
print_r($textos);
echo '<hr>';
print_r($textos_teste);










?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/06/2023
-->