<?php

// A SIMPLES E COMPLEXA VALIDAÇÃO DE DADOS

/*
Como vimos nos vídeos anteriores, a validação de formulários
é de extrema importância para impedir problemas no fluxo
do nosso código. No entanto, a validação de formulários
não é o único processo em que é necessário validar dados.

Por exemplo, podemos estar a carregar informação a partir
de um ficheiro de dados, ou de uma base de dados, e podemos
ter a necessidade de analisar, por exemplo, se um email é válido,
ou se uma determinada string é um valor numérico.

A validação de um determinado dado pode ser mais simples,
usando funções existentes no PHP para essa validação,
ou com necessidade de recorrermos a expressões regulares.

Vejamos apenas alguns exemplos a título de curiosidade
*/

// validar se valor é uma string
$valor1 = "daniel";
$valor2 = 123;
var_dump(is_string($valor1));   // bool(true)
echo '<br>';
var_dump(is_string($valor2));   // bool(false)
echo '<hr>';

// validar se valor é numérico
$valor1 = "daniel";
$valor2 = 123;
$valor3 = 13.5;
$valor4 = true;
var_dump(is_numeric($valor1));  // bool(false)
echo '<br>';
var_dump(is_numeric($valor2));  // bool(true)
echo '<br>';
var_dump(is_numeric($valor3));  // bool(true)
echo '<br>';
var_dump(is_numeric($valor4));  // bool(false)
echo '<hr>';

// validar se um valor é booleano
$valor1 = "false";
$valor2 = false;
$valor3 = 0;

var_dump(is_bool($valor1));     // bool(false)
echo '<br>';
var_dump(is_bool($valor2));     // bool(true)
echo '<br>';
var_dump(is_bool($valor3));     // bool(false)
echo '<hr>';

// validar se uma variável está vazia
$valor1 = "texto";
$valor2 = "";
$valor3 = 0;
$valor4 = 1;
$valor5 = [];
var_dump(empty($valor1));       // bool(false)
echo '<br>';
var_dump(empty($valor2));       // bool(true)
echo '<br>';
var_dump(empty($valor3));       // bool(true)
echo '<br>';
var_dump(empty($valor4));       // bool(false)
echo '<br>';
var_dump(empty($valor5));       // bool(true)
echo '<hr>';




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/06/2023
-->