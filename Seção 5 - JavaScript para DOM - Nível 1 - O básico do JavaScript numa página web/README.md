##
### Seção 5 - JavaScript para DOM - Nível 1 - O básico do JavaScript numa página web
##

- Módulo
    - JavaScript na DOM 1

##
### 132 - Introdução ao Módulo
##

**Introdução ao Módulo**

**Javascript na DOM**


**O que é o JavaScript?**

- A mais popular linguagem de programação de scripts para execução do lado do cliente
- Criada para adicionar interatividade e dinamismo ao HTML
- JavaScript = ECMA Script

**O que vamos aprender neste módulo?**

- Os fundamentos do JavaScript de um modo geral
- Como usar o JavaScript dentro do nosso HTML
- Vamos aprender JavaScript em ambiente de browser


<p align="center">
  <img alt="...." src="../Seção 5 - JavaScript para DOM - Nível 1 - O básico do JavaScript numa página web/assets/frameworks-js.jpg" width="60%">
</p>

**O que podemos fazer com o JavaScript**

- Alterar o conteúdo dos elementos HTML
- Modificar conteúdo de uma página web
- Alterar os estilos e posicionamento dos elementos na página
- Reagir a determinados eventos, como um clique num botão
- Executar transições e animações
- Validar a submissão de formulários
- Emuito mais...

**Como vamos estudar o JavaScript?**

- Como se escrevem scripts de JavaScript
- Como inserir JavaScript no HTML
- Como ver os resultados pretendidos
- Perceber os conceitos fundamentais da linguagem
- Usar o JavaScript para acrescentar interatividade nos projetos


**IMPORTANTE**


- A maior parte dos conceitos deste módulo são importantes para aprender a usar bibliotecas como o React, Vue, Angular e outros.


- Sem projeto
- Exemplo
    - javascript_web-01



##
### 133 - Requisitos Necessários
##


**Requisitos fundamentais**

- Conhecimento sólido de **HTML5** e **CSS3**
- Editor de código **Visual Studio Code** (+ Extensão Live Server)
- Browser Google Chrome (+ ferramentas do programador)


- Sem projeto
- Exemplo
    - javascript_web-02


##
### 134 - Como Adicionar JavaScript ao HTML
##


**Como Adicionar JavaScript ao HTML?**

- Dentro de uma tag `<script>` de HTML
- Importação de ficheiros externos para o HTML
- Menos comum: adicionar código diretamente nos atributos


- Exemplo
    - javascript_web-03



##
### 135 - A Sintaxe do JavaScript
##

**A Sintaxe do JavaScript**

- Exemplo
    - javascript_web-04


##
### 136 - Comentários em JavaScript
##

**Comentários em JavaScript**

- Exemplo
    - javascript_web-05



##
### 137 - Variáveis em JavaScript
##

**Variáveis em JavaScript**

**Regras para criação de uma variável**

- Os nomes devem começar sempre por uma letra, um underscore ou um dollar sign
- Os nomes nunca podem começar por um número
- Os nomes só podem conter letras maiúsculas, minúsculas, o underscore e algarismos
- O nome de uma variável nuca pode conter espaços
- O nome não pode ser igual a uma palavra reservada do JavaScript

- Exemplo
    - javascript_web-06


##
### 138 - Apresentando Resultados no Browser
##

**Apresentando Resultados no Browser**

- Exemplo
    - javascript_web-07


##
### 139 - Tipos de Dados
##

**JavaScript Data Types**

- Exemplo
    - javascript_web-08


##
### 140 - O Problema das Variáveis no JavaScript
##

**O Problema das Variáveis no JavaScript**

- Exemplo
    - javascript_web-09


##
### 141 - Operadores em JavaScript
##

**Operadores em JavaScript**

- Exemplo
    - javascript_web-10


##
### 142 - Strings
##

**Strings**

- Exemplo
    - javascript_web-11


##
### 143 - Instruções Condicinal If, Else if, Else
##

