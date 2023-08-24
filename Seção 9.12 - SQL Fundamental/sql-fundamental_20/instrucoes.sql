/* 
Vamos olhar para a tabela das encomendas e a sua relação com os produtos vendidos.
Aqui temos uma nova realidade.
Cada encomenda tem um registo. Os produtos têm a sua própria tabela.
No entanto, temos uma tabela de ligação entre encomendas e produtos.
Vejamos o que essa tabela contém.
*/

SELECT COUNT(*) total FROM encomendas_produtos

/* 
São mais de 53 mil registo! Porquê?
Esta tabela relaciona cada uma das 10 mil encomentas, com cada um dos produtos que cada
encomenda contém.
Por exemplo, se a encomenta 1 tem 4 produtos, então esta tabela vai ter 4 linhas.
Vejamos o conteúdo das 20 primeiras linhas
*/

SELECT * FROM encomendas_produtos LIMIT 20

/* 
Repara que só temos 4 colunas.
A primeira é a chave primária que torna cada linha num registo único.
As 3 colunas seguintes estabelecem a relação entre tabelas.
    Qual é o número da encomenda
    Qual é o id do produto
    E uma vez que cada produto tem um preco por unidade, precisamos saber
    a quantidade de cada um dos produtos.

Com este conjunto de informações podemos obter um interminável conjunto
de resultados.

Vamos ver na prática com desafios reais.
*/

/* 
Quero vários detalhes sobre a encomenda 3
    Quando foi efetuada
    Que produtos foram comprados e respetivas quantidades
*/
SELECT 
e.data_hora,
p.produto,
ep.quantidade
FROM encomendas_produtos ep LEFT JOIN
encomendas e
ON e.id = ep.id_encomenda
LEFT JOIN produtos p
ON p.id = ep.id_produto
WHERE e.id = 3

/* 
Logo depois do select estamos a indicar apenas 3 colunas.
Cada uma delas proveniente de uma tabela diferente.
    A data e hora da tabela das encomendas
    O nome do produto da tabela dos produtos
    A quantidade vendida de cada produto registada na tabela encomendas_produtos

Depois do FROM temos duas JOINS.
A tabela encomendas_produtos faz um left join com a das encomendas e também com a dos produtos.
Encomendas_produtos é a tabela agregadora. Portanto, é ela que serve de base para ir buscar informação
às outras duas tabelas.

A cláusula where serve para definir que os dados dizem respeito apenas à encomenda 3.

Agora vamos adicionar o preço total que custou cada produto da mesma encomenda
*/

SELECT 
e.data_hora,
p.produto,
ep.quantidade,
p.preco_unidade * ep.quantidade as total
FROM encomendas_produtos ep LEFT JOIN
encomendas e
ON e.id = ep.id_encomenda
LEFT JOIN produtos p
ON p.id = ep.id_produto
WHERE e.id = 3

/*
Como podes ver, o resultado do total é a multiplicação da quantidade de cada um dos produtos
pelo seu valor por unidade. No entanto é apresentado com valores com muitas casas decimais.

Vais ver mais à frente neste módulo que o SQL tem inúmeras funções, entre elas, para
arredondamento de valores numéricos, tratamento de strings, etc.
Vamos introduzir aqui uma apenas para arredondar os valores com muitas casas decimais
e vamos apresentar a coluna do total com o valor monetário em Euros
*/

SELECT 
e.data_hora,
p.produto,
ep.quantidade,
CONCAT(ROUND(p.preco_unidade * ep.quantidade, 2),' €') as total
FROM encomendas_produtos ep LEFT JOIN
encomendas e
ON e.id = ep.id_encomenda
LEFT JOIN produtos p
ON p.id = ep.id_produto
WHERE e.id = 3

/* 
ROUND vai arredondar cada um dos valores a duas casas decimais (os cêntimos)
O CONCAT vai permitir apresentar o valor arredondado e o símbolo do euro

Podes estar agora a questionar-te sobre como sabemos o preço final
de toda a encomenda, certo?
Tem calma. Vamos lá chegar.

Para podermos avançar com as Joins e obter dados mais completos,
é necessário ficar a conhecer outras funções do SQL.
Por exemplo, como contamos registos, como sabemos a sua média,
como calculamos o somatório.

Vamos primeiro conhecer essas funções e depois voltaremos certamente a
usar joins para obter dados mais completos das encomendas.
*/