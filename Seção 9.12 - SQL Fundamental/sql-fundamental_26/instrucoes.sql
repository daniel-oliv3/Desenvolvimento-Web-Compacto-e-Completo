/* 
A cláusula HAVING é utilizada na declaração SELECT para especificar 
condições de filtragem para um grupo de linhas ou agregados.

A cláusula HAVING é frequentemente utilizada com a cláusula GROUP BY 
para filtrar grupos com base numa condição especificada. 
Se omitir a cláusula GROUP BY, a cláusula HAVING comporta-se como a cláusula WHERE.

Vamos a exemplos.

Quero saber quais as cidades cujo total de clientes é superior a 12
*/

SELECT cidade, COUNT(*) total
FROM clientes
GROUP BY cidade
HAVING total >= 12

/* 
repara como usei o HAVING para perguntar ao valor da contagem, que é
um valor que não existe na base de dados, mas que resulta da query,
se esse valor é igual ou superior a 12.

Esta é a principal utilidade do HAVING: podemos recorrer a valores calculados
na query para determinar as condições dos registos apresentados.

Por exemplo, quantas encomendas tiveram 8 produtos envolvidos?
*/

SELECT id_encomenda, COUNT(*) total_produtos
FROM encomendas_produtos
GROUP BY id_encomenda
HAVING total_produtos = 8

/* 
A tabela das encomendas_produtos tem em cada linha o id_encomenda e o id_produto com a respetiva quantidade.
Não quisemos saber a designação do produto. Apenas sabemos que, se uma encomenda
tem 8 linhas na tabela encomendas_produtos então foram comprados 8 produtos diferentes, independentemente
da quantidade.

Do resultado desta query, temos o id da encomenda e o total de produtos que, como é óbvio, é sempre 8
São cerca de 950 encomendas.

Vamos apresentar apenas a informação pretendida: quantas encomendas tiveram 8 produtos envolvidos.
*/

SELECT COUNT(*) numero_de_encomendas_com_8_produtos FROM
(
SELECT id_encomenda, COUNT(*) total_produtos
FROM encomendas_produtos
GROUP BY id_encomenda
HAVING total_produtos = 8
) a

/* 
Da mesma forma que podemos usar várias colunas em sequência para agrupar com o GROUP BY,
também podemos adicionar ao HAVING várias condições usando os operadores lógicos como usamos
na cláusula WHERE.

Vamos tentar agrupar a totalidade das encomendas pelo número de produtos que cada uma contém
*/

SELECT id_encomenda, COUNT(*) total_produtos
FROM encomendas_produtos
GROUP BY id_encomenda

-- esta query dá-nos o total de produtos de cada encomenda.
-- agora vamos agrupar as encomendas pelo número de produtos que cada uma tem e
-- contar quantos registos existem para cada grupo

SELECT DISTINCT(total_produtos) total_produtos, COUNT(*) FROM 
(
    SELECT id_encomenda, COUNT(*) total_produtos
    FROM encomendas_produtos
    GROUP BY id_encomenda
) a
GROUP BY total_produtos
ORDER BY total_produtos

/* 
A partir da query anterior, transformamos numa subquery e vamos buscar os totais
distintos de cada total_produtos.
Contamos as vezes que esse total produtos aparece e agrupamos por total_produtos.
Só para ver a ordem de quantidades, usamos os order by para colocar as encomendas
com um produto em primeiro até às encomendas com 10 produtos.

O Having só se vai justificar aqui, se quisermos escolher, por exemplo,
obter apenas o os totais de encomendas que têm um determinado número de produtos
e superam as mil encomendas nessas condições.
*/

SELECT DISTINCT(total_produtos) total_produtos, COUNT(*) total FROM 
(
SELECT id_encomenda, COUNT(*) total_produtos
FROM encomendas_produtos
GROUP BY id_encomenda
) a
GROUP BY total_produtos
HAVING total >= 1000
ORDER BY total_produtos