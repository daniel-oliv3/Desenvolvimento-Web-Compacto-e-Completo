<?php

// CONECTAR VIA PDO E CONTROLO DE ERROS

// Vamos colocar propositadamente um erro nas configurações.
// Devemos ter sempre em conta a possibilidade de ter erros na execução.

// definir as propriedades da ligação
$database = 'udemy_loja_onlinexxxxxxx';  // ESTA BASE DE DADOS NÃO EXISTE.
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// efetuar a ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado;

$ligacao = null;

/*
Vamos ser surpreendidos por um erro.
Vejamos o que o erro nos diz.
*/


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->