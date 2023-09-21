<?php

/*
Também podemos usar funções callback para criar o nosso próprio filtro. 
*/
function apenas_3_chars($value){
    if(strlen($value)<3){
        return "[]";
    } else {
        return substr($value, 0,3);
    }
}

$valor = "joao ribeiro";
// $valor = "a";
$final = filter_var($valor, FILTER_CALLBACK, ['options' => 'apenas_3_chars']);

echo $final;

/*
É impossível estar a exemplificar todos os aspetos disponíveis.
Sempre que sentires a necessidade de usar um filtro, consulta a
documentação do PHP. 
*/