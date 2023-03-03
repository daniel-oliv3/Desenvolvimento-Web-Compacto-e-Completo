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





































