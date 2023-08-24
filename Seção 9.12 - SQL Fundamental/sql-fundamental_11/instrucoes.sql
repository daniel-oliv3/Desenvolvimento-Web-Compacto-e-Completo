/* 
Os operadores de comparação são usados nas condições de uma query.
Irás vê-los com muita frequência na cláusula WHERE, mas não só.
Vamos ver alguns exemplos.
*/

-- Imagina que queres ver o nome e a cidade de todos os clientes da cidade de Lisboa
SELECT nome, cidade FROM clientes WHERE cidade = "Lisboa"
-- O operador de igualdade significa o que já estás a pensar.
-- Verifica se o valor de um determinado campo corresponde ao valor indicado.

-- queres saber todos os colaboradores cujo sexo seja diferente do feminino.
SELECT * FROM colaboradores WHERE sexo <> "f" 
-- como podes verificar, o conjunto dos dois sinais é o operador de diferença.

-- Podemos combinar tudo isto da seguinte forma:
-- quero todos os clientes que são de Lisboa, mas apenas do sexo feminino
SELECT * FROM clientes WHERE cidade = "Lisboa" AND sexo <> "m"
-- ou
SELECT * FROM clientes WHERE cidade = "Lisboa" AND sexo = "f"

-- depois temos os operadores de comparação
-- maior que, menor que, maior ou igual e menor ou igual.
-- não será difícil perceber como funcionam.

-- vamos saber quais são os produtos cujo preço é superior a 1
SELECT * FROM produtos WHERE preco_unidade > 1
-- tem em atenção que os dados devolvidos, nunca irão apresentar um
-- produto cujo valor seja igual a 1.
-- maior do que um exclui o 1.
-- Para incluir também o produto que custa 1 ou superior, usamos o maior ou igual
SELECT * FROM produtos WHERE preco_unidade >= 1

-- a mesma lógica funciona para o menor que e o menor ou igual que.
-- queremos saber quais os produtos cujo preço é igual ou inferior a 1.5

SELECT * FROM produtos WHERE preco_unidade <= 1.5

-- embora existam outras formas de obter os dados seguintes, podemos
-- usar estes operadores para obter, por exemplo, todos os produtos
-- cujo preço seja igual ou superior a 1 e igual ou inferior a 2
SELECT * FROM produtos WHERE preco_unidade >= 1 AND preco_unidade <= 2

-- como podes imaginar, este tipo de operadores não vai funcionar
-- com colunas do tipo varchar (strings)
SELECT nome FROM clientes WHERE nome > 10
-- esta query não vai devolver dados.

-- mas podes usar, por exemplo, com colunas do tipo DATETIME
-- vamos ver quantas encomendas são anteriores a uma determinada data
SELECT * FROM encomendas WHERE data_hora <= "2030-01-02 10:00:00"
-- nesta situação vão ser devolvidas todas as encomendas com uma data
-- igual ou anterior à data indicada.

-- tem em atenção o formato da data. Deve ser ano, mês, dia, hora, minuto e segundo

-- Iremos voltar várias vezes aos operadores de comparação.
-- por agora interessa ver algo que já usámos, mas em mais detalhe.
-- os operadores lógicos.