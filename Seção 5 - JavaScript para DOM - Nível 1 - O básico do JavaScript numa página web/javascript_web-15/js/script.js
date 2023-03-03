// INSTRUÇÃO CONDICIONAL SWITCH ... CASE

// Alternativa ao If ... Else If ... Else

// --------------------------
// Estrutura
// --------------------------
// switch (valor) {
//     case 1:
//         // código para valor = 1
//         break;

//     case 2:
//         // código para valor = 2
//         break;

//     default:
//         // código para outro valor
//         break;
// }

// --------------------------
// exemplo 1
// --------------------------
// let avaliacao = 3
// switch (avaliacao) {
//     case 1:
//         console.log("Resultado mau")
//         break
//     case 2:
//         console.log("Resultado insuficiente")
//         break
//     case 3:
//         console.log("Resultado positivo")
//         break
//     case 4:
//         console.log("Resultado bom")
//         break
//     case 5:
//         console.log("Resultado excelente")
//         break
//     default:
//         console.log("Avaliação inválida")
//         break
// }

// --------------------------
// exemplo 2 - break
// --------------------------
// let valor = 10
// switch (valor) {
//     case 10:
//         console.log('Valor igual a 10')
//     case true:
//         console.log('Valor verdadeiro')
// }

// --------------------------
// exemplo 3 - maior que
// --------------------------
// let valor = 10
// switch (true) {
//     case (valor < 10):
//         console.log('Valor inferior a 10')
//         break
//     case (valor > 10):
//         console.log('Valor superior a 10')
//         break
//     default:
//         console.log('Valor igual a 10')
//         break
// }

// --------------------------
// exemplo 4 - vários case
// --------------------------
// let nome = "joao"
// switch (key) {
//     case "joao":
//     case "joaquim":
//     case "joana":
//     case "josé":
//         console.log('O nome é começa com a letra J')
//         break
//     case "fernando":
//         console.log('O nome começa com a letra F')
//         break

//     default:
//         console.log('Não foi possível identificar a letra inicial')
//         break
// }