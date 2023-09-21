<?php

/*
Podemos também usar a mesma função para "limpar" os nossos valores. 
*/

echo '<pre>';

// remove todos os caracteres que não podem existir nos emails
// não valida se o email é válido ou não.
$email = "joao ribeiro@gmail.com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

$email = "joaquim 1978 teste com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

// adiciona caracteres de escape
$frase = "John's party is going to be 'awesome'!";
var_dump(filter_var($frase, FILTER_SANITIZE_ADD_SLASHES));

// normaliza um valor para ser um float
// retira todos os caracteres, excepto os números , sinal - e +
// e, opcionalmente, o ponto e a virgula
$valor = "342 s 55.57";
var_dump(filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT));

// normaliza um valor para ser um inteiro
// remove todos os caracteres, excepto os dígitos e o + e -
$valor = "123 ab4.56s7";
var_dump(filter_var($valor, FILTER_SANITIZE_NUMBER_INT));


// normaliza uma url
$url = "http://    www . meu site.c o m";
var_dump(filter_var($url, FILTER_SANITIZE_URL));

/*
https://www.php.net/manual/en/filter.filters.sanitize.php 
*/





?>