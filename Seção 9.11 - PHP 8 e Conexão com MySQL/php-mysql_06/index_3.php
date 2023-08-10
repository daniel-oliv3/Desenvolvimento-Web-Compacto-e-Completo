<?php

// OBTER DADOS EM DIFERENTES FORMATOS

/*

Por exemplo, podemos definir uma classe Produtos,
cujas propriedades são as mesmas das colunas das tabelas.
O resultado pode ser algo do tipo:
*/

class Produto {
    public $id;
    public $produto;
    public $preco_unidade;
}

$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS, 'Produto');

$ligacao = null;

echo '<pre>';
print_r($resultados);

/*
Repara como agora os resultados vêm em forma de Produto Object.
O carregamento dos dados para a classe é feito com a instanciação
implícita de um objeto. Sabemos que uma instanciação permite a execução
automática do método __construct.
Vejamos o próximo exemplo.
*/



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->