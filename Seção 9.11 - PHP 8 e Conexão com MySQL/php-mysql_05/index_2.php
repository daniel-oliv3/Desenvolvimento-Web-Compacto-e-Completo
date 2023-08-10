<?php

// OBTER RESULTADOS COM EXECUÇÃO DE QUERIES

/*
Os métodos fetch() e fetchAll() diferem no seguinte aspeto:
    fetch() vai buscar o próximo elemento da coleção de dados.
    fetchAll() vai buscar todos de uma vez.

Vejamos a diferença entre os dois:
*/

// configurações
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

// utilização do fetch
$resultados = $ligacao->query("SELECT * FROM produtos")->fetch();

echo '<pre>';
print_r($resultados);

// Com o fetch() fomos apenas buscar o primeiro elemento da coleção.

// fecho da ligação
$ligacao = null;



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->