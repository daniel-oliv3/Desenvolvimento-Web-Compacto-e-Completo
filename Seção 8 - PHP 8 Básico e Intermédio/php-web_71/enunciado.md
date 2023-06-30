# ENUNCIADO
O ficheiro dados.dat é um ficheiro de texto e contém
várias linhas com dados de tipos distintos.
Imagina que temos que criar um script que vai carregar
o ficheiro de dados, analisar cada linha do seu conteúdo
e separar em arrays os dados do ficheiro com a seguinte
orientação:

- Valores numéricos positivos e negativos para 
o array $numeros_positivos e $numeros_negativos respetivamente;
- Se aparecer o valor 0, é neutro e deve ser ignorado.
- Valores alfanuméricos indiscriminados para $textos;
- Valores alfanuméricos que contêm a palavra 'TESTE'
em qualquer posição, devem ir para o array $textos_teste;