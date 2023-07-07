<?php

// SOBREPOSIÇÃO DE MÉTODOS HERDADOS

/* 
O conceito de 'sobreposição' é uma tradução simples de um outro
conceito mais conhecido como 'override'.
Na prática significa que podemos ter uma classe 'mãe' onde um
determinado método é definido e podemos alterar o seu código
dentro de uma classe 'filha'.

Vejamos o exemplo:
*/

class Pessoa 
{
    public $nome;

    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método é da classe mãe.";
    }
}

class Cliente extends Pessoa
{
    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método tem uma nova implementação na classe filha.";
    }
}

// vamos instanciar um objeto de cada classe:

$cliente_1 = new Pessoa();
$cliente_1->nome = 'joao';

$cliente_2 = new Cliente();
$cliente_2->nome = 'carlos';

$cliente_1->identificacao();
echo '<br>';
$cliente_2->identificacao();






?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    07/07/2023
-->
