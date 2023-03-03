// ARRAYS
let nomes = ["joao", "ana", "carlos"];

// -------------------------------
// extrair partes de um array (retorna um novo array)
// -------------------------------
 console.table(nomes);
 let nomes_extraidos = nomes.slice(0,2);
 console.table(nomes_extraidos);
// console.table(nomes);

// -------------------------------
// juntar dois arrays
// -------------------------------
 console.table(nomes);
 let outros_nomes = ["joaquim", "carla", "manuel"];
 nomes = nomes.concat(outros_nomes);
 console.table(nomes);

// -------------------------------
// procurar item num array
// -------------------------------
 console.log(nomes.includes("carlos"));

// -------------------------------
// procurar posição de item num array
// -------------------------------
 console.table(nomes);
 console.log(nomes.indexOf("ana"));

// -------------------------------
// converter um array numa string
// -------------------------------
 let todos_os_nomes = nomes.join("-");
 console.log(todos_os_nomes);

// IMPORTANTE: outros métodos envolvem funções e metodologias mais avançadas ...