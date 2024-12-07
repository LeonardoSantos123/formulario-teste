// Função para validar o formulário
function validarFormulario() {

    // Obtendo os valores dos campos
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;

    // Verificar se o nome está vázio
    if (nome =='') {
        alert("Por favor, insira o nome");
        return false; // Impedir o envio do formulário
    }

    // Verificar se o e-mail está vazio
    if (email ='') {
        alert("Por favor, insira o e-mail");
        return false;
    }

    // Verificar se o e-mail está no formato correto
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!regex.test(email)) {
        alert("Por favor, insira um e-mail válido.");
        return false; // Impede o envio do formulário
    }

    return true;
}