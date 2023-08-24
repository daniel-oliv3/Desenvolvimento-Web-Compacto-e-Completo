/* 
O SQL contém um conjunto de funções designadas por funções de agregação
para cálculo de vários valores muito importantes.

COUNT   - Permite contar a quantidade de registos

Vamos ver na prática usando dados da nossa base de dados
*/

-- quero saber quantos clientes existem na base de dados.

SELECT COUNT(*) total_clientes FROM clientes

-- soma o número de linhas e atribui a esse cálculo o nome total_clientes.
/* 
Como parâmetro do COUNT, usámos o *
Podemos usar, por exemplo o id do cliente. O resultado será igual
A diferença entre * e id, por exemplo, é que o * conta todos os registos,
enquanto o id (ou outro nome de coluna) só vai contar as linhas cujo valor
seja diferente de NULL.

O mais comum é o uso do *
*/

/* 
Vamos ver quantos clientes existem do sexo feminino
*/

SELECT COUNT(*) clientes_sexo_feminino FROM clientes WHERE sexo = "f"

-- e quantos clientes estão ativos?
SELECT COUNT(*) clientes_ativos FROM clientes WHERE cliente_ativo = 1

-- quantos clientes existem com email do hotmail?
SELECT COUNT(*) clientes_com_hotmail FROM clientes WHERE email LIKE "%hotmail.com"

-- Quantos produtos existem na tabela dos produtos?
SELECT COUNT(*) total_produtos FROM produtos

-- Quantos produtos existem cujo preço por unidade seja igual ou superior a 1
SELECT COUNT(*) produtos_mais_caros FROM produtos WHERE preco_unidade >= 1

-- Quantos clientes são de Lisboa e quantos clientes são do Porto
SELECT "Porto" cidade, COUNT(*) clientes FROM clientes WHERE cidade = "Porto"
UNION
SELECT "Lisboa" cidade, COUNT(*) clientes FROM clientes WHERE cidade = "Lisboa"

/* 
Uma vez que cada instrução SELECT retorna um valor, neste caso coloquei a expressão UNION
Iremos falar sobre ela mais à frente, mas esta é uma das formas possíveis de obter vários
resultados numa mesma query
*/