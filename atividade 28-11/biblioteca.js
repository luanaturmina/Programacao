function cadastrar() {
    const titulo = document.getElementById('titulo').value;
    const autor = document.getElementById('autor').value;
    const ano = document.getElementById('ano').value;
    const categoria = document.getElementById('categoria').value;
    const quantidade = document.getElementById('quantidade').value;

    if (!titulo || !autor || !ano || !categoria || !quantidade) {
        alert("Por favor, preencha todos os campos.");
        return false;
    }
    return true
}