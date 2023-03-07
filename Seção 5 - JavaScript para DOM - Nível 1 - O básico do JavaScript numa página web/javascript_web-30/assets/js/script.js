/* ======= Exemplos com query Selector ======= */

/*
document.querySelector();
document.querySelectorAll();
*/

// EXEMPLOS DE SELETORES E RESPETIVOS RESULTADOS

let el = null

// Seletores mais básicos

// universal selector - *
// -----------------------------------------
// buscar o primeiro elemento do documento
el = document.querySelector('*')

// buscar todos os elementos do documento
el = document.querySelectorAll('*')

// type seletor - p / div / h1 ...
// -----------------------------------------
// buscar o primeiro parágrafo de um documento
el = document.querySelector('p')

// buscar todos os parágrafos de um documento
el = document.querySelectorAll('p')

// class selector - .texto
// -----------------------------------------
// buscar o primeiro elemento que contém a classe "texto" no atributo class
el.document.querySelector('.texto')

// buscar todos os elementos que contêm a classe "texto" no atributo class
el.document.querySelectorAll('.texto')

// id selector - #
// -----------------------------------------
// buscar o elemento que tem o id indicado
el = document.querySelector('#texto')

// uma vez que o id é único, não faz sentido usar o querySelectAll()

// attribute seletor - [attribute]
// -----------------------------------------
// IMPORTANTE:
// querySelector - vai buscar o primeiro elemento
// querySelectorAll - vai buscar a coleção de todas as ocorrências

// todos os elementos que contêm o atributo NAME
el = document.querySelectorAll('[name]')

// todos os elementos parágrafo que contêm o atributo NAME
el = document.querySelectorAll('p[name]')

// todos os elementos que contêm o atributo NAME e cujo value seja TEXTO
el = document.querySelectorAll('[name="texto"]')

// todos os elementos que contêm o atributo class e cujo value tem
// várias palavras separadas por espaços e uma delas é "letra"
el = document.querySelectorAll('[class~="letra"]')

// todos os elementos cujo atributo class tem um value que começa 
// por uma determinada palavra
el = document.querySelectorAll('[class^="color"]')

// todos os elementos cujo atributo class tem um value que termina
// com a expressão "size" 
el = document.querySelectorAll('[class$="size"]')

// todos os elementos cujo atributo class tem a palavra TEXT pelo menos
// uma vez
el = document.querySelectorAll('[class*="text"]')

// podemos agrupar seletores - vai buscar todos os div, p e h1
el = document.querySelectorAll('div, p, h1')

// ou vamos buscar os descendentes...
el = document.querySelectorAll("div ul li")

// ou ainda os descentendes diretos
el = document.querySelectorAll("div > h3")

// e poderíamos exemplificar muitos mais...

// resumo: todos os seletores de CSS são válidos
// no querySelector() e no querySelectorAll()
















/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    07/03/2023
*/
