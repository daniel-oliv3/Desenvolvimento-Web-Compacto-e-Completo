<?php

// DESTRUCTOR

/* 
Tal como acontece com o __construct, existe um método especial
que só vai ser executado quando um objeto é destruído ou
o script termina a sua execução.
*/

class Cliente
{
    private $nome;

    function __construct($n)
    {
        $this->nome = $n;
        echo 'Foi criado um novo ojeto com o nome: ' . $this->nome . '<br>';
    }

    function __destruct()
    {
        echo 'O objeto foi destruído. Tinha o seguinte nome ' . $this->nome . '<br>';
    }
}

// vamos criar um objeto a partir da classe
$cliente = new Cliente('Carlos');

// vamos executar um bloco de código.
for($i = 1; $i <=10; $i++)
{
    echo "Valor do i: $i<br>";
}

// agora vamos destruir deliberadamente o objeto
unset($cliente);

echo 'Fim do script.';

// IMPORTANTE: Estamos nesta fase inicial a conhecer os conceitos de forma
// simples: access modifiers PUBLIC, PROTECTED e PRIVATE, o __construct e __destruct
// Este conceitos serão explorados em vários exemplos ao longo do módulo
// e irei acrescentar mais informação e detalhe à importância
// e às consequências da sua utilização.



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->