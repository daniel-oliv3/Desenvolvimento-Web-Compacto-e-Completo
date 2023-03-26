##
### Seção 7 - Bootstrap 5 Completo
##

<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/bootstrap.jpg" width="40%">
</p>


**Bootstrap 5**

- Bootstrap
    - Site: https://getbootstrap.com/


### 191 - Introdução ao Módulo


- Com o **Bootstrap**, o teu trabalho de escrita de **CSS** fica muito mais fácil

**O que é o Bootstrap?**

- O Bootstrap é uma biblioteca de CSS, de código aberto e livre utilização, que podes acrescentar aos teus projetos web para agilizar o teu processo de desenvolvimento


**Algumas vantagens no uso do Bootstrap**

- É fácil de usar
- Muito simples de adicionar a qualquer projeto web
- Permite poupar tempo no desenvolvimento
- Tem classes praticamente para todo o tipo de elementos
- Podes usar com bibliotecas e *frameworks* de *JavaScript*
- Contém muitos componentes prontos para usar
- Extensa comunidade de utilizadores
- É completamente customizável
- Não tens que saber tudo para usar nos teus projetos


**Como vamos desenvolver este módulo?**

- Não vamos estudar tudo de forma detalhada
- Tem uma documentaação excelente
- Compreender os conceitos fundamentais da biblioteca
- Como estruturar a tua página com o sistema de **grid**
- Explorar as classes mais úteis: tabelas, formulários, etc...
- Saber usar alguns componentes: slideshow, dropdowns, etc...
- Como criar a nossa versão do **Bootstrap**




- Sem projeto
- Exemplo
    - bootstrap_web-01




### 192 - Visitar ao Site do Bootstrap

**Bootstrap**

- Bootstrap
    - Site: https://getbootstrap.com/
    - All Versions: https://getbootstrap.com/docs/versions/


- Sem projeto
- Exemplo
    - bootstrap_web-02



### 193 - Exemplo Muito Simples de Página com Bootstrap

**Bootstrap**

- CSS only
    - src: https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css
- JavaScript Bundle with Popper
    - src: https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js

- Exemplo
    - bootstrap_web-03



### 194 - Adicionar o Bootstrap Via CDN


**Bootstrap**

- Bootstrap
    - Site: https://getbootstrap.com/

```html
<!-- CSS only -->
<!-- Header  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- /Header  -->
```


```html
<!-- JavaScript Bundle with Popper -->
<!-- Body  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- /Body  -->
```

- Exemplo
    - bootstrap_web-04




### 195 - Adicionar o Bootstrap Fazendo Downloads dos Ficheiros


**Bootstrap**

- Bootstrap
    - Site: https://getbootstrap.com/docs/5.3/getting-started/download/


- Exemplo
    - bootstrap_web-05


### 196 - Solução para os Warnings dos Ficheiros Map


- 1 Solução
    - Adicionar o arquivo `bootstrap.min.css.map` na pasta `bootstrap` do projeto
    - Adicionar o arquivo `bootstrap.bundle.min.js.map` na pasta `bootstrap` do projeto

- 2 Solução. (Utilizando a segunda solução)
    - Apagar o bloco de comentário do arquivo `bootstrap.min.css`
    - Apagar o bloco de comentário do arquivo `bootstrap.bundle.min.js`


- bootstrap.min.css    
```js
/*# sourceMappingURL=bootstrap.min.css.map */
```

- bootstrap.bundle.min.js
```js

//# sourceMappingURL=bootstrap.bundle.min.js.map
```

- Exemplo
    - bootstrap_web-06




### 197 - Entendendo o que são Breakpoints

**O que é um Breakpoint?**

- Um **breakpoint** é um valor de largura que determina como o layout se vai aadaptar em diferentes dispositivos

<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/breakpoints.jpg" width="50%">
</p>

**Breakpoints do Bootstrap 5**

<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/breakpoints-bootstrap5.jpg" width="50%">
</p>


- Sem projeto `Modelo Básico Bootstrap`
- Exemplo
    - bootstrap_web-07































