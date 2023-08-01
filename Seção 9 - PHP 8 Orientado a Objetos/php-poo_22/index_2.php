<?php

// PROPRIEDADES READONLY

class Usuario
{
    public readonly string $usuario;
    public function __construct($u)
    {
        $this->usuario = $u;
    }
    public function alterar()
    {
        $this->usuario = 'joaquim';
    }
}

$usuario = new Usuario('joao');
echo $usuario->usuario;

// Vamos agora tentar alterar o valor depois da variável iniciada
// no construtor.

// Vamos primeiro chamar o método alterar()
// Fatal error: Uncaught Error: Cannot modify readonly property
$usuario->alterar();

// Vamos tentar alterar o valor diretamente.
// Também não é permitido
$usuario->usuario = "joaquim";

// IMPORTANTE: as propriedades readonly podem ser public, private e protected
// mas têm sempre que ter um data type referenciado.

// Ex: private readonly bool $avancar;


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->