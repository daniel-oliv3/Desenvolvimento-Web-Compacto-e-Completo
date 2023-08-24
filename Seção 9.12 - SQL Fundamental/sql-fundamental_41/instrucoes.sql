/* 
APRESENTAÇÃO 041
--------------------------------
A eliminação de registos da base de dados pode acontecer em várias
frentes:
1. quando é eliminado um cliente, devemos remover todas as suas encomendas?
2. quando é eliminado um colaborador, devemos remover todas as encomendas em que 
   esteve envolvido?
3. quando removemos uma encomenda, mas os intervenientes sem mantêm (cliente e colaborador).
4. e quando removemos um produto?


Estes cenários são importantes quando estás a equacionar como vais esquematizar
a tua base de dados. É um ponto fundamental na preparação da tua base de dados.

Para o primeiro e segundo pontos, tradicionalmente é efetuado um soft delete.
O cliente ou o colaborador não é efetivamente eliminado. Existe uma coluna em
cada uma das tabelas (deleted_at, por exemplo) onde vamos colocar a data e hora
em que o cliente ou colabora foi eliminado. Os registos não são removidos da base de dados.
No momento das queries, devemos ter em atenção se essa coluna tem ou não um valor.

O ponto 3 é mais pacífico. Removes a encomenda, mas o cliente e colaborador continuam
a existir. Deves ter em atenção, contudo, que deve ser removida a encomenda e todos os dados
dessa encomenda em encomendas_produtos.
Se as tabelas forem relacionais, isto é feito automaticamente.
Se não forem, removes a encomenda e executar outra query para remover também os registos
das encomendas_produtos.

Relativamente ao caso 4, a situação é mais delicada.
Se removeres um produto, não vais querer remover esse produto das encomendas passadas,
caso contrário vais estar a comprometer o histórico das encomendas.

Neste caso pode também ser mais prático um soft delete.

IMPORTANTE: Já foi referido que este esquema não está ajustado a um exemplo real.
Serviu apenas para estudar o SQL, mas não está preparado para um cenário realista.
*/