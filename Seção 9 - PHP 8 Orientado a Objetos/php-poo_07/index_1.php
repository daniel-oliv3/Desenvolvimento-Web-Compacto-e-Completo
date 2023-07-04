<?php

// HEREDITARIEDADE

/* 
Um dos aspetos mais importantes da Programação Orientada a Objetos
é a possibilidade de estruturarmos o nosso código no sentido de
permitir que classes possam herdar propriedades e métodos de outras classes.

Desta forma, podemos ter código mais limpo e bem estruturado,
sem repetições desnecessárias de código.

Vejamos um exemplo simples.
*/

class Veiculo
{
    public $tipo;

    public function ligar()
    {
        // ...
    }

    public function desligar()
    {
        // ...
    }
}

// a classe veículo vai agora ser usada para criar duas classes
class Automovel extends Veiculo
{
    // além das propriedades e métodos da classe veículo,
    // vai ainda ter as propriedades específicas desta classe.
    public $portas;
    public $marca;
    public $ano;

}

class Aviao extends Veiculo
{
    // além das propriedades e métodos da classe veículo,
    // vai ainda ter as propriedades específicas desta classe.
    public $altitude_maxima;
    public $autonomia;
    public $construtora;
    public $ano_de_fabrico;
}

// Então...

$automovel = new Automovel();
$automovel->tipo = "Veículo terrestre";
$automovel->marca = "Ferrari";
$automovel->portas = 2;
$automovel->ano = 2020;

$aviao = new Aviao();
$aviao->tipo = "Veículo aéreo";
$aviao->construtora = "Boing";
$aviao->autonomia = 6000;
$aviao->ano_de_fabrico = 2022;
$aviao->altitude_maxima = 33000;

$automovel->ligar();
$aviao->ligar();



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->
