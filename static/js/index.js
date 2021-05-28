function cadastrar(form) {
    var linha = document.createElement('tr');
    linha.insertCell(0).innerHTML += form.nome.value;
    linha.insertCell(1).innerHTML += form.email.value; 
    linha.insertCell(2).innerHTML += form.telefone.value;
    document.getElementById('tabela-pessoa').appendChild(linha);

    document.getElementById("nome").value="";
    document.getElementById("email").value="";
    document.getElementById("telefone").value="";

    return false;
}