**Instruções Condicinal If, Else if, Else**

- Exemplo
    - javascript_web-12


##
### 144 - Operadores de Comparação & Operadores Lógicos
##

**Operadores de Comparação & Operadores Lógicos**

- OPERADORES DE COMPARAÇÃO

```css
/*
OPERADORES DE COMPARAÇÃO
--------------------------------
A == B      Se o valor A é igual ao valor B
A === B     Se o valor e o tipo de dados de A é igual ao valor e tipo de dados de B 
A != B      Se o valor de A não é igual ao de B
A !== B     Se o valor ou o tipo de dados de A é diferente do valor ou do tipo de dados de B
A < B       Se A é menor que B
A > B       Se A é maior que B
A <= B      Se A é menor ou igual a B
A >= B      Se A é maior ou igual a B
*/
```

- OPERADORES LÓGICOS

```css
/*
OPERADORES LÓGICOS
--------------------------------
Condição A && Condição B        Verdadeiro se ambas verdadeiras
Condição A || Condição B        Verdadeiro se uma for verdadeira
!Condição A     
*/
```


- Exemplo
    - javascript_web-13



##
### 145 - Operador Ternário
##

**Operador Ternário**

- Exemplo
    - javascript_web-14


##
### 146 - Estrutura Switch Case
##

**Estrutura Switch Case**

- Exemplo
    - javascript_web-15


##
### 147 - Arrays
##

**Arrays**

- Exemplo
    - javascript_web-16



##
### 148 - Métodos para Operar com Arrays - Parte 1
##

**Métodos para Operar com Arrays**

```js
// -------------------------------
// alterar dados de um array
// -------------------------------
 nomes[1] = "maria";
 console.table(nomes);

// -------------------------------
// quantos elementos tem um array
// -------------------------------
 console.log(nomes.length);

// -------------------------------
// adicionar mais elementos no final do array
// -------------------------------
 nomes.push("joaquim");
 console.table(nomes);

// -------------------------------
// adicionar elementos no início do array
// -------------------------------
 nomes.unshift("josé");
 console.table(nomes);

// -------------------------------
// remover elemento do início
// -------------------------------
 nomes.shift();
 console.table(nomes);

// -------------------------------
// remover elemento do fim
// -------------------------------
 nomes.pop();
 console.table(nomes);

// -------------------------------
// remover elementos permite guardar o valor removido numa variável
// -------------------------------
 let removido = nomes.pop();
 console.log(removido);
 console.table(nomes);

// -------------------------------
// remover e/ou adicionar elementos em qualquer posição dentro do array
// -------------------------------
 console.table(nomes);
 nomes.splice(1,2,"joaquim", "manuel", "rui");
 console.table(nomes);


// -------------------------------
// ver eliminados
// -------------------------------
 console.table(nomes);
 let eliminados = nomes.splice(1,2,"joaquim", "manuel", "rui");
 console.table(nomes);
 console.table(eliminados);
```


- Exemplo
    - javascript_web-17



##
### 149 - Métodos para Operar com Arrays - Parte 2
##

**Métodos para Operar com Arrays**

```js
// -------------------------------
// extrair partes de um array (retorna um novo array)
// -------------------------------
 console.table(nomes);
 let nomes_extraidos = nomes.slice(0,2);
 console.table(nomes_extraidos);

// -------------------------------
// juntar dois arrays
// -------------------------------
 console.table(nomes);
 let outros_nomes = ["joaquim", "carla", "manuel"];
 nomes = nomes.concat(outros_nomes);
 console.table(nomes);

// -------------------------------
// procurar item num array
// -------------------------------
 console.log(nomes.includes("carlos"));

// -------------------------------
// procurar posição de item num array
// -------------------------------
 console.table(nomes);
 console.log(nomes.indexOf("ana"));

// -------------------------------
// converter um array numa string
// -------------------------------
 let todos_os_nomes = nomes.join("-");
 console.log(todos_os_nomes);
```

