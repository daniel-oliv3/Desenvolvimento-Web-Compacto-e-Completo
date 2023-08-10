<?php

// CONECTAR VIA PDO E CONTROLO DE ERROS

/*
O PDO contém mecanismos que nos permitem identificar e tratar
os erros de conexão, para a eventualidade de acontecerem. 
*/

// definir as propriedades da ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// Vamos colocar a ligação dentro de um bloco try... catch
try {

    // efetuar a ligação
    $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

    // ver o status da ligação
    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;

    $ligacao = null;

} catch(PDOException $err){
    
    echo 'ERRO: ' . $err->getMessage();
}

// vamos deliberadamente colocar um erro no nome da base de dados

/*
O bloco catch apanhou uma PDOException.
Esta exceção contém informações precisas sobre o erro.
Já não é uma mensagem gigante. Ela contém um código e uma mensagem.
*/


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->
