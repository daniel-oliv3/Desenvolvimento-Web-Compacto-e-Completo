<?php

// HEREDITARIEDADE

// vejamos os conceitos num exemplo mais prático

class Animal_de_estimacao
{
    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca)
    {
        $this->nome = $nome;
        $this->especie = $especie;   
        $this->raca = $raca;
    }
}

class Cao extends Animal_de_estimacao
{
    function ladrar($vezes)
    {
        echo "O {$this->nome} ladrou $vezes vezes!<br>";
    }
}

class Gato extends Animal_de_estimacao
{
    function miar($vezes)
    {
        echo "O {$this->nome} miou $vezes vezes!<br>";
    }
}


// instanciação das classes em objetos
$cao = new Cao('Snoopy', 'Canis lupus', 'Beagle');
$gato = new Gato('Garfield', 'Felis catus', 'Persa');

// não só cada objeto tem as propriedades da classe base,
// como também tem as funcionalidades que cada classe implementa.
// Portanto:

echo $cao->ladrar(10);
echo '<br>';
echo $gato->miar(10);

/* 
Observa que, na classe Animal_de_estimação, as propriedades
foram definidas com o access modifier PROTECTED.
Já tinha referido que no caso do PROTECTED, a propriedade ou método
pode ser acedida dentro da classe e dentro de classes derivadas dela.
*/



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->