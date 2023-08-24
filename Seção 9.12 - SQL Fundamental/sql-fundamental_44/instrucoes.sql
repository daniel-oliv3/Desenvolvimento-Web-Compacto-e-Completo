/* 
Vamos olhar para algumas funções relacionadas com valores numéricos.
*/

-- quero o valor absoluto de um número (neste caso significa o valor positivo)
SELECT ABS(100) valor
SELECT ABS(-200) valor

-- quero arredondar para cima um valor com casas decimais 
SELECT CEIL(1.1) valor
-- ou
SELECT CEILING(25.3) valor

-- ou então quero arredondar para baixo
SELECT FLOOR(37.9) valor
-- ou ainda
SELECT TRUNCATE(37.3,0) valor

-- pretendo fazer uma divisão de um valor inteiro por outro
SELECT 20 DIV 2 resultado
SELECT 12.45 DIV 2.3 -- vai considerar sempre valores numéricos

-- para divisões podes usar a seguinte expressão
SELECT 2.5/0.5 resultado

-- quero saber qual é o valor maior dentro de uma coleção
SELECT GREATEST(3,20,43,23,34,21) valor

-- e o mais pequeno
SELECT LEAST(3,20,43,23,34,21) valor

-- ainda nas divisões, quero saber o "reminder" (resto ou sobra da divisão)
SELECT MOD(10,3) valor -- 10 / 3  = 9, sobra 1

-- se necessitas de fazer cálculos relacionados com circunferências ou circulos
-- tens disponível a constante de PI
SELECT PI() constante_pi

-- queres um número elevado a um determinado expoente
SELECT POW(4, 2) valor
-- ou
SELECT POWER(4, 2) valor

-- queres que a query te devolva um valor randômico?
SELECT RAND() valor
/* 
Será sempre um valor entre 0 e 1.
Se pretendes obter um inteiro dentro de um determinado intervalo,
por exemplo, entre 1 e 10
*/

SELECT FLOOR(RAND() * 10) + 1 valor
-- entre 1 e 100
SELECT FLOOR(RAND() * 100) + 1 valor

-- pretendes saber se um número é positivo, negativo ou neutro
/* 
1 positivo
0 neutro
-1 negativo
*/
SELECT SIGN(100)
SELECT SIGN(0)
SELECT SIGN(-100)

-- calcular a raiz quadrada de um número
SELECT SQRT(16) valor
