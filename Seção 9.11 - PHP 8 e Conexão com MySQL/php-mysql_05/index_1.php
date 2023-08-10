<?php

// OBTER RESULTADOS COM EXECUÇÃO DE QUERIES

/*
Vamos obter dados a partir da base de dados, e ver
como o PHP os pode receber. 
*/

// configurações
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

// ------------------------
// comunicação simples
// $resultados = $ligacao->query("SELECT * FROM produtos");
// echo '<pre>';
// print_r($resultados);

// O retorno é um objeto PDOStatement. Aparentemente não contém os resultados.

// ------------------------
// Podemos ter acesso aos resultados de várias formas:
$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll();
echo '<pre>';
print_r($resultados);

// fecho da ligação
$ligacao = null;



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->