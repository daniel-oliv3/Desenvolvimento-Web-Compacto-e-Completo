/* 
Existem determinados operadores lógicos que são muito úteis e usados.
Vamos neste vídeo dar mais ênfase a esses casos.
*/

-- ----------------------------------------------------
-- BETWEEN - devolve os resultados que estão entre um intervalo.
SELECT * FROM produtos WHERE preco_unidade BETWEEN 1 AND 2

-- seria o mesmo que escrever 
SELECT * FROM produtos WHERE preco_unidade > 1 AND  preco_unidade < 2

-- queremos todas as encomendas registadas entre duas datas

SELECT * FROM encomendas WHERE data_hora BETWEEN '2030-01-01 00:00:00:' AND '2030-01-02 23:59:59'
-- vão ser devolvidos os resultados entre as zero horas do dia 1 de janeiro de 2030 e
-- as 24 horas do dia seguinte.

-- ----------------------------------------------------
-- IN - devolve todos os registos que estejam compreendidos dentro de uma
-- coleção de valores. Vejamos
SELECT * FROM clientes WHERE cidade IN ("Lisboa", "Viseu", "Coimbra")
-- devolve todos os clientes das duas cidades.
-- poderiamos fazer da seguinte forma:
SELECT * FROM clientes where cidade = "Lisboa" OR cidade = "Viseu"

-- mas imagina que queremos 5 cidades! Ficaria uma query muito extensa.
SELECT * FROM clientes WHERE cidade IN("Lisboa","Viseu","Coimbra","Porto","Amadora")

-- ----------------------------------------------------
-- LIKE - É um operador que permite pesquisar no interior dos valores das células.
-- vejamos como.

SELECT nome FROM clientes WHERE nome LIKE "João"
-- escrito desta maneira não vai devolver dados, porque não existe ninguém cujo nome
-- seja exclusivamente João. No entanto podemos usar wildcards. São símbolos que
-- permitem flexibilizar a pesquisa:

-- % - representa zero, um ou mais caracteres de qualquer tipo.
SELECT nome FROM clientes WHERE nome LIKE "João%"
-- vai buscar todos os clientes cujo nome começa por João
SELECT nome FROM clientes WHERE nome LIKE "Daniel%"
-- vai buscar todos os clientes cujo nome começa por Daniel
-- repara que não existe nenhum daniel, mas existe uma Daniela 
SELECT nome FROM clientes WHERE nome LIKE "Rui%"
-- temos vários Ruis

-- vamos pesquisar todos os nomes de clientes que tenham a palavra Silva
SELECT nome FROM clientes WHERE nome LIKE "%Silva%" 

-- e todos os nomes e respetivos emails cujo domínio seja gmail.com
SELECT nome, email FROM clientes WHERE email LIKE "%gmail.com"

-- todos os nomes começados pela letra A e termina em S
SELECT nome FROM clientes WHERE nome LIKE "A%S"

-- IMPORTANTE: É case insensitive

-- _ (underscore) representa um caracter apenas
SELECT nome FROM clientes WHERE nome LIKE "Francisc_%"
-- franciscos e franciscas

SELECT nome FROM clientes WHERE nome LIKE "__a%"
-- todos os nomes cujo primeiro nome contém 2 letras e um A e depois qualquer coisa.

-- iremos avançar ao longo deste módulo com situações onde iremos voltar
-- muitas vezes à utilização deste tipo de operadores. Alguns não falámos sobre eles,
-- mas irão aparecer no decorrer da jornada.