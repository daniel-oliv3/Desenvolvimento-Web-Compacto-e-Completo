##
### Seção 9 - PHP 8 Orientado a Objetos
##


<p align="center">
  <img alt="...." src="../Se%C3%A7%C3%A3o%209%20-%20PHP%208%20Orientado%20a%20Objetos/assets/PHP-logo.svg.png" width="70%">
</p>














### 342 - Introdução Ao Módulo


**O que é PHP OOP?**

OOP - Object Oriented Programming (POO)
- Neste módulo vamos falor sobre PHP orientado a objetos, algo que já existe desde o PHP 5.x


**Programação Procedural**

- Esceita de procedimentos e funções que manipulam dados

**Programação Oriendada a Objetos**

- Classes e objetos que contêm propriedades e métodos


**Quais as Vantagens da Programação Oriendada a Objetos**

- É mais rápida e simples de executar
- Permite criar uma estrutura mais limpa e modelar
- Ajuda a manter o código PHP reutilizável com mais facilidade
- é uma forma mais moderna de organizar o nosso código
- Pode conviver pacificamente com código procedural


**Principais aspectos da Programação Orientada a Objetos?**


**Classes**

- Bloco de código que server de modelo para criar objetos.
- Pode ter propriedades e métodos


**Objetos**

- São instâncias de uma classe. Quando são criados, cada objeto vai conter as propriedades e métodos da classe
- Cada objeto terá uma vida própria


**O PHP já contém várias estruturas que tiram partido da programação orientada a objetos**


- Exemplo
  - php-poo_01



### 343 - Classes & Objetos

**Instanciação Básica**

<p align="center">
  <img alt="...." src="../Se%C3%A7%C3%A3o%209%20-%20PHP%208%20Orientado%20a%20Objetos/assets/poo.jpg" width="70%">
</p>



<p align="center">
  <img alt="...." src="../Se%C3%A7%C3%A3o%209%20-%20PHP%208%20Orientado%20a%20Objetos/assets/objeto-cria.jpg" width="70%">
</p>


**Hereditariedade**


<p align="center">
  <img alt="...." src="../Se%C3%A7%C3%A3o%209%20-%20PHP%208%20Orientado%20a%20Objetos/assets/ed.jpg" width="70%">
</p>



- Exemplo
  - php-poo_02





### 344 - Como Escrever uma Classes & Instanciar um Objeto

- Exemplo
  - php-poo_03


### 345 - Access Modifiers

- Exemplo
  - php-poo_04


### 346 - Constructor

- Exemplo
  - php-poo_05


### 347 - Destructor

- Exemplo
  - php-poo_06



### 348 - Hereditariedade


- Exemplo
  - php-poo_07


### 349 - Sobreposição De Métodos Herdados

- Exemplo
  - php-poo_08



### 350 - Impedir Herança de Classe ou Método

- Exemplo
  - php-poo_09


### 351 - Classes Abstratas

- Exemplo
  - php-poo_10


### 352 - Criação de Classes a Partir de Interfaces

- Exemplo
  - php-poo_11


### 353 - O que são Traits & como Utilizar

- Exemplo
  - php-poo_12



### 354 - Métodos Estáticos


- Exemplo
  - php-poo_13



### 355 - Propriedades Estáticas


- Exemplo
  - php-poo_14


### 356 - Como usar Namespaces & qual a sua Utilidade


- Exemplo
  - php-poo_15


### 357 - Principais Conceitos de POO em Resumo


*Já vimos os principais conceitos de POO*

**Abstração**

As classes disponibilizam métodos e propriedades simples de usar mais que podem esconder elevada complexidade nos bastidores.
Sabemos todos ligar uma TV, mas não temos que saber o que acontece no interior do equipamento para que possamos ligar e desligar


**Encapsulamento**

A criação de propriedades privadas cujos valores só então acessiveis através de métodos que vão permitir controlar / validar o valor dessas variáveis.
É uma barreira de proteção para os dados.


**Hereditariedade**

A possibilidade de criar estruturas de classes que dirivam umas das outras, permitindo reaproveitamento de código ao máximo nível e consistência.



**Polimorfismo**

A possibilidade de criar classes com diferentes funcionalidades a partir de interfaces,.
A implementação de um método definido num interface pode ser uma, na classe A, e outra na classe B.
Em outras linguagens de programação, o conceito abrange outras situações relacionadas com *overriding* e *overloading*


- IMPORTANTE:

Entender como escrever código organizado por classes e objetos, é imperativo para qualquer programador moderno.
O PHP, tal como outras linguagens de programação, já contém no seu *core* um coinjunto vasto de classes que podemos usar nas nossas aplicações.


- Sem Projeto

- Exemplo
  - php-poo_16





### 358 - Exercício 1

```php
/*
Este é um pequeno exemplo de como a POO permite tornar o nosso código
mais bem organizado, mais profissional, mais estruturado.

1. Criar uma classe (class_numero)
2. A classe deverá ter uma propriedade privada número
3. O construtor da classe serve para definir o número
4. O método get_numero() serve para devolver o número
5. O método par_ou_impar() deverá devolver 'par' ou 'impar'após analisar o número
6. O método tabuada() deverá devolver um array com a tabuada do número até 10.
    Exmplo: 3 x 1 = 3
            3 x 2 = 6
            3 x 3 = 9
            ...
7. O método raiz_quadrada() deverá devolver a raz quadrada do número
8. Neste script deveremos importar a classe, criar 4 objetos a partir dela
com os valores 5, 7, 16 e 123.
Para cada uma dessas instâncias, deveremos apresentar:
    a) O número através de get_numero()
    b) Se é par ou impar
    c) A raiz quadrada do número
    d) A tabuada
*/
```

- Exemplo
  - php-poo_17































