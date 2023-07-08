<?php

// O QUE SÃO TRAITS E COMO UTILIZAR

trait movimentos
{
    public function iniciar()
    {
        //...
    }
    public function saltar()
    {
        //...
    }
    public function parar()
    {
        //...
    }
}

trait movimentos_de_voo
{
    public function levantar()
    {
        // ...
    }
    public function voar()
    {
        // ...
    }

    public function aterrar()
    {
        // ...
    }
}

class Ser_vivo
{
    public $nome;
    public $especie;
    public $peso;
}

class Homem extends Ser_vivo
{
    use movimentos;
}

class Leao extends Ser_vivo
{
    use movimentos;
}

class Passaro extends Ser_vivo {
    use movimentos, movimentos_de_voo;
}





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    08/07/2023
-->