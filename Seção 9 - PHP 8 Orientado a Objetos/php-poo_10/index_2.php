<?php

// CLASSES ABSTRATAS

/* 
Ao herdar de uma classe abstracta, o método da classe filha
deve ser definido com o mesmo nome, e um access modifier com restrição
igual ou menor. 

Por exemplo, se o método abstracto for definido como protected, 
o método da classe filha deve ser definido como protected ou public.
Não pode ser privado.

Além disso, o tipo e o número de argumentos exigidos devem ser os mesmos.
No entanto, as classes filhas podem ter argumentos opcionais.

Assim, quando uma classe filha é herdada de uma classe abstracta, temos as seguintes regras:

> O método da classe filha deve ser definido com o mesmo nome;
> O método da classe filha deve ser definido com o mesmo access modifier ou outro menos restrito;
> O número de argumentos necessários deve ser o mesmo. 
  No entanto, a classe filha pode ter argumentos opcionais adicionais
*/

abstract class Pessoa
{
    abstract public function falar($mensagem);
}

class Cliente extends Pessoa
{
    public function falar($mensagem, $autor = 'joao')
    {
        echo "$mensagem - $autor";
    }
}

$cliente = new Cliente();
$cliente->falar('mensagem de teste', 'carlos');

// IMPORTANTE: a assinatura do método em Cliente, tem que ser igual à
// assinatura do método na class abstrata. Contudo, ao adicionar um parâmetro
// opcional, podemos passar informação adicional para o interior da função.



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    07/07/2023
-->