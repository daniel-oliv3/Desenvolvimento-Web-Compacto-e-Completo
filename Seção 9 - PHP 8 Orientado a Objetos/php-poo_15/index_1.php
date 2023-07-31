<?php

// COMO USAR NAMESPACES E QUAL A SUA UTILIDADE

/*
O conceito de Namespaces é muito importante na programação
orientada a objetos.

Permitem resolver dois problemas:
- Organizar melhor as classes permitindo agrupá-las num "espaço"
- Permitem que existam dentro do mesmo projeto classes com o mesmo nome.
  mas em namespaces diferentes.

Por exemplo, podes ter uma classe que definiste no teu código e
juntar ao teu projeto uma outra classe criada por outro programador.
Verifica que, afinal, ambas as classes têm o mesmo nome.
Não necessitas alterar o nome das classes. Basta que estejam em
namespaces diferentes e tens o problema resolvido.

Usar namespaces dentro dos projetos de média e larga escala, é uma
forma de manter o código mais bem organizado.
*/

// a expressão NAMESPACE deve ser sempre a primeira declaração no topo do script
namespace classes_principais;

// vamos criar uma classe dentro deste namespace
class Matematica
{
    public function adicionar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }
}







?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/07/2023
-->