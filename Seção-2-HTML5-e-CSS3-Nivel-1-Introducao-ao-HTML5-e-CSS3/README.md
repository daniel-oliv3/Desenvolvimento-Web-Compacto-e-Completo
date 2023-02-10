##
### Seção 2 - HTML5 CSS3 Nível 1 - Introdução ao HTML5 e CSS3
##


**Preparação do Ambiente de estudo**

- Browser
- Editor de código
- Criar pastas
- Criar ficheiros

**Browser**
- Site: https://www.google.com/intl/pt-BR/chrome/

**Editor de código**
- Site: https://code.visualstudio.com/download


<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/html-e-css.jpg" width="80%">
</p>


##
### HTML5
##

**H**yper **T**ext **M**arkup **L**anguage

- Não é uma linguagem de programação
- É uma linguagem de marcação
- Tags definem como apresentar o conteúdo
- Relacionado com a forma de navegação
- Serve para construir a estrutura de uma página web
- Construímos o código com elementos HTML


<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/html-1.jpg" width="80%">
</p>


**HTML** = Estrutura e conteúdo com elementos
- Todas as páginas HTML devem ter uma **estrutura base**

- Estrutura base de uma página HTML

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web</title>
</head>
<body>
	<!-- Conteúdo do Site -->
    
</body>
</html>
```

- VSCODE
- Criar a estrutura HTML automaticamente no visual studio code
```
! + ENTER
```

**Importante**
  
O editor de código ajuda a indentificar as tags, deves tirar vantagem na utilização dos recursos do editor
  
- Emmet Abbreviations
- Sistema de autocompletion
- Configurações, teclas de atalhos e plugins



- Resumo: Elementos HTML, Tags


<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/html-4.jpg" width="50%">
</p>

**Importante**

- O HTML não dá importância aos espaços

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/html-9.jpg" width="50%">
</p>
  
**Importante**

- Mais do que um espaço dentro do conteúdo, é transformado num espaço só

```html
<!-- exemplo espaços em brancos são ignorados pelo interpretador -->

<p>Este parágrafo tem vários            espaços.</p>
```

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/html-10.jpg" width="60%">
</p>

**Importante**

- Deves usar tabulações para organizar o código

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/html-11.jpg" width="60%">
</p>


  


### Elementos para conteúdo de texto

**Elemento de HTML**

- HTML
```html
<!-- index.html -->

<p>Texto de um parágrafo de HTML</p>
```

```html
<!DOCKTYPE html>
<html>
  <head>
    <title>Título da página</title>
    <!-- Icones, Scripts, Metadados, Etc... -->
  </head>
  <body>
    <!-- Elemento estrutural body -->
    <h1>Título da notícia</h1>
    <h3>Sumário da notícia</h3>
    <p>Parágrafo da notícia com texto</p>
    <img src="imagem.jpg">
  </body>
</html>
```



- Elementos Normais

```html
<!-- Elementos normais -->
<h3>...</h3>
<p>...</p>
<small>...</small>
<i>...</i>
<u>...</u>
```

- Elementos Vazios

```html
<!-- Elementos vazios -->
<hr>

<br>
```

- Listas Ordenadas

```html
<!-- Listas Ordenadas -->
<ol>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ol>
```

- Listas Desordenadas

```html
<!-- Listas Desordenadas -->
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
```

- Links / Hiperligações

```html
<!-- Links / Hiperligações -->

<a href="www.google.com">Ir para o Google</a>
```

- Imagens

```html
<!-- Imagens -->

<img src="imagem.jpg">
```



- Parágrafos

```html
<p>Parágrafo</p>
```

- Headings

```html
<!-- Heading (Título) -->
<h1>Heading 1 (Título 1)</h1>
<h2>Heading 2 (Título 2)</h2>
<h3>Heading 3 (Título 3)</h3>
<h4>Heading 4 (Título 4)</h4>
<h5>Heading 5 (Título 5)</h5>
<h6>Heading 6 (Título 6)</h6>
```

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/result-site-01.jpg" width="60%">
</p>


- Um exemplo de combinação de títulos e parágrafos

```html
<!-- Um exemplo de combinação de títulos e parágrafos -->

<h1>Agência Viagens a Marte</h1>
<h3>Quem somos?</h3>
<p>Uma agência de viagens para levar qualquer um a Marte.</p>
<h3>Onde estamos?</h3>
<p>Podemos encontrar-nos no nosso site na Internet.</p>
<h3>Qual é o nosso objetivo?</h3>
<p>Proporcionar-te a melhor experiência da tua vida</p>
```

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/result-site-02.jpg" width="60%">
</p>


- Quebra de linha (line break)

```html
<!-- br -->

<p>Esta é a primeira frase.</p>
<p>Esta é a segunda frase.</p>


<p>Esta é a primeira frase.<br>
E esta é a segunda frase.</p>
```

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/result-site-03.jpg" width="60%">
</p>


- Separador horizontal (Horizontal rules)
```html
<!-- hr -->

<p>Primeira frase</p>
<hr>
<p>Segunda frase</p>
```

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/result-site-04.jpg" width="60%">
</p>


- Contentor genérico em linhas (inline text container)
```html
<!-- span -->

<p>Esta frase <span>Contém</span> um span</p>
```

<p align="center">
  <img alt="...." src="../Seção-2-HTML5-e-CSS3-Nivel-1-Introducao-ao-HTML5-e-CSS3/assets/result-site-05.jpg" width="60%">
</p>


##
### CSS3
##


**C**ascading **S**tyle **S**heets

- Organização dos elementos de HTML
- Aplicação de estilos (cores, tamanhos, etc...)
- Muitos outras funcionalidades


##














