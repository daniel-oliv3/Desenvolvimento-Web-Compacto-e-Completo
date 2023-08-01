<?php

// DECLARAÇÃO STRICT TYPES

declare(strict_types=1);

class Pessoa
{
    public String $nome;
    public String $apelido;
    public int $altura;

    public function falar(String $mensagem): String
    {
        return "O meu nome é {$this->nome} e a mensagem é: $mensagem";
    }
}

$p = new Pessoa();
$p->nome = "Daniel Oliveira";
echo $p->falar('Bom dia!');

// Estes conceitos são importantes numa linguagem de programação,
// uma vez que permitem evitar erros inconvenientes.
// A maior parte das linguagens de programação de alto nível usam
// variáveis tipadas. Esse é o caminho a seguir para alcançar no PHP
// as melhores práticas como programador.



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->