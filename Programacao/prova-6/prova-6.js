function soma(){
    let n1 = document.getElementById("n1").value;
    let n2 = document.getElementById("n2").value;

    let soma = Number(n1) + Number(n2);

    document.getElementById("resultado").innerText = "resultado: " + soma;
}