<?php

// FUNÇÕES ÚTEIS PARA VERIFICAÇÃO DE CLASSES

/*
Podes ter necessidade de verificar se uma determinada classe existe,
ou se uma determinada classe tem um determinado método ou propriedade.

Vamos ver três funções do PHP que permitem executar estas operações.
*/

class Humano
{
    public $nome;

    public function falar($mensagem)
    {
        // ...
    }
}

class Pessoa
{
    // ...
}

// verificar se uma classe existe
echo class_exists('Pessoa') ? 'Sim' : 'Não';
echo '<br>';

// verifica se um método existe dentro de uma classe
echo method_exists('Humano', 'falar') ? 'Sim' : 'Não';
echo '<br>';

// verifica se uma propriedade existe dentro de uma classe
echo property_exists('Humano', 'apelido') ? 'Sim' : 'Não';
echo '<br>';




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->
