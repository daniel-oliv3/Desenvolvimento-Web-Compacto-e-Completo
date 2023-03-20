##
### Seção 6 - Exercícios de JavaScript
##


### 179 - Introdução ao Módulo

**Qual é o objetivo deste módulo?**

- Vai ser um módulo dinâmico com exercícios de JavaScript
- Começa com exercícios simples e aumenta a complexidade
- Principal objetivo: aprender a resolver desafios com JS
- Este módulo vai crescer regularmente no seu conteúdo
- Vamos entender como funciona na prática



- Exemplo
    - exercicio_javascript-01




### 180 - Exercício 001 - Contador


**Exercício - 001**

```js
/* ----------------------------------------------------------------------------

Exercício: 001
Enunciado: CONTADOR
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento. Ao clicar em cada
    um dos botões, o utilizador irá aumentar ou diminuir o valor em uma unidade.

---------------------------------------------------------------------------- */


let valor = 0;

const h1_valor = document.querySelector("#valor");


document.querySelector("#btn_decremento").addEventListener('click', () => {
    h1_valor.textContent = --valor;
});


document.querySelector("#btn_incremento").addEventListener('click', () => {
    h1_valor.textContent = ++valor;
});
```

- Exemplo
    - exercicio_javascript-02






### 181 - Exercício 002 - Contador Com Intervalo de Valores

```js
/* ----------------------------------------------------------------------------

Exercício: 003
Enunciado: CONTADOR COM CORES PARA NEGATIVOS, ZERO E POSITIVOS
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    No caso do valor ser zero o texto deve ser branco.
    No caso do valor ser negativo o texto deve ser vermelho puro.
    No caso do valor ser positivo o texto deve ser verde puro.

---------------------------------------------------------------------------- */
```


- Exemplo
    - exercicio_javascript-03