<?php

// OBTER RESULTADOS COM EXECUÇÃO DE QUERIES

/*
Podemos usar o fetch para fazer o seguinte:
*/

// configurações
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$resultados = $ligacao->query("SELECT * FROM produtos");

while($linha = $resultados->fetch())
{
    echo 'Produto: <strong>' . $linha['produto'] . '</strong><br>';
}

// fecho da ligação
$ligacao = null;

/* 
O que aconteceu aqui?
A query devolve um conjunto de resultados.
O ciclo while percorreu cada uma das linhas do resultado usando o método fetch()
Em cada volta do ciclo, o método vai buscar o registo seguinte.
*/


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->