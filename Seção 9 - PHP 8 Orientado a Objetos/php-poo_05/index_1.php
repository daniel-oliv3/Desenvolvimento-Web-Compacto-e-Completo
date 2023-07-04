<?php

// CONSTRUCTOR

/*
O constructor é um conceito da programação orientada a objetos que
está relacionado com a existência de um método especial dentro da
classe que vai ser executado automaticamente sempre que um novo
objeto é criado a partir dessa classe.

Vejamos o exemplo:
*/

class Mulher
{
    private $nome;
    private $apelido;

    function __construct($n, $a)
    {
        $this->nome = $n;
        $this->apelido = $a;
    }

    function get_nome()
    {
        return $this->nome;
    }

    function get_apelido()
    {
        return $this->apelido;
    }

    function get_nome_completo()
    {
        return $this->nome . ' ' . $this->apelido;
    }
}


// quando vamos fazer a instanciação da classe num objeto,
// essa instanciação vai obrigar a que tenhamos que definir
// os argumentos que o método especial __construct nos está
// a pedir.
$m = new Mulher('Ana', 'Silva');

echo 'O nome completo é: ' . $m->get_nome_completo();







?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->