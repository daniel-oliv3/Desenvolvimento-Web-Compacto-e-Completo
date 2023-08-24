/* 
Já falámos anteriormente sobre o que é um alias, mas de forma passageira.
O SQL permite usar nomes alternativos - ALIAS (pseudónimos) para tabelas e colunas.
Um alias é um nome temporário, alternativo ao nome verdadeiro.
Não se trata de alterar a estrutura da base de dados, mas apenas
um método para preparar os resultados de uma query.

Vamos ver como funcionam na prática.
*/

SELECT produto AS fruto FROM produtos
/*
Como podes ver neste caso, a tabela dos produtos tem uma coluna produto.
No caso da query, os valores dessa coluna vão ser devolvidos sob o nome
de uma coluna alias designada por 'fruto'
(porque, de facto, são frutos todos os produtos da tabela) 

Podemos retirar a expressão AS e o sistema vai funcionar de igual modo
*/

SELECT produto fruto FROM produtos

/* 
Se quiseres atribuir um nome com espaços pelo meio, também o podes fazer.
*/
SELECT produto `Nome do fruto` FROM produtos

/* 
Aparentemente parece um mecanismo redundante, mas em queries mais complexas
é necessário recorrer a este tipo de recurso para poderes distinguir
colunas de duas tabelas cujo nome seja igual. Isso vai criar melhores condições
de construção das queries e até facilitar a organização dos dados quando
depois os vais usar nos teus projetos.

Por exemplo, podemos querer devolver mais dados do que as colunas da tabela
dos produtos. Vejamos 
*/

SELECT 
*, 
preco_unidade * 6 AS `Preço por dúzia`, 
preco_unidade * 24 AS `Preço por duas dúzias` FROM produtos

/*
Existe um erro que deves ter em atenção e que é muito comum. 
*/
SELECT preco_unidade * 5 AS total FROM produtos WHERE total > 10
/*
Esta query vai originar um erro, porque na cláusula WHERE a coluna total não
vai ser reconhecida, porque não existe na estrutura da tabela produtos.

Este erro está relacionado com o facto da query ser executada da seguinte forma:

FROM > WHERE > SELECT

Já o seguinte exemplo é possível
*/

SELECT produto, preco_unidade AS preco FROM produtos ORDER BY preco

/*
No ORDER BY já vai funcionar porque a query é efetuada da seguinte forma:

FROM > SELECT > ORDER BY 

*/

/*
No caso das tabelas, também é possível usar ALIAS.
Em algunas casos é mesmo obrigatório. Veremos mais para a frente
quando falármos sobre subqueries 
*/

SELECT produtos.* FROM produtos
SELECT p.* FROM produtos p 

/* 
Vejamos apenas um exemplo mais complexo.
Veremos mais à frente como construir estas queries com mais atenção.
O objetivo é ir buscar as primeiras 5 encomendas,
juntando duas tabelas: encomendas e clientes.
Queremos ver o nome dos clientes envolvidos em cada encomenda.
*/

SELECT clientes.nome, encomendas.* 
FROM clientes, encomendas 
WHERE clientes.id = encomendas.id_cliente LIMIT 5

-- podemos escrever a mesma query da seguinte forma

SELECT c.nome, e.* 
FROM clientes c, encomendas e 
WHERE c.id = e.id_cliente LIMIT 5

-- O uso do alias permitiu tornar a query mais curta.
-- Fica tranquilo, iremos acrescentando estes conhecimentos ao longo do processo´
-- e no final tudo fará muito mais sentido.