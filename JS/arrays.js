const numeros = [10, 5, 20, 8, 15, 3, 30];

const new_numeros = numeros.filter(numero => numero > 10)

console.log(new_numeros)
//passa uma arrow function dentro do filter


const numeros2 = [2, 4, 6, 8, 10];

const newNumeros2 = numeros2.map((numero2)=>numero2 * 2)
console.log(newNumeros2)


//reduce serve para ter acesso ao previous e ao current value ao mesmo tempo
const valores = [10, 20, 30, 40, 50];
const valoresNew = valores.reduce((old, novo)=> old + novo )
console.log(valoresNew);

const usuarios = [
    { id: 1, nome: "João" },
    { id: 2, nome: "Maria" },
    { id: 3, nome: "Pedro" },
];

const user = buscarUsuario(1, usuarios)
console.log(user)

function buscarUsuario(id, usuarios){
    return usuarios.find((user) => user.id == id )
}