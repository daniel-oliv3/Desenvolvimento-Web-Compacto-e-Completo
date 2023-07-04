<?php

// ACCESS MODIFIERS

/* 
Já vimos que as classes podem ter PROPRIEDADES (variáveis da classe)
e MÉTODOS (funções da classe).

As PROPRIEDADES e os MÉTODOS podem ter níveis de acesso distintos
que permitem controlar a que nível podemos ter acesso a eles ou não.

PUBLIC - a propriedade ou método pode ser acedida a partir de qualquer lado.
É o access modifier padrão.

PROTECTED - a propriedade ou método pode ser acedida dentro da classe
e dentro de classes derivadas dela (veremos mais à frente o que são classes derivadas).

PRIVATE - a propriedade ou método só pode ser acedido DENTRO da classe.

Vejamos um exemplo muito simples.
*/

class Homem
{
    public $nome;
    protected $apelido;
    private $cor_do_cabelo;
}

// vamos fazer a instanciação de Homem = criar um objeto a partir da classe
$h = new Homem();

// Agora, se tentármos o acesso a cada uma das propriedades:

$h->nome = "Daniel";                  // OK
$h->apelido = "Oliveira";            // ERRO
$h->$cor_do_cabelo = "Castanho";    // ERRO









?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->