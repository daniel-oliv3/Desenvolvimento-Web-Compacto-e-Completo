<?php

// COMO CHAMAR O CONSTRUTOR DE UMA CLASSE PAI

/* 
Esta funcionalidade não está apenas destinada ao construtor.
Se quiseres criar um novo método dentro da classe filha
e ainda assim quiseres executar o que está na implementação
original, podes usar a expressão parent::

E isto aplica-se à chamada do método com o mesmo nome, como
a métodos com outro nome.
*/

class Veiculo
{
    public $marca;

    public function apresentar()
    {
        echo "Sou da marca: {$this->marca}.";
    }

    public function teste()
    {
        // ...
    }
}

class Automovel extends Veiculo
{
    public function apresentar()
    {
        parent::apresentar();
        echo '<br>';
        echo 'Chamei a função da classe pai e ainda adicionei este código!';
    }
}

$a = new Automovel();
$a->marca = "Ferrari";
$a->apresentar();



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->
