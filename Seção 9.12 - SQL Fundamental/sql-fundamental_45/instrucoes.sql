/* 
Vamos concluir esta abordagem, olhando para funções relacionadas com
tratamento de datas.
As datas e horas são muito importantes numa base de dados, porque permitem
deixar o registo do momento em que determinado acontecimento teve lugar.
É quase certo que vais usar este tipo de valores nos teus projetos.
*/

-- quero saber a data e hora atual do servidor de MySQL
SELECT CURRENT_TIMESTAMP() data_hora
-- ou
SELECT NOW() data_hora

-- quero apenas a data atual
SELECT CURDATE()
-- apenas a hora
SELECT CURTIME()

-- equivalente a
SELECT CURRENT_DATE()
SELECT CURRENT_TIME()

-- quero saber o unix timestamp atual
SELECT UNIX_TIMESTAMP()

-- agora vamos ver como operar com datas que já se encontram na base de dados.
-- vamos pegar o exemplo das datas das encomendas
-- quero ver apenas a data das encomendas (excluir as horas)
SELECT DATE(data_hora) FROM encomendas
-- ou só a hora
SELECT TIME(data_hora) FROM encomendas

-- vamos buscar a data e hora da encomenda 2
SELECT data_hora FROM encomendas WHERE id = 2

-- agora vamos pegar nessa data e vamos adicionar 5 dias
SELECT data_hora, ADDDATE(data_hora, INTERVAL 5 DAY) FROM encomendas
-- vamos adicionar 6 meses
SELECT data_hora, ADDDATE(data_hora, INTERVAL 6 MONTH) FROM encomendas
-- vamos adicionar 30 segundos
SELECT data_hora, ADDDATE(data_hora, INTERVAL 30 SECOND) FROM encomendas

/* 
Vamos olhar para a data e hora da encomenda número 50
*/
SELECT data_hora FROM encomendas WHERE id = 50

-- quero apenas o ano dessa encomenda
SELECT data_hora, YEAR(data_hora) ano FROM encomendas WHERE id = 50
-- o mês
SELECT data_hora, MONTH(data_hora) `mês` FROM encomendas WHERE id = 50
-- o dia
SELECT data_hora, DAY(data_hora) dia FROM encomendas WHERE id = 50
-- a hora
SELECT data_hora, HOUR(data_hora) hora FROM encomendas WHERE id = 50
-- o minuto
SELECT data_hora, MINUTE(data_hora) minuto FROM encomendas WHERE id = 50
-- o segundo
SELECT data_hora, SECOND(data_hora) segundo FROM encomendas WHERE id = 50

-- quero a data num formato diferente
SELECT data_hora, DATE_FORMAT(data_hora, "%d-%m-%Y") `data` FROM encomendas WHERE id = 50
-- ou a data num formato em que o ano aparece apenas com os dois últimos dígitos
SELECT data_hora, DATE_FORMAT(data_hora, "%d/%m/%y") `data` FROM encomendas WHERE id = 50

-- quero saber o dia do mês de uma data
SELECT DAYOFMONTH(NOW())
SELECT data_hora, DAYOFMONTH(data_hora) `data` FROM encomendas WHERE id = 50

-- quero saber o dia da semana de uma determinada data
SELECT DAYOFWEEK(NOW())
SELECT data_hora, DAYOFWEEK(data_hora) dia_da_semana FROM encomendas WHERE id = 50
SELECT data_hora, DAY(data_hora) dia_da_semana FROM encomendas WHERE id = 50
/* 
1 = Domingo
...
7 = Sábado
Mas podemos saber o dia pelo nome. Por padrão vem em inglês.
*/
SELECT data_hora, DAYNAME(data_hora) dia_da_semana FROM encomendas WHERE id = 50

/* 
O MySQL dá a possibilidade de definir a língua através da alteração de uma
das suas variáveis de configuração.
*/
SET@@lc_time_names = "pt_PT";
SET@@lc_time_names = "pt_BR";
SELECT data_hora, DAYNAME(data_hora) dia_da_semana FROM encomendas WHERE id = 50

-- e também podemos saber o dia do ano.
SELECT data_hora, DAYOFYEAR(data_hora) dia_do_ano FROM encomendas WHERE id = 50
SELECT data_hora, DAYOFYEAR(data_hora) dia_do_ano FROM encomendas WHERE id = 3550
-- e a semana do ano
SELECT data_hora, WEEKOFYEAR(data_hora) semana_do_ano FROM encomendas WHERE id = 3550

/* 
A quantidade de funções associadas às datas e horas é imensa,
uma vez que é uma estrutura de informação muito importante para
as bases de dados.
*/