// ARRAYS
let nomes = ["joao", "ana", "carlos"];

// -------------------------------
// alterar dados de um array
// -------------------------------
 nomes[1] = "maria";
 console.table(nomes);

// -------------------------------
// quantos elementos tem um array
// -------------------------------
 console.log(nomes.length);

// -------------------------------
// adicionar mais elementos no final do array
// -------------------------------
 nomes.push("joaquim");
 console.table(nomes);

// -------------------------------
// adicionar elementos no início do array
// -------------------------------
 nomes.unshift("josé");
 console.table(nomes);

// -------------------------------
// remover elemento do início
// -------------------------------
 nomes.shift();
 console.table(nomes);

// -------------------------------
// remover elemento do fim
// -------------------------------
 nomes.pop();
 console.table(nomes);

// -------------------------------
// remover elementos permite guardar o valor removido numa variável
// -------------------------------
 let removido = nomes.pop();
 console.log(removido);
 console.table(nomes);

// -------------------------------
// remover e/ou adicionar elementos em qualquer posição dentro do array
// -------------------------------
 console.table(nomes);
 nomes.splice(1,2,"joaquim", "manuel", "rui");
 console.table(nomes);


// -------------------------------
// ver eliminados
// -------------------------------
 console.table(nomes);
 let eliminados = nomes.splice(1,2,"joaquim", "manuel", "rui");
 console.table(nomes);
 console.table(eliminados);

 // -------------------------------
// ver eliminados
// -------------------------------
// console.table(nomes);
// let eliminados = nomes.splice(1,0,"joaquim", "manuel", "rui");
// console.table(nomes);
// console.table(eliminados);