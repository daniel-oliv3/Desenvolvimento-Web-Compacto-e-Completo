<?php

// PROPRIEDADES READONLY
/*
Já vimos que, dentro de uma classe, podemos ter as nossas propriedades
protegidas. Mas a partir do PHP 8.1 passou a ser possível a existência
de propriedades só de leitura (readonly).

A principal característica das propriedades readonly é o facto de
só poderem ser iniciadas dentro da class e, depois de iniciadas, não podem
ter o seu valor alterado.
*/

// Por exemplo, esta construção simples, não é possível.
// Definir a propriedade $usuario, apesar de ser pública, gera um erro.

class Usuario1
{
    public readonly string $usuario;
}


$usuario = new Usuario1();
$usuario->usuario = 'daniel';


// Vejamos a forma correta
class Usuario2
{
    public readonly string $usuario;
    public function __construct($u)
    {
        $this->usuario = $u;
    }
}

$usuario = new Usuario2('daniel');
echo $usuario->usuario;



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->