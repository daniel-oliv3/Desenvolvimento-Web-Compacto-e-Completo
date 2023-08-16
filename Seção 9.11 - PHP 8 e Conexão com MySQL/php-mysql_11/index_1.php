<?php

// CONTROLAR COMUNICAÇÕES COM TRANSAÇÕES

/*
A transação é um mecanismo processual de comunicação
com a base de dados no qual podemos efetuar um conjunto de
instruções SQL e, caso aconteça um erro, podemos "voltar atrás"
nas execuções que foram efetuadas. No caso de haver sucesso,
podemos finalizar essas comunicações todas.

Vamos ver com um exemplo.
*/

// dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

try {

    $ligacao->exec("INSERT INTO usuarios VALUES(0,'user1','111')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0,'user2','222')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0,'user3','333')");
    // erro propositado
    $ligacao->exec("INSERT INTO users VALUES(0,'user4','444')");


} catch (PDOException $err) {

    echo 'Aconteceu um erro no SQL!';

}




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    16/08/2023
-->