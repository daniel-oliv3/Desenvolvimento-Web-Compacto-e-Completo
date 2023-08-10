<?php

// OBTER DADOS EM DIFERENTES FORMATOS

/*
Já vimos que temos vindo a obter resultados em forma
de array associativo.
Vamos perceber o que isso significa. 
*/

$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll();

$ligacao = null;

/* 
Quando chegamos a este ponto do script, a ligação já foi feita,
já foi executada a query que foi buscar TODOS os dados da tabela produtos. 

Vamos analisar o que foi guardado nos $resultados
*/

echo '<pre>';
print_r($resultados);

/* 
Como podes verificar, há aqui um conjunto de informação duplicada.

 [0] => Array
    (
        [id] => 1
        [0] => 1
        [produto] => Abacate
        [1] => Abacate
        [preco_unidade] => 12.55
        [2] => 12.55
    )

O primeiro produto da coleção (assim como os restantes), vem
em formato de array que, simultaneamente, têm chaves núméricas
e chaves alfanuméricas - um array associativo.

Não precisamos dessa repetição.
Então vamos dizer ao PDO, como queremos que os dados venham.
*/


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->