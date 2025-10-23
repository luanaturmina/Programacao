const x = 10

const alunos = ["Lorenzo, Gabriel, Amanda"]

console.log(alunos)

function somar (n1, n2){
    return n1 + n2
}

function bomDia(nome){
    return "Bom dia meu querido(a) " + nome 
}

console.log(somar(10, 5))
console.log(somar(12, 7))
console.log(bomDia("Max"))

let titulo = document.getElementById("titulo")

titulo.innerHTML = "Alterando o texto pelo Java Script"
  
console.log(titulo)

function sendText(){
    let texto = document.getElementById("texto").value
    console.log(texto)
}


function somarNumeros(){
    let n1= Number(document.getElementById("n1").value)
    let n2 = Number (document.getElementById("n2").value)
    alert(n1+n2)
}

function subtrair(){
    let n1= Number(document.getElementById("n1").value)
    let n2 = Number (document.getElementById("n2").value)
    alert(n1-n2)
}

function multiplicar(){
    let n1= Number(document.getElementById("n1").value)
    let n2 = Number (document.getElementById("n2").value)
    alert(n1*n2)
}

function dividir(){
    let n1= Number(document.getElementById("n1").value)
    let n2 = Number (document.getElementById("n2").value)
    alert(n1/n2)
}