-- quero saber os dados fundamentais da encomenda 1:
-- quem comprou, quem vendeu, quando e qual foi o total da encomenda

-- vamos primeiro calcular todos os totais de todos os produtos vendidos
-- em todas as encomendas. Vamos aproveitar para trazer já a identificação
-- do cliente e do colaborador de cada encomenda
SELECT 
encomendas_produtos.id_encomenda,
encomendas.id_cliente,
encomendas.id_colaborador,
encomendas.data_hora,
encomendas_produtos.quantidade,
produtos.produto, 
CAST(encomendas_produtos.quantidade * produtos.preco_unidade AS DECIMAL(20,2)) total
FROM encomendas_produtos
LEFT JOIN produtos ON encomendas_produtos.id_produto = produtos.id
LEFT JOIN encomendas  ON encomendas.id = encomendas_produtos.id_encomenda

-- a partir desta query, vamos devolver um resultado mais sintético
-- agrupanto informação por encomenda

SELECT 
id_encomenda, id_cliente, id_colaborador, data_hora, SUM(total) total
FROM 
(
	SELECT 
	encomendas_produtos.id_encomenda,
	encomendas.id_cliente,
	encomendas.id_colaborador,
	encomendas.data_hora,
	encomendas_produtos.quantidade,
	produtos.produto, 
	CAST(encomendas_produtos.quantidade * produtos.preco_unidade AS DECIMAL(20,2)) total
	FROM encomendas_produtos
	LEFT JOIN produtos ON encomendas_produtos.id_produto = produtos.id
	LEFT JOIN encomendas  ON encomendas.id = encomendas_produtos.id_encomenda
) a
GROUP BY id_encomenda

-- agora temos a informação toda que precisamos.
-- Vamos completar com os dados dos clientes e colaboradores
-- e formatar a apresentação dos dados

SELECT
clientes.nome cliente,
colaboradores.nome colaborador,
data_hora,
CONCAT(FORMAT(total,2), " €") total
FROM
(
	SELECT 
	id_encomenda, id_cliente, id_colaborador, data_hora, SUM(total) total
	FROM 
	(
		SELECT 
		encomendas_produtos.id_encomenda,
		encomendas.id_cliente,
		encomendas.id_colaborador,
		encomendas.data_hora,
		encomendas_produtos.quantidade,
		produtos.produto, 
		CAST(encomendas_produtos.quantidade * produtos.preco_unidade AS DECIMAL(20,2)) total
		FROM encomendas_produtos
		LEFT JOIN produtos ON encomendas_produtos.id_produto = produtos.id
		LEFT JOIN encomendas  ON encomendas.id = encomendas_produtos.id_encomenda
	) a
	GROUP BY id_encomenda
) final
LEFT JOIN clientes
ON id_cliente = clientes.id
LEFT JOIN colaboradores
ON id_colaborador = colaboradores.id
WHERE final.id_encomenda = 1

/* 
MUITO IMPORTANTE:
Esta estrutura de base de dados não está completamente correta.
Repara que todos os cálculos das encomendas passadas são efetuados a partir
de um preco_unidade que está guardado na tabela dos produtos.
Isto significa que, se alterármos o preço dos produtos,
todos os dados das encomendas passadas vão passar a apresentar um preço
que não corresponde à realidade do dia em que a encomenda foi efetuada.

Por exemplo:
Hoje compro duas laranjas por 0,25 cada uma (total = 0,50)
Se amanhã as laranjas subirem de preço, o valor que paguei na encomenda efetuada
não vai poder ser alterado.

Esta nota importante serve apenas para refletir sobre a estrutura de uma base de dados.
Neste caso, a tabela das encomendas_produtos deveria guardar também o valor total pago por cada produto
para que ficasse em histórico e não fosse tudo recalculado com a tabela de preços atuais.
*/