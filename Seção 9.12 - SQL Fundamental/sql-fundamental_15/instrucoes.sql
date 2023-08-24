/*
Uma característica muito presente em tabelas de bases de dados
são colunas que aceitam ter um valor NULL.
NULL significa ausência de valor e é muitas vezes o valor padrão
de uma determinada coluna.

Podes facilmente observar que as tabelas da nossa base de dados
estão todas preenchidas. Não existem campos com o valor NULL.
Vamos alterar temporariamente essa situação.

Vamos abrir a tabela dos dados dos colaboradores (por ser uma das
que tem menos registos) e vamos colocar com valor NULL nos 3 elementos
que têm na coluna ativo o valor 0.

Poderíamos fazer isto com uma query, mas como ainda não chegámos ao
UPDATE, vamos fazer diretamente no HeidiSQL.

Agora temos 3 registos de colaboradores que têm ativo = NULL

*/

-- selecionar todos os colaboradores que têm o ativo com valor NULL
SELECT * FROM colaboradores WHERE ativo IS NULL
-- repara que não usei a expressão ativo = NULL
-- se experimentar essa versão, vais ver que não temos resultado.
-- O mesmo acontece se colocarmos o NULL como uma string.

-- De igual modo, se quisermos selecionar todos os colaboradores
-- cujo valor de ativo seja diferente de NULL...
SELECT * FROM colaboradores WHERE ativo IS NOT NULL

-- e apenas para concluir, vamos repor os valores originais
-- para prosseguir com o estudo.