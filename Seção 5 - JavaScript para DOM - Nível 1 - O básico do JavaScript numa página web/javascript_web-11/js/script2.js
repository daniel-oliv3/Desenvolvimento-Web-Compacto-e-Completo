// STRINGS

//saber quantos caracters tem a string incluindo espaços
let frase1 = "Esta frase serve para testes";
console.log(frase1.length); 

//verificar se a palavra "apenas" existe na string (exibe o número de linha (21) não existe a palavra (-1))
let frase2 = "Esta frase não serve apenas para testes";
console.log(frase2.indexOf("apenas")); 

//Concatenar duas strings (juntar)
let frase3 = "Esta frase está dividida em duas.";
let frase4 = "Esta é a segunda parte";
let frase_final = frase3 + " " + frase4;

console.log(frase_final);


