<?php

// ACCESS MODIFIERS

// vejamos o que acontece com os métodos

class Mulher
{
    public $nome;
    public $apelido;
    public $cor_do_cabelo;

    function metodo_1()
    {
        echo 'Método 1';
    }

    protected function metodo_2()
    {
        echo 'Método 2';
    }

    private function metodo_3()
    {
        echo 'Método 3';
    }
}

$m = new Mulher();

$m->metodo_1(); // OK
$m->metodo_2(); // ERRO
$m->metodo_3(); // ERRO









?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->
