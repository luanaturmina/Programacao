function somar(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let soma = valor_1 + valor_2

    document.getElementById('resultado').innerText = "Resultado da soma: " + soma;
    
    alert(soma)
}

function subtrair(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let subtrai = valor_1 - valor_2

    document.getElementById('resultado').innerText = "Resultado da subtração: " + subtrai;
    
    alert(subtrai)
}

function multiplicar(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let multiplica = valor_1 * valor_2
    
    document.getElementById('resultado').innerText = "Resultado da multiplicação: " + multiplica;
     
    alert(multiplica)
}

function dividir(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let dividi = valor_1 / valor_2

    document.getElementById('resultado').innerText = "Resultado da divisão: " + dividi;
    
    alert(dividi)
}