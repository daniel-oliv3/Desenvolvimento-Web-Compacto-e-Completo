<?php

// CONECTAR VIA PDO E CONTROLO DE ERROS

/*
Por padrão, o PDO vai emitir uma excepção sempre que
acontece um erro.
*/

$database = 'udemy_loja_onlinexxxxxxxxxxxxx';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

try {

    $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

    // define o modo como os erros serão tratados
    // neste caso, sendo o padrão, indica que o modo de erro é
    // a apresentação de exceções.
    $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;

    $ligacao = null;

} catch(PDOException $err){
    
    // vamos ver o que o $err contém
    echo '<pre>';
    print_r($err);

    echo '<hr>';
    print_r($err->errorInfo);

}

/*
Preparar o nosso código contra os erros é fundamental.
Não iremos por agora aprofundar muito esta matéria, mas sempre
que necessário iremos voltar aos erros.

Vejamos contudo ainda o exemplo seguinte.
*/


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->