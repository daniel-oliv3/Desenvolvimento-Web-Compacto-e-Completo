/*
A cláusula WHERE permite definir condições que identificam
quais os registos que vão ser afetados pela nossa query.

Quando usada com o SELECT, vai definir condições para devolver
os dados que correspondem a essa condição.

Quando usada com INSERT, UPDATE ou DELETE, vai efetuar alterações
dos dados apenas nas linhas que correspondem à condição definida.

Por agora vamos limitar o seu uso ao SELECT, porque ainda não
falámos das outras instruções.
*/

-- buscar apenas os clientes que são da cidade de lisboa.
SELECT * FROM clientes WHERE cidade = "Lisboa"

-- buscar os clientes que são so sexo masculino
SELECT * FROM clientes where sexo = "m"

-- com o WHERE podemos usar várias condições em sequência.
-- por exemplo, quero saber quantos clientes são de Coimbra e do sexo feminino
SELECT * FROM clientes WHERE cidade = "COIMBRA" AND sexo = "f"

-- A cláusula WHERE introduz no processo duas outras realidades:
-- operadores de comparação e operadores lógicos.
-- vamos falar deles em mais detalhe ao longo do módulo.
-- no exemplo anterior já vimos a coluna cidade = "COIMBRA", a expressão AND e sexo = "f"

-- Apenas pode existir uma cláusula where em cada query.
-- Ela dá início às condições da própria query. Se queremos adicionar
-- mais condições, usamos operadores lógicos que iremos ver em mais detalhe noutros vídeos

-- Iremos também voltar ao WHERE quando falarmos sobre INSERT, UPDATE e DELETE 