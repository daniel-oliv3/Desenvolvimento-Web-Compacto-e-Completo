##
### Seção 7 - Bootstrap 5 Completo
##

<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/bootstrap.jpg" width="40%">
</p>


**Bootstrap 5**

- Bootstrap
    - Site: https://getbootstrap.com/


### 210 - Introdução ao Módulo


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




### 211 - Visitar ao Site do Bootstrap

**Bootstrap**

- Bootstrap
    - Site: https://getbootstrap.com/
    - All Versions: https://getbootstrap.com/docs/versions/


- Sem projeto
- Exemplo
    - bootstrap_web-02



### 212 - Exemplo Muito Simples de Página com Bootstrap

**Bootstrap**

- CSS only
    - src: https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css
- JavaScript Bundle with Popper
    - src: https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js

- Exemplo
    - bootstrap_web-03



### 213 - Adicionar o Bootstrap Via CDN


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




### 214 - Adicionar o Bootstrap Fazendo Downloads dos Ficheiros


**Bootstrap**

- Bootstrap
    - Site: https://getbootstrap.com/docs/5.3/getting-started/download/


- Exemplo
    - bootstrap_web-05


### 215 - Solução para os Warnings dos Ficheiros Map


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




### 216 - Entendendo o que são Breakpoints

**O que é um Breakpoint?**

- Um **breakpoint** é um valor de largura que determina como o layout se vai adaptar em diferentes dispositivos

<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/breakpoints.jpg" width="70%">
</p>

**Breakpoints do Bootstrap 5**

<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/breakpoints-bootstrap5.jpg" width="100%">
</p>


- Sem projeto `Modelo Bootstrap`
- Exemplo
    - bootstrap_web-07





### 217 - Containers, Rows e Columns



- Containers
    - Site: https://getbootstrap.com/docs/5.3/layout/containers/


**Emmet abbreviation**
- Teclas de atalho VSCode

- Exemplo 1
```html
<!-- comando/atalho

    .container>.row>.col

-->

<!-- Resultado -->
    <div class="container">
        <div class="row">
            <div class="col"></div>
        </div>
    </div>
```


- Projeto `Base` via CDN ...
- Exemplo
    - bootstrap_web-08












### 218 - Columns com Sufixos


**Emmet abbreviation**
- Teclas de atalho VSCode

- Exemplo 2
```html
<!-- comando/atalho

    .container>.row>(.col)*3

-->

<!-- Resultado -->
    <div class="container">
            <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
```


- Exemplo
    - bootstrap_web-09




### 219 - Colunas Responsivas


**Emmet abbreviation**
- Teclas de atalho VSCode

- Exemplo 3
```html
<!-- comando/atalho

    .container>.row>(.col)*2

-->

<!-- Resultado -->
    <div class="container">
            <div class="row">
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
```


**Emmet abbreviation**
- Teclas de atalho VSCode

- Exemplo 4
```html
<!-- comando/atalho

    .container>.row>.container>.row>(.col>h1)*4

-->

<!-- Resultado -->
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col"><h1></h1></div>
                    <div class="col"><h1></h1></div>
                    <div class="col"><h1></h1></div>
                    <div class="col"><h1></h1></div>
                </div>
            </div>
        </div>
    </div>
```


- Exemplo
    - bootstrap_web-10




### 220 - Exercício Prático

<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/exercicio01.jpg" width="80%">
</p>

- Exemplo
    - bootstrap_web-11



### 221 - Definir Número de Colunas com Row-Cols

**Emmet abbreviation**
- Teclas de atalho VSCode

- Exemplo 5
```html
<!-- comando/atalho

    .container>.row>.col>h1

-->

<!-- Resultado -->
    <div class="container">
        <div class="row">
            <div class="col"><h1></h1></div>
        </div>
    </div>
```

- Exemplo
    - bootstrap_web-12




### 222 - Aninhamento de Rows dentro de Cols 


<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/013a.jpg" width="80%">
</p>


**Emmet abbreviation**
- Teclas de atalho VSCode

- Exemplo 6
```html
<!-- comando/atalho

    .container>.row>(.col>h1)*2

-->

<!-- Resultado -->
    <div class="container">
        <div class="row">
            <div class="col"><h1></h1></div>
            <div class="col"><h1></h1></div>
        </div>
    </div> 
```

- Exemplo
    - bootstrap_web-13







### 223 - Column Offsets


<p align="center">
  <img alt="...." src="../Seção 7 - Bootstrap 5 Completo/assets/014a.jpg" width="80%">
</p>


- Exemplo
    - bootstrap_web-14




### 224 - Alinhamento Horizontal de Columns




- Exemplo
    - bootstrap_web-15





### 225 - Alinhamento Vertical de Columns




- Exemplo
    - bootstrap_web-16




### 226 - Alterar a Ordem das Columns




- Exemplo
    - bootstrap_web-17




### 227 - Definir Alinhamento Vertical das Columns Individualmente




- Exemplo
    - bootstrap_web-18




### 228 - Introdução as Classes de Espaçamento - Margin e Padding

**Bootstrap**

- Bootstrap
    - Site: https://getbootstrap.com/
    - Utilities: https://getbootstrap.com/docs/5.3/layout/utilities/
    - Spacing: https://getbootstrap.com/docs/5.3/utilities/spacing/

- .container>.row>(.col-12>h1)*2

- Exemplo
    - bootstrap_web-19



### 229 - Gutters na Grelha de Layout

- Bootstrap
    - Site: https://getbootstrap.com/
    - Gutters: https://getbootstrap.com/docs/5.3/layout/gutters/

- Exemplo
    - bootstrap_web-20


