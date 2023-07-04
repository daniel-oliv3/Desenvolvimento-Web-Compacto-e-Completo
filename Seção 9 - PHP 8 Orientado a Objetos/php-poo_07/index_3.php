<?php

// HEREDITARIEDADE

/* 
O access modifier PROTECTED pode ser usado em propriedades e métodos.
Portanto:
*/


class Cliente {

    protected $nome;
    protected $email;

    function __construct($n, $e)
    {
        $this->nome = $n;
        $this->email = $e;
    }
    
    protected function apresentar()
    {
        return "O nome do cliente é {$this->nome} e o email é {$this->email}.";
    }
}

$clientes = [
    new Cliente('daniel', 'daniel@gmail.com'),
    new Cliente('ana', 'ana@gmail.com'),
    new Cliente('carlos', 'carlos@gmail.com')
];

echo '<pre>';
print_r($clientes);





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->
