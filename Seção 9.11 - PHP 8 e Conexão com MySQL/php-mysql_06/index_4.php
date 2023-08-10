<?php

// OBTER DADOS EM DIFERENTES FORMATOS

/*
Podemos acrescentar propriedades e métodos na classe
e executar operações quando os dados são guardados. 

Neste caso adicionei uma propriedade que não existe na base de dados.
preço por uma dúzia.
Como sei o valor de cada unidade, o construtor vai multiplicar
esse valor por doze.
*/

class Produto {
    public $id;
    public $produto;
    public $preco_unidade;
    public $preco_de_uma_duzia;

    public function __construct()
    {
        $this->preco_de_uma_duzia = $this->preco_unidade * 12;
    }
}

$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS, 'Produto');

$ligacao = null;

echo '<pre>';
print_r($resultados);



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->