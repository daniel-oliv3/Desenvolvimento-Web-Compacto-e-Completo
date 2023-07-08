<?php

// CRIAÇÃO DE CLASSES A PARTIR DE INTERFACES

/*
Em programação orientada a objetos, o conceito de Interfaces
é semelhante ao de uma classe abstrata. Vamos ver as diferenças.

Interfaces permitem especificar métodos que as classes vão ter que
implementar nas suas estruturas.

Quando várias classes têm que implementar um conjunto de métodos
semelhantes, estamos a entrar num conceito muito importante da
programação orientada a objetos que é o Polimorfismo.

Vejamos um exemplo de um interface
*/

interface Animal {
    public function vocalizar($vezes);
    public function identificar();
    public function executar_movimento($direção);
}

/* 
principais diferenças entre interfaces e classes abstratas:

    > Os interfaces não podem conter propriedades. 
      As classes abstratas podem.
    > Todos os métodos dos interfaces são public.
      Nas classes abstratas, são public ou protected
    > Todos os métodos dos interfaces são abstratos por natureza.
      Não podem ter implementação dentro do interface.
      O uso do termo abstract não é necessário. Está implícito.
    > As classes podem implementar um interface e herdar de outra classe
      ao mesmo tempo.
*/

class Cao implements Animal {
    public function vocalizar($vezes)
    {
        // ...
    }

    public function identificar()
    {
        // ...
    }

    public function executar_movimento($direção)
    {
        // ...
    }
}

$cao = new Cao();
$cao->vocalizar(3);
$cao->identificar();
$cao->executar_movimento("para cima");




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    08/07/2023
-->