//Funções em JavaScript

function somarNumeros (num1,num2) {
    return num1 + num2;
}

let resultado = somarNumeros(5,10)
console.log(resultado)

resultado = somarNumeros(50,100)
console.log(resultado)


//Funções em JavaScript

function calcFrete (distancia, peso) {
    return (distancia * 0.5) + (peso * 2)
}
resultado = calcFrete (25,10)
console.log (resultado)

//Trabalhando com DATA e HORA 

let dataAtual = new Date ()
console.log (dataAtual.toISOString()) // Data e horário atual no padrão Internacional 

let ano = dataAtual.getFullYear();
let mes = dataAtual.getMonth() + 1; // na programação o mês começa no 0
let dia = dataAtual.getDate();
let hora = dataAtual.getHours();
let minuto = dataAtual.getMinutes();
let segundo = dataAtual.getSeconds();

console.log(`${dia}/${mes}/${ano} ${hora}:${minuto}:${segundo}`);


/// OUTRO EXEMPLO DE DATA
let hoje = new Date ();
let DiasParaAdicionar = 7;

//Criar uma nova data a partir da data atual
let NovaData = new Date (hoje);
NovaData.setDate(NovaData.getDate() + DiasParaAdicionar); //set (setar)

//toLocalString Exibe a data no formato local, ou seja, DIA/MÊS/ANO
console.log (NovaData.toLocaleDateString());


let Data1 = new Date ('2025-03-19'); 
let Data2 = new Date ('2025-03-25');

//Diferença em milissegundos
let diferencaMs = Data2 - Data1;

//Convertendo para Dias
let DiferencaDias = diferencaMs / (1000 * 60 * 60 * 24);
console.log (`Diferença: ${DiferencaDias} dias.`);  // Saída: Diferença; 6 dias


//Manipulando o DOM

document.getElementById("conteudo").innerHTML = "<p>Olá, Mundo!</p>";

var valor =document.getElementById("conteudo").innerHTML;
console.log(valor);

//Usando o setAtributte
document.getElementById("foto").setAttribute("src", "imagem.jpg");
//Usando o getAtributte
console.log(document.getElementById("foto").getAttribute("src"));

//Alterando propiedades CSS
document.getElementById("conteudo").style.backgroundColor = "lightblue";
document.getElementById("foto").stylewidth = "500px";


//Criando uma função para um botão
function MudaTamanho(){
    document.getElementById("foto").style.width = "1000px"
}