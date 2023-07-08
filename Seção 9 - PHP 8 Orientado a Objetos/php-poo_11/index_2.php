<?php

// CRIAÇÃO DE CLASSES A PARTIR DE INTERFACES

/*
Pegando no exemplo anterior, o interface Animal
declara a função vocalizar. Cada animal tem uma forma diferente
de vocalizar. Então podemos ter o seguinte:
*/

interface Animal {
    public function vocalizar();
}

class Cao implements Animal {
    public function vocalizar()
    {
        echo "Ladrar...";
    }
}

class Gato implements Animal {
    public function vocalizar()
    {
        echo "Miar...";
    }
}

class Lobo implements Animal {
    public function vocalizar()
    {
        echo "Uivar...";
    }
}

$cao = new Cao();
$cao->vocalizar();
echo '<br>';
$gato = new Gato();
$gato->vocalizar();
echo '<br>';
$lobo = new Lobo();
$lobo->vocalizar();

/* 
Em forma de conclusão, enquanto as classes são modelos para a
criação de objetos, os interfaces podem ser usados como modelos
para a criação de classes. Funcionam como um contrato no qual o
programador, para implementar uma determinada classe, compromete-se
a desenvolver essa classe a partir de um interface, logo, mantendo
a estrutura de métodos que esse interface declara, independentemente
da implementação de código que esses métodos depois vão ter dentro
da classe.
IMPORTANTE: Estes conceitos são centrais no âmbito da programação
orientada a objetos, mas isso não quer dizer que tens que os aplicar
em todos os teus projetos.
Aliás, na maior parte dos casos, estes conceitos são aplicados no
desenvolvimento de frameworks que depois tu vais aproveitar para
construir as tuas aplicações.
*/





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    08/07/2023
-->