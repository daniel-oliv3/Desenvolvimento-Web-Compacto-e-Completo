-- A instrução SQL SELECT selecciona dados de uma ou mais tabelas. 

-- selecionar todas as informações sobre os produtos
SELECT * FROM produtos

-- selecionar todas as informações sobre os colaboradores
SELECT * FROM colaboradores

-- selecionar todas as informações sobre os clientes
SELECT * FROM clientes

-- O SQL é case-insensitive. Maiúsculas tornam o código mais legível
select * from clientes

-- para executar mais do que uma operação, separamos as
-- instruções com um ;

-- Não é muito comum no código PHP, porque diretamente
-- só vai retornar os valores da primeira instrução.
SELECT * FROM produtos; SELECT * FROM colaboradores

-- A instrução SELECT não vai alterar informações da base de dados

-- selecionar colunas específicas de uma tabela
SELECT nome, email FROM clientes

-- podemos efetuar pequenos cálculos.
-- por exemplo, vamos buscar cada um dos produtos e verificar
-- o preço de uma dúzia de cada um

-- esta query vai buscar os dados
SELECT produto, preco_unidade FROM produtos
SELECT produto, preco_unidade, preco_unidade * 12 FROM produtos

-- como podes ver, a multiplicação aparece com um nome de coluna complexo.
-- podemos adicionar um nome alternativo. Trata-se de um 'alias'
SELECT produto, preco_unidade, preco_unidade * 12 AS duzia FROM produtos

-- podemos também ignorar a expressão AS
SELECT produto, preco_unidade, preco_unidade * 12 duzia FROM produtos

-- para além de outras operações, podemos usar valores literais nos resultados.
SELECT produto, "este valor é literal" valor, preco_unidade FROM produtos 

SELECT 10 * 5 AS resultado