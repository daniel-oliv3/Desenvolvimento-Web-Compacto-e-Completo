/* Instruções Condicinal If, Else if, Else */

// ======= exemplo 1 =======

//let condicao_do_tempo = 'sol' //true
let condicao_do_tempo = 'chuva' //false


//condicional (if)
if(condicao_do_tempo == 'sol'){ 
    console.log('Está bom tempo para um passeio.');
} else {
    console.log('O tempo não está bom.');
}


// ======= exemplo 2 =======

//condicional 2(comparação valores numericos)
let numero = 10;
if(numero < 10){
    console.log("O número é menor que 10");
} else {
    console.log("O número é igual ou superior a 10");
}


// ======= exemplo 3 =======
let avaliacao = 3;

if(avaliacao == 1){
    console.log("Mau resultado");
} else if (avaliacao == 2){
    console.log("Resultado negativo");
} else if (avaliacao == 3){
    console.log("Resultado positivo");
} else if (avaliacao == 4){
    console.log("Resultado bom");
} else {
    console.log("Resultado exelente!");
}