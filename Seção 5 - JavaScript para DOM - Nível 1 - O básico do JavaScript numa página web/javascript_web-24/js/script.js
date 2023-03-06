// OBJETOS

// ------------------------------------
// definir um objeto
// ------------------------------------
let pessoa = {
    
    // propriedades
    nome: "Daniel",
    apelido: "Sapup3",
    idade: 18,
    genero: "masculino",

    // métodos
    apresentar_nome: function() { //função anonima, mais o nome esta a frente
        return this.nome + " " + this.apelido;
    },

    apresentar_idade: function() { 
        return this.idade + " anos de idade"; 
    },

    hobbies: [
        'Programação',
        'Cinema',
        'Música'
    ]
}

// NOTA: As chaves podem surgir também com aspas.

// ------------------------------------
// apresentar dados de um objeto
// ------------------------------------
console.log(pessoa.nome);
console.log(pessoa['genero']);
console.log(pessoa.apresentar_nome());
console.log(pessoa.apresentar_idade());
console.log(pessoa.hobbies);
console.table(pessoa.hobbies);

// ------------------------------------
// apresentar todas as propriedades do objeto
// ------------------------------------
// for(let propriedade in pessoa){
//     console.log(pessoa[propriedade]);
// }


// ------------------------------------
// adicionar propriedades ao objeto
// ------------------------------------
// pessoa.email = "joao.ribeiro@gmail.com";
// pessoa['mobile'] = "123456789";
// console.log(pessoa.email);
// console.log(pessoa.mobile);

// ------------------------------------
// eliminar propriedades de um objeto
// ------------------------------------
// delete pessoa.idade;
// console.log(pessoa.idade);   // indefinido


// ------------------------------------
// MUITO IMPORTANTE: valor vs referência
// Os objetos são tratados como referências na memória.
// Quando copiamos um objeto a partir de outro,
// não estamos a criar um novo objeto. Apenas uma nova referência.
// ------------------------------------

// let transporte = {
//     tipo: "automóvel",
//     ano: 2032,
//     marca: "audi"
// }

// let novo_transporte = transporte;
// novo_transporte.marca = "mercedes";

// console.table(transporte);
// console.table(novo_transporte);

// -------------------------------------
// uma forma de criar um novo objeto a partir de outro:
// let transporte_final = Object.assign({}, transporte);
// transporte_final.marca = "nissan";
// console.table(transporte);
// console.table(transporte_final);

// -------------------------------------
// outra forma: spread operator;
// let transporte2 = { ...transporte };
// transporte2.marca = "tesla";
// console.table(transporte);
// console.table(transporte2);