- **IMPORTANTE**: outros métodos envolvem funções e metodologias mais avançadas ...

- Exemplo
    - javascript_web-18



##
### 150 - Como Ordenar Arrays
##

**Como Ordenar Arrays**

```js
// -------------------------------
// ordenar um array de forma ascendente - IMPORTANTE: altera a estrutura do array
// -------------------------------
 nomes.sort();
 console.table(nomes);

// -------------------------------
// ordenar um array de forma descendente
// -------------------------------
 nomes.sort();
 nomes.reverse();
 console.table(nomes);

// -------------------------------
// sintaxe alternativa
// -------------------------------
 nomes.sort().reverse();
 console.table(nomes);

// -------------------------------
// ou ainda
// -------------------------------
 console.table(nomes.sort().reverse());

// -------------------------------
// também funciona para arrays numéricos, mas ...
// -------------------------------
 let valores = [1,30,20,50,56,45];
 valores.sort();
 console.table(valores);
 valores.reverse();
 console.table(valores);

 let valores = [1,30,20,100,50,56,45];
 valores.sort();
 console.table(valores);
 valores.reverse();
 console.table(valores);

```

- Existem formas de fazer a ordenação correta, mas envolvem funções.


- Exemplo
    - javascript_web-19


##
### 151 - Ciclos, Loops, Iterações
##

**Ciclos, Loops, Iterações**

- Exemplo
    - javascript_web-20


##
### 152 - Funções
##

**Funções**

- Exemplo
    - javascript_web-21



##
### 153 - Function Expressions e Arrow Functions
##

**Function Expressions e Arrow Functions**

- Exemplo
    - javascript_web-22



##
### 154 - Escopo de Variáveis
##

**Escopo de Variáveis**

- Exemplo
    - javascript_web-23


##
### 155 - Objetos
##

**Objetos**

- Exemplo
    - javascript_web-24


##
### 156 - O Document Object Model
##

**O Document Object Model**

**O que  vimos ate agora ?**

- Fundamentos básicos do JavaScript
- Foi uma introdução geral a linguagem
- Estamos preparados para ver o JavaScript no contexto web

**O que é o DOM?**

- Document Object Model
- Estrutura e conteúdo do HTML
- Manupular documentos HTML

<p align="center">
  <img alt="...." src="../Seção 5 - JavaScript para DOM - Nível 1 - O básico do JavaScript numa página web/assets/dom.jpg" width="60%">
</p>


- Sem projeto
- `Modelo HTML CSS JS` `v1` `v2`
- Exemplo
    - javascript_web-25


##
### 157 - Introdução a Navegação na DOM
##


**Introdução a Navegação na DOM**

- Exemplo
    - javascript_web-26



##
### 158 - Método getElementById
##


**Método getElementById**

- Exemplo
    - javascript_web-27


##
### 159 - Outros Métodos Get Elements
##


**Outros Métodos Get Elements**

- Exemplo
    - javascript_web-28



##
### 160 - Introdução ao querySelector & querySelectorAll
##


**Introdução ao querySelector & querySelectorAll**

- Exemplo
    - javascript_web-29



##
### 161 - Exemplos com query Selector
##


**Exemplos com query Selector**

```js
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
```

- Exemplo
    - javascript_web-30




##
### 163 - Adicionar & Remover Classes de CSS nos Elementos
##


**Adicionar & Remover Classes de CSS nos Elementos**

- Exemplo
    - javascript_web-32


##
### 164 - Manipular Atributos dos Elementos
##


**Manipular Atributos dos Elementos**

- Exemplo
    - javascript_web-33



##
### 165 - Adicionar elementos ao DOM
##


**Adicionar elementos ao DOM**

