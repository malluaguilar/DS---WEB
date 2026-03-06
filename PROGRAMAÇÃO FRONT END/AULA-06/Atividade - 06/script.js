var formulario = document.getElementById("formulario"); //Pegando os dados do formulário

formulario.addEventListener("submit", function(event){ // Quando o botão submit for criado: 

event.preventDefault(); //Previnir da página recarregar


// ===== Campos ===== //
var nome = document.getElementById("nome").value; //Pegando o valor do nome que foi capturado pelo usuario
var email = document.getElementById("email").value; //Pegando o valor do email que foi capturado pelo usuario
var senha = document.getElementById("senha").value; //Pegando o valor da senha que foi capturado pelo usuario
var confirmaSenha = document.getElementById("confirma-senha").value; //Pegando o valor do confirme a senha que foi capturado pelo usuario
var cpf = document.getElementById("cpf").value; //Pegando o valor do CPF que foi capturado pelo usuario
var telefone = document.getElementById("telefone").value; //Pegando o valor do telefone que foi capturado pelo usuario
var cep = document.getElementById("cep").value; //Pegando o valor do CEP que foi capturado pelo usuario
var data = document.getElementById("data-nascimento").value; //Pegando o valor da data de nascimento que foi capturado pelo usuario
var valor = document.getElementById("valor").value; //Pegando o valor do valor que foi capturado pelo usuario 
var url = document.getElementById("url").value; //Pegando o valor da url que foi capturado pelo usuario
var cartao = document.getElementById("cartao").value; //Pegando o valor do cartão que foi capturado pelo usuario
//===== Spans Erros ===== //
var erroNome = document.getElementById("erro-nome"); //Capturando o span de erro do NOME
var erroEmail = document.getElementById("erro-email"); //Capturando o span de erro do EMAIL
var erroSenha = document.getElementById("erro-senha"); //Capturando o span de erro da SENHA
var erroCpf = document.getElementById("erro-cpf"); //Capturando o span de erro do CPF
var erroTelefone = document.getElementById("erro-telefone"); //Capturando o span de erro do TELEFONE
var erroCep = document.getElementById("erro-cep"); //Capturando o span de erro do CEP
var erroData = document.getElementById("erro-data-nascimento"); //Capturando o span de erro da DATA DE NASC
var erroValor = document.getElementById("erro-valor"); //Capturando o span de erro do VALOR
var erroUrl = document.getElementById("erro-url"); //Capturando o span de erro da URL
var erroCartao = document.getElementById("erro-cartao"); //Capturando o span de erro do CARTÃO


// ===== Validação NOME ===== //
var regexNome = /^[a-zA-Z\s]+$/; // O nome pode ser letra maíuscula e mínuscula de A até Z 
if(nome.length < 3){ //Length significa quantidade de caracteres 
    erroNome.textContent = "Nome deve ter no mínimo 3 caracteres"; //Capturando o span "erro nome"
}else if(!regexNome.test(nome)){
    erroNome.textContent = "Nome não pode conter números ou caracteres especiais";
}else{
    erroNome.textContent = ""; 
}
// ===== Validação EMAIL ===== // 
var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
if(!regexEmail.test(email)){
    erroEmail.textContent = "Email inválido";
}else{
    erroEmail.textContent = "";
}
// ===== Validação SENHA ===== //
var regexSenha = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;

if(!regexSenha.test(senha)){
    erroSenha.textContent = "Senha fraca";
}
else if(senha !== confirmaSenha){
    erroSenha.textContent = "As senhas não são iguais";
}
else{
    erroSenha.textContent = "";
}

// ===== Validação CPF ===== //
var regexCpf = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
if(!regexCpf.test(cpf)){
    erroCpf.textContent = "CPF inválido";
}else{
    erroCpf.textContent = "";
}
// ===== Validação TELEFONE ===== //

var regexTelefone = /^\(\d{2}\)\s\d{4,5}-\d{4}$/;

if(!regexTelefone.test(telefone)){
    erroTelefone.textContent = "Telefone inválido";
}else{
    erroTelefone.textContent = "";
}

// ===== Validação CEP ===== //

var regexCep = /^\d{5}-\d{3}$/;

if(!regexCep.test(cep)){
    erroCep.textContent = "CEP inválido";
}else{
    erroCep.textContent = "";
}

// ===== Validação DATA ===== //

var regexData = /^\d{2}\/\d{2}\/\d{4}$/;

if(!regexData.test(data)){
    erroData.textContent = "Data inválida";
}else{
    erroData.textContent = "";
}
// ===== Validação URL ===== //

var regexUrl = /^(http:\/\/|https:\/\/)/;

if(!regexUrl.test(url)){
    erroUrl.textContent = "URL inválida";
}else{
    erroUrl.textContent = "";
}
// ===== Validação CARTÃO ===== //
var regexCartao = /^(?:\d{4}\s?){4}$/;
if(!regexCartao.test(cartao)){
    erroCartao.textContent = "Cartão deve ter 16 dígitos";
}else{

    // Identificação da bandeira
    if(/^4/.test(cartao)){
        erroCartao.textContent = "Cartão válido - Bandeira VISA";
    }
    else if(/^5[1-5]/.test(cartao)){
        erroCartao.textContent = "Cartão válido - Bandeira MasterCard";
    }
    else if(/^3[47]/.test(cartao)){
        erroCartao.textContent = "Cartão válido - Bandeira American Express";
    }
    else{
        erroCartao.textContent = "Cartão válido - Bandeira não identificada";
    }

}