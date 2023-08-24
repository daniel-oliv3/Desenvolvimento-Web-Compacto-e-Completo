-- Por exemplo, quero que a tabela dos produtos seja apresentada da seguinte forma:
-- o nome do produto, seguido de "." e o preco_unidade também com "." para que,
-- no final da pesquisa, tenha todas as linhas exatamente com o mesmo comprimento.
-- Muito interessante para apresentar dados num documento de pagamento com letras
-- monospaced.
SELECT RPAD(produto,20,"."), LPAD(FORMAT(preco_unidade, 2),8,".") FROM produtos
-- vamos juntar tudo numa frase apenas
SELECT CONCAT(RPAD(produto,20,"."), LPAD(FORMAT(preco_unidade, 2),8,"."), " €") frase FROM produtos
-- agora podemos ver que o comprimento de cada frase é exatamente o mesmo
SELECT LENGTH(CONCAT(RPAD(produto,20,"."), LPAD(FORMAT(preco_unidade, 2),8,"."), " €")) frase 
FROM produtos

-- Podes ter necessidade de normalizar alguns dados.
-- Por exemplo, quando existe um valor que tem espaços a mais do lado esquerdo ou direito
SELECT LTRIM("    O texto tem espaços a mais") texto
SELECT RTRIM("O texto tem espaços a mais        ") texto
SELECT TRIM("             O texto tem espaços a mais        ") texto

-- vamos buscar uma parte de uma string
SELECT nome, MID(nome, 5, 10) parte_do_nome FROM clientes
-- ou
SELECT nome, SUBSTR(nome, 5, 10) parte_do_nome FROM clientes
-- ou
SELECT nome, SUBSTRING(nome, 5, 10) parte_do_nome FROM clientes

-- pretendo repetir o nome do produto 3 vezes no mesmo resultado
-- a forma menos interessante:
SELECT CONCAT(produto, produto, produto) produto_repetido FROM produtos
-- forma correta
SELECT REPEAT(produto, 3) produto_repetido FROM produtos

-- quero inverter os nomes
SELECT REVERSE(nome) nome_invertido FROM clientes

-- quero o nome do cliente e o email com 10 espaços entre eles no mesmo resultado
SELECT CONCAT(nome, SPACE(10), email) frase FROM clientes