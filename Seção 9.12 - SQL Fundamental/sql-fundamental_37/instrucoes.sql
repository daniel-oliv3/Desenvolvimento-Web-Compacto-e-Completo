/* 
Agora que já temos uma visão dos conceitos fundamentais sobre SQL,
vamos durante os próximos videos recolher informação a partir da
nossa base de dados inicial.

Em primeiro lugar vamos remover a base de dados por completo.
Depois vamos voltar a importar a base de dados.
*/

/*
IMPORTANTE: Neste módulo aprendemos conceitos fundamentais.
O mesmo é dizer, aquilo que em 80% dos casos vai permitir
resolveres os teus desafios de SQL.
No entanto, existem dezenas de funções do SQL que não explorámos
neste módulo.
Um módulo de SQL avançado irá entrar a fundo nesses conceitos.

Ainda assim, em algumas das queries que vamos executar em relação
à base de dados udemy_loja_online, vamos usar algumas dessas
funções e explicar pelo caminho como funcionam.
*/

-- Todos os produtos da base de dados
SELECT * FROM produtos

-- Todos os colaboradores ordenados por ordem crescente
SELECT * FROM colaboradores ORDER BY nome

-- Os nomes e o sexo de todos os clientes do sexo feminino
SELECT nome, sexo FROM clientes WHERE sexo = "f"

-- todos os clientes da cidade de Viseu
SELECT nome, cidade FROM clientes WHERE cidade = "Viseu"

-- quantos são os clientes da cidade de Viseu?
SELECT "Viseu" cidade, COUNT(*) total FROM clientes WHERE cidade = "Viseu"

-- quantos clientes são, cumulativamente, da cidade do Porto, Lisboa e Coimbra?
SELECT COUNT(*) total FROM clientes WHERE cidade IN("Lisboa", "Porto", "Coimbra")

-- mostrar os seus nomes
SELECT nome FROM clientes WHERE cidade IN("Lisboa", "Porto", "Coimbra")

-- mostrar os nomes, mas apenas os do sexo masculino
SELECT nome FROM clientes WHERE cidade IN("Lisboa", "Porto", "Coimbra") AND sexo = "m"

-- mostrar os nomes dos clientes cujo nome começa por Carlos
SELECT nome FROM clientes WHERE nome LIKE "Carlos%"

-- e os clientes têm o nome Silva, independentemente do início, meio ou fim?
SELECT nome FROM clientes WHERE nome LIKE "%Silva%"

-- quantos são os clientes cuja nome tem como letra inicial o A?
SELECT COUNT(*) total FROM clientes WHERE nome LIKE "A%"

-- quem são e qual o seu email?
SELECT nome, email FROM clientes WHERE nome LIKE "A%"

-- quero o total de clientes por cada cidade
SELECT 
cidade, COUNT(*) total_clientes 
FROM clientes
GROUP BY cidade

-- quero o mesmo total de clientes por cidade, mas apenas do sexo feminino
SELECT 
cidade, COUNT(*) total_clientes 
FROM clientes
WHERE clientes.sexo = "f"
GROUP BY cidade

-- quero o nome dos colaboradores e saber quem está ativo ou inativo 
-- exatamente com essas designações: ativo ou inativo
SELECT
nome,
CASE (ativo)
	WHEN 0 THEN 'ativo'
	WHEN 1 THEN 'inativo'
END ativo
FROM colaboradores

-- quantas encomendas tenho na loja
SELECT COUNT(*) total_encomendas FROM encomendas

-- quantas dessas encomendas estão registadas como pagas
SELECT COUNT(*) total FROM encomendas WHERE paga = 1

-- melhorar a informação indicando quantas estão pagas e quantas
-- não estão pagas na mesma query
SELECT "encomendas pagas" estado, COUNT(*) total FROM encomendas WHERE paga = 1
UNION
SELECT "encomendas não pagas" estado, COUNT(*) total FROM encomendas WHERE paga = 0

-- quantas encomendas no total foram efetuadas no ano de 2031
SELECT COUNT(*) total_encomendas
FROM encomendas
WHERE data_hora BETWEEN "2031-01-01 00:00:00" AND "2031-12-31 23:59:59"

-- da query anterior, eu quero todas as datas das primeiras 20 encomendas
SELECT data_hora
FROM encomendas
WHERE data_hora BETWEEN "2031-01-01 00:00:00" AND "2031-12-31 23:59:59"
LIMIT 20

-- e ainda sobre o ano 2031, quero o total de encomendas de cada um dos
-- dias do mês de agosto
SELECT DATE(data_hora) dia, COUNT(*) total_encomendas
FROM encomendas
WHERE data_hora BETWEEN "2031-08-01 00:00:00" AND "2031-08-31 23:59:59"
GROUP BY dia

-- quero todos os detalhes da tabela das encomendas de todas
-- as encomendas registdas no dia 15 de Agosto de 2031
SELECT * FROM encomendas
WHERE DATE(data_hora) = "2031-08-15"

-- quero saber quantas encomendas foram feitas pela cliente Rosa Laura Araújo Matos
SELECT 
clientes.nome,
COUNT(*) total_encomendas
FROM clientes
LEFT JOIN encomendas
ON clientes.id = encomendas.id_cliente
WHERE clientes.nome = "Rosa Laura Araújo Matos"