```js
// CRIAR E REMOVER ELEMENTOS HTML

// -----------------------------------------
// podemos criar elementos com o método document.createElement()
// nota: estes elementos não são automaticamente adicionados ao DOM
// -----------------------------------------


// // --------------------
let novo_elemento = document.createElement('p');
novo_elemento.innerText = 'Texto do parágrafo';

// // adicionar ao body
document.body.appendChild(novo_elemento);


// // --------------------
// // adicionar conteúdo de texto sem tag
var conteudo_de_texto = document.createTextNode("Este é um conteúdo de texto sem tag");
document.body.appendChild(conteudo_de_texto);


// // --------------------
// // adicionar o parágrafo a um dos divs
let div = document.querySelector('#elemento_1');
div.appendChild(novo_elemento);


// // --------------------
// // criar um novo div e adicionar o novo parágrafo
let novo_div = document.createElement('div');
novo_div.classList.add('elemento');
novo_div.setAttribute('id', 'elemento_4');


let titulo = document.createElement('h1');
titulo.textContent = 'Título do elemento 4';
novo_div.appendChild(titulo);
document.body.appendChild(novo_div);


/*script2.js*/

// CRIAR E REMOVER ELEMENTOS HTML

let div1 = document.querySelector("#elemento_2");
let novo_paragrafo1 = document.createElement('p').textContent = "Texto do novo parágrafo 1";

// // --------------------------
// // adicionar elemento antes
div1.before(novo_paragrafo1);


// // --------------------------
// // adicionar no início do elemento
div1.prepend(novo_paragrafo1);


// // --------------------------
// // adicionar no fim do elemento
div1.append(novo_paragrafo1);


// // --------------------------
// // adicionar depois do elemento
div1.after(novo_paragrafo1);



// // --------------------------
let div2 = document.querySelector("#elemento_3");
let novo_paragrafo2 = document.createElement('p').textContent = "Texto do novo parágrafo 2";
div2.insertAdjacentHTML('beforebegin', novo_paragrafo2);
div2.insertAdjacentHTML('afterbegin', novo_paragrafo2);
div2.insertAdjacentHTML('beforeend', novo_paragrafo2);
div2.insertAdjacentHTML('afterend', novo_paragrafo2);



// // REMOVER ELEMENTOS DO HTML

// // remover o elemento
let e = document.querySelector("#elemento_1");
e.remove();



// IMPORTANTE:
// Existem vários outros métodos para adicionar e remover elementos no DOM.
// Nesta abordagem, ficas já com uma perspetiva geral de alguns métodos para o fazer.

```

- Exemplo
    - javascript_web-34





##
### 166 - Event Handlers
##


**Event Handlers**


- Group similar menssages in cosole

- Exemplo
    - javascript_web-35






##
### 167 - Introdução aos Event Listeners
##


**Introdução aos Event Listeners**


- Exemplo
    - javascript_web-36





##
### 168 - Exercícios com Event Listeners - Remover Event Listeners
##


**Exercícios com Event Listeners - Remover Event Listeners**

```js
/* 
OBJETIVO:
Ao clicar no botão, alterar a cor de fundo da caixa para aquamarine,
apresentar o texto 'clique' na consola e
remover o evento click do botão
*/
```


- Exemplo
    - javascript_web-37





##
### 169 - Exercícios com Event Listeners - Event Propagation
##


**Exercícios com Event Listeners - Event Propagation**

```js
/* 
OBJETIVO:
Adicionar 3 eventos click, um para cada elemento dentro do body 
cada um vai apresentar um texto único na consola
e fazer com que sejam independentes uns dos outros.
(Propagation)
*/
```

- Exemplo
    - javascript_web-38




##
### 170 - Exercícios com Event Listeners -  O mesmo Event Listeners para três Elementos
##


**Exercícios com Event Listeners -  O mesmo Event Listeners para três Elementos**

```js
/* 
OBJETIVO:
O mesmo exercício anterior, mas com unificação da instrução
para os 3 elementos e sem propagação de eventos.
*/
```

- Exemplo
    - javascript_web-39






























































































































