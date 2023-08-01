<?php

// COMO CHAMAR O CONSTRUTOR DE UMA CLASSE PAI

/* 
Vejamos agora como fazer para chamar o método __construct do pai
*/

class Humano
{
    public $nome;
    public $perfil;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Funcionario extends Humano
{
    public function __construct($n)
    {
        parent::__construct($n);
        $this->perfil = "administrador";
    }
}

$funcionario = new Funcionario('daniel');
echo $funcionario->nome;
echo '<br>';
echo $funcionario->perfil;



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->