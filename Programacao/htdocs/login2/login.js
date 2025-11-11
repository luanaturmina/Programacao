function cadastrar(){
    const nome = document.getElementById('nome').value
    const senha = document.getElementById('senha').value
    const confirmarsenha = document.getElementById('confirmarsenha').value

    if(nome && senha === confirmarsenha){
        localStorage.setItem(nome,senha)
        return alert(`Nome ${nome} cadastrado com sucesso!`)
    }
    else{
        return alert("Usuario e/ou senha incorretos")
    }
}

function entrar(){
    const nome = document.getElementById('nome').value
    const senha = document.getElementById('senha').value

    let usuarioExistente = localStorage.getItem(nome)

    if(!usuarioExistente){
        return alert("Usuario não existe!!!")
    }

    if(nome && senha === usuarioExistente){
        localStorage.setItem(nome, senha)
        alert(`nome ${nome} logado com sucesso!`)
        window.location.href = "./cadastro.html"
    }
    else{
        return alert("Usuário e/ou senha incorretos")
    }
}