### 230 - Sobre o CSS Grid no Bootstrap 5

- Bootstrap
    - Site: https://getbootstrap.com/
    - CSS Grid: https://getbootstrap.com/docs/5.3/layout/css-grid/

- Exemplo
    - bootstrap_web-21


### 231 - Tipografia e Análise da Documentação

- Bootstrap
    - Site: https://getbootstrap.com/
    - Typography: https://getbootstrap.com/docs/5.3/content/typography/

- Exemplo
    - bootstrap_web-22


### 232 - Imagens Responsivas com img-fluid

- Bootstrap
    - Site: https://getbootstrap.com/
    - Images: https://getbootstrap.com/docs/5.3/content/images/

- Exemplo
    - bootstrap_web-23


### 233 - Breve Referência as Cores no Bootstrap

- Bootstrap
    - Site: https://getbootstrap.com/
    - Colors: https://getbootstrap.com/docs/5.3/utilities/colors/#colors

- Exemplo
    - bootstrap_web-24




### 234 - Formatação de Tabelas de HTML

- Bootstrap
    - Site: https://getbootstrap.com/
    - Tables: https://getbootstrap.com/docs/5.3/content/tables/

- Exemplo
    - bootstrap_web-25



### 235 - Alinhamento do Conteúdo Dentro de Uma Tabela

- Bootstrap
    - Site: https://getbootstrap.com/

- Exemplo
    - bootstrap_web-26



### 236 - Introdução aos Formulários com Bootstrap

- Bootstrap
    - Site: https://getbootstrap.com/
    - Forms: https://getbootstrap.com/docs/5.3/forms/overview/

- Exemplo
    - bootstrap_web-27


### 237 - Form-Control - Parte 1

- Bootstrap
    - Site: https://getbootstrap.com/
    - Form-Control: https://getbootstrap.com/docs/5.3/forms/form-control/#example

**Emmet abbreviation**
- Teclas de atalho VSCode

- Exemplo 7
```html
<!-- comando/atalho

    .row>(.col)*3

-->

<!-- Resultado -->
<div class="row">
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
</div>
```


- Exemplo
    - bootstrap_web-28




### 238 - Form-Control - Parte 2

- Exemplo
    - bootstrap_web-29



### 239 - Select

- Exemplo
    - bootstrap_web-30



### 240 - Range

- Exemplo
    - bootstrap_web-31


### 241 - Checkboxes, Radio Buttons e Switchs

- Exemplo
    - bootstrap_web-32



### 242 - Inputs Groups & Como Usar a Documentação Corretamente

- Bootstrap
    - Site: https://getbootstrap.com/
    - Input-Group: https://getbootstrap.com/docs/5.3/forms/input-group/

- Exemplo
    - bootstrap_web-33



### 243 - Floating Labels

- Bootstrap
    - Site: https://getbootstrap.com/
    - Floating-Labels: https://getbootstrap.com/docs/5.3/forms/floating-labels/

- Exemplo
    - bootstrap_web-34


### 244 - Layout de Formulários

- Bootstrap
    - Site: https://getbootstrap.com/
    - Layout and Form: https://getbootstrap.com/docs/5.3/forms/layout/

- Exemplo
    - bootstrap_web-35


### 245 - Buttons

- Bootstrap
    - Site: https://getbootstrap.com/
    - Buttons: https://getbootstrap.com/docs/5.3/components/buttons/

- Exemplo
    - bootstrap_web-36


### 246 - Alerts

- Bootstrap
    - Site: https://getbootstrap.com/
    - Alerts: https://getbootstrap.com/docs/5.3/components/alerts/

- Exemplo
    - bootstrap_web-37


### 247 - Badges

- Bootstrap
    - Site: https://getbootstrap.com/
    - Badges: https://getbootstrap.com/docs/5.3/components/badge/

- Exemplo
    - bootstrap_web-38


### 248 - Cards

- Bootstrap
    - Site: https://getbootstrap.com/
    - Cards: https://getbootstrap.com/docs/5.3/components/card/

- Exemplo
    - bootstrap_web-39


### 249 - Popovers

- Bootstrap
    - Site: https://getbootstrap.com/
    - Popovers: https://getbootstrap.com/docs/5.3/components/popovers/

**Popovers**

- Ex
```js
//script.js

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
```

- Exemplo
    - bootstrap_web-40







### 250 - Tooltips

- Bootstrap
    - Site: https://getbootstrap.com/
    - Tooltips: https://getbootstrap.com/docs/5.3/components/tooltips/

**Tooltips**

- Ex
```js
//script.js

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
```

- Exemplo
    - bootstrap_web-41




### 251 - Collapse

- Bootstrap
    - Site: https://getbootstrap.com/
    - Tooltips: https://getbootstrap.com/docs/5.3/components/collapse/


- Exemplo
    - bootstrap_web-42




### 252 - Accordion

- Bootstrap
    - Site: https://getbootstrap.com/
    - Accordion: https://getbootstrap.com/docs/5.3/components/accordion/


- Exemplo
    - bootstrap_web-43


### 253 - Dropdown

- Bootstrap
    - Site: https://getbootstrap.com/
    - Dropdown: https://getbootstrap.com/docs/5.3/components/dropdowns/


- Exemplo
    - bootstrap_web-44


### 254 - Carousel

- Bootstrap
    - Site: https://getbootstrap.com/
    - Carousel: https://getbootstrap.com/docs/5.3/components/carousel/

- 1 Slide (auto)
- 2 Slide <- buttom ->
- 3 Slide Indicador centro _ _ _
- 4 Slide cross-fate
- 5 Slide intervalo

- Exemplo
    - bootstrap_web-45
























