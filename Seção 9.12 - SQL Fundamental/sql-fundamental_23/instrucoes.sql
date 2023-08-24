/* 
AVG     - Permite calcular a média de um conjunto de resultados numéricos
SUM     - Permite ver o somatório (cálculo do total) de um conjunto de resultados

Para apresentar os exemplos simples destas duas funções de agregação, vamos
recorrer à tabela dos produtos, onde temos precos por unidade.

*/

-- quero saber qual é a média de preços dos produtos que a minha loja tem
SELECT AVG(preco_unidade) preco_medio FROM produtos

-- uma vez que o valor apresentado tem muitas casas decimais, podemos arredondar
-- o resultado recorrendo a outra função.
SELECT ROUND(AVG(preco_unidade),2) preco_medio FROM produtos

-- vamos ver qual é o valor total de uma encomenda hipotética, em que um
-- cliente iria comprar uma unidade de cada produto da loja.
-- A loja tem 25 produtos, cada um com um preço
SELECT SUM(preco_unidade) total_precos FROM produtos
-- e mais uma vez, arredondanto.
SELECT ROUND(SUM(preco_unidade),2) total_precos FROM produtos

/* 
Esta conta não faz muito sentido, até porque temos uma tabela com encomendas
já registadas.

Vamos tentar calcular o valor total de uma determinada encomenda.
Vamos começar por ir buscar os dados dessa encomenda. Pode ser a encomenda com id = 50
*/

SELECT 
e.id,
e.data_hora,
p.produto,
p.preco_unidade,
ep.quantidade
FROM encomendas_produtos ep
LEFT JOIN encomendas e
ON ep.id_encomenda = e.id
LEFT JOIN produtos p
ON ep.id_produto = p.id
WHERE e.id = 50

/* 
Temos uma encomenda com 3 produtos.
Podes ver que o valor da multiplicação ainda aparece estranho.
Vamos resolver isso adicionando um ROUND no resultado
*/

SELECT 
e.id,
e.data_hora,
p.produto,
p.preco_unidade,
ep.quantidade
FROM encomendas_produtos ep
LEFT JOIN encomendas e
ON ep.id_encomenda = e.id
LEFT JOIN produtos p
ON ep.id_produto = p.id
WHERE e.id = 50

/* 
agora vamos acrescentar uma coluna que resulta da multiplicação
do valor por unidade pela quantidade de produtos da encomenda
*/

SELECT 
e.id,
e.data_hora,
p.produto,
p.preco_unidade,
ep.quantidade,
ep.quantidade * p.preco_unidade AS total
FROM encomendas_produtos ep
LEFT JOIN encomendas e
ON ep.id_encomenda = e.id
LEFT JOIN produtos p
ON ep.id_produto = p.id
WHERE e.id = 50

-- como podes verificar, a multiplicação continua a apresentar dados estranhos.
-- vamos converter o resultado para decimal.
-- vamos usar a função CAST()

SELECT 
e.id,
e.data_hora,
p.produto,
p.preco_unidade,
ep.quantidade,
CAST(ep.quantidade * p.preco_unidade AS decimal(10,2)) AS total
FROM encomendas_produtos ep
LEFT JOIN encomendas e
ON ep.id_encomenda = e.id
LEFT JOIN produtos p
ON ep.id_produto = p.id
WHERE e.id = 50

-- agora que temos toda a informação que precisamos, falta o resultado total.
-- vamos reduzir a nossa consulta ao fundamental

SELECT 
CAST(ep.quantidade * p.preco_unidade AS decimal(10,2)) AS total
FROM encomendas_produtos ep
LEFT JOIN encomendas e
ON ep.id_encomenda = e.id
LEFT JOIN produtos p
ON ep.id_produto = p.id
WHERE e.id = 50

-- agora só temos os totais. Vamos ter que os somar
SELECT 
SUM(CAST(ep.quantidade * p.preco_unidade AS decimal(10,2))) AS `total encomenda`
FROM encomendas_produtos ep
LEFT JOIN encomendas e
ON ep.id_encomenda = e.id
LEFT JOIN produtos p
ON ep.id_produto = p.id
WHERE e.id = 50

/* 
Todo este processo de cálculo, que aqui quis explicar passo a passo
já se encaixa num conjunto de conhecimentos intermédio de sql.
Usámos joins múltiplas, funções de cast e de agregação.
Não é a únida forma de fazer este cálculo, mas como podes observar pelo exemplo,
o MySQL e outros sistemas de gestão de bases de dados, são altamente performativos
quando efetuam estas queries.

Daí ser sempre importante realçar que, tudo o que possas passar para a responsabilidade
do Sistema de Gestão da base de dados, através das tuas queries, deves fazê-lo.

Por exemplo, um programador sem grande experiência de SQL, eventualmente iria buscar os valores
através de uma query, recolhia a informação na sua linguagem de programação (PHP, JavaScript, etc.)
faria um ciclo para ir somando os valores e obter finalmente o resultado total da encomenda.

Essa é uma prática típica de um principiante, daí a importância de ter conhecimentos sólidos de
SQL para tornar a nossa aplicação mais performativa.

E já que estamos neste contexto, vamos muito rapidamente e de forma simples saber qual o volume total
de negócio registado nas 10 mil encomendas registadas na nossa base de dados.

Vamos literalmente somar tudo para saber quanto dinheiro foi entregue em caixa após as 10 mil encomendas
efetuadas, e tendo em conta que existem encomendas que não foram pagas. Essas vão ficar de fora
*/

SELECT * FROM encomendas WHERE paga = 0
-- sao mais de 600 que não foram pagas. Vamos lá...

SELECT SUM(CAST(ep.quantidade * p.preco_unidade AS DECIMAL(20,2))) as volume_total_negocio
FROM encomendas_produtos ep LEFT JOIN encomendas e
ON ep.id_encomenda = e.id
LEFT JOIN produtos p
ON ep.id_produto = p.id
WHERE e.paga = 1

/* 
Não fiques perdido no meio destas queries um pouco mais complexas.
Só com alguma prática irás começar a entender como chegar aos resultados.
*/