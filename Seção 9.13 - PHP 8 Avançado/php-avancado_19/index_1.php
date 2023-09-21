<?php

/*
Controlar e validar a informação que é introduzida na aplicação
por parte dos utilizadores, é ponto fundamental para garantir que
é inserida a informação esperada e não vamos abrir espaço a eventuais
erros da aplicação.

O utilizador introduziu um email válido?
O valor é do tipo correto?

Entre as muitas formas que existem para fazer essa validação,
o PHP contém uma que é bastante interessante.

a função filter_vars() contém filtros de validação e de sanitização.
*/
echo '<pre>';

$a = "teste";
var_dump(filter_var($a, FILTER_VALIDATE_EMAIL)); // false

/*
a função toma como primeiro parâmetro o valor a analizar e o segundo é
uma constante que indica que tipo de validação vai ser analisada. 

se o valor analisado for do tipo correto, a função devolve esse valor.
se for de tipo incorreto, devolve o valor false.
*/

// analisa se o valor é booleano
$a = true;
var_dump(filter_var($a, FILTER_VALIDATE_BOOLEAN));
// ou
var_dump(filter_var($a, FILTER_VALIDATE_BOOL));

// analisa se o valor é float
$a = 100;
var_dump(filter_var($a, FILTER_VALIDATE_FLOAT));

// o valor é inteiro?
$a = "abc";
var_dump(filter_var($a, FILTER_VALIDATE_INT));
$a = 1000;
var_dump(filter_var($a, FILTER_VALIDATE_INT));

// é um IP válido?
$ipv4 = "127.0.0.1";
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP));
// podemos especificar que tipo de IP
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV4]));
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV6]));
$ipv6 = "2001:db8:3333:4444:5555:6666:7777:8888";
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV4]));

$ipv6 = "2001:db8:3333:4444:CCCC:DDDD:EEEE:FFFF";
var_dump(filter_var($ipv6, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV6]));

// e validar uma URL?
$url = "www.meusite.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));    // false
$url = "http://www.meusite.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));    // ok

/*
https://www.php.net/manual/en/filter.filters.validate.php 
*/



?>