/* 
No vídeo anterior, com um exercício mais complexo, por sinal,
vimos a utilização do GROUP BY.
Neste vídeo vamos simplificar os conceitos e voltar ao básico.
Para que serve o group by.

O group by permite agrupar numa única linha, o conjunto de resultados
relacionados com um determinado valor de coluna e surge associado
à existência de funções agregadoras.
Estranho, vamos a um exemplo prático.

Quero saber quantos clientes tenho por cada cidade, mesmo sem saber
quantas cidades tenho e quantos clientes tenho no total.
Repara como é simples
*/

SELECT cidade, COUNT(*) total_clientes
FROM clientes
GROUP BY cidade

/* 
Podemos ver no total de linhas que temos 17 cidades.
Podemos confirmar se isso é verdade com a seguinte query:
SELECT DISTINCT(cidade) FROM clientes
*/

SELECT DISTINCT(cidade) FROM clientes

-- dá um total de 17 rows.
-- Ou ainda mais direto:

SELECT COUNT(DISTINCT(cidade)) FROM clientes

-- temos uma linha com o total de cidades contadas pela função agregadora COUNT

/* 
Voltando à nossa query inicial concluímos que é possível, desta forma, saber quantos
clientes por cidade tem a nossa loja.

Com esses resultados podemos saber outros dados.
Por exemplo, qual é a cidade com mais clientes
*/

SELECT cidade, COUNT(*) total_clientes
FROM clientes
GROUP BY cidade
ORDER BY total_clientes DESC

-- Parece que Faro é a cidade com maior número de clientes,
-- embora os resultados sejam muito próximos uns dos outros.

/* 
Vejamos um outro dado:
A quantidade de cada produto vendida até ao momento na nossa loja.
Temos que ir buscar a cada encomenda, a quandidade de cada produto
e apresentar o nome do produto, e a quantidade vendida.
*/

SELECT produtos.id, produtos.produto, SUM(encomendas_produtos.quantidade)
FROM produtos LEFT JOIN encomendas_produtos
ON produtos.id = encomendas_produtos.id_produto
GROUP BY produtos.id, produtos.produto
ORDER BY produtos.id

/* 
Nesta query não foram usados ALIAS, mas podemos fazê-lo.
*/
SELECT p.id, p.produto, SUM(ep.quantidade) quantidade
FROM produtos p LEFT JOIN encomendas_produtos ep
ON p.id = ep.id_produto
GROUP BY p.id, p.produto
ORDER BY p.id

/* 
Estes são os totais de cada um dos produtos vendidos até hoje.
Os valores são muito aproximados, uma vez que os dados da base de dados
foram calculados randomicamente de forma equitativa quando foi construída a 
estrutura e os dados originais.

Num cenário real, esta informação seria importantíssima para perceber que tipo
de produto tem mais destaque na nossa loja.

Pergunta simples: quantos clientes temos de cada um dos sexos?
*/

SELECT sexo, COUNT(*) total FROM clientes
GROUP BY sexo

/* 
simples... 

E se eu quiser só contar com os clientes cujo nome contém a palavra Silva?
*/

SELECT sexo, COUNT(*) total FROM clientes
WHERE nome LIKE "%Silva%"
GROUP BY sexo

/* 
são 2 do sexo masculino e 5 do sexo feminino.
Vamos confirmar
*/

SELECT nome, sexo FROM clientes WHERE nome LIKE "%Silva%"
-- está confirmado

/* 
E se quisermos saber quantas encomendas foram registadas por cada dia do mês 
de janeiro de 2030?
*/

SELECT DATE(data_hora) data, COUNT(*) encomendas
FROM encomendas
WHERE data_hora <= "2030-01-31-23:59:59"
GROUP BY DATE(data_hora)

/* 
Observa que usei a função DATE para ir buscar apenas a parte da data da coluna
data_hora das encomendas. Se fosse buscar a data_hora completa, teríamos uma encomenda
por cada registo, porque cada encomenda tem um tempo preciso.
*/