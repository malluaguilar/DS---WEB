//Criando o contador de Itens
var contadorAluno = 0 

//Função Cadastrar 
function Cadastrar(){

     contadorAluno ++;
     let novoAluno = document.createElement ("li");
     let novoNome = document.getElementById("nome").value;
     let novoEmail = document.getElementById("email").value;
     let novoRM = document.getElementById("rm").value;
     let novoTelefone = document.getElementById("telefone").value;
     let novaTurma = document.getElementById("turma").value;
     novoAluno.innerHTML =
     contadorAluno + "<br>" + 
     "NOME: " + novoNome + "<br>" + 
     "EMAIL:  " + novoEmail + "<br>" +
     "RM: " + novoRM + "<br>" + 
     "TELEFONE: " + novoTelefone + "<br>" +
     "TURMA: " + novaTurma + "<br> "
     novoAluno.setAttribute("id",contadorAluno);
     document.getElementById("lista").appendChild(novoAluno);

//Criando o botão de remover  
    let botaoRemover = document.createElement("button")
    botaoRemover.textContent = "Remover" //Adiciona texto ao botão
    botaoRemover.setAttribute("onclick","remover("+contadorAluno+")") //Adiciona uma função ao botão

    novoAluno.appendChild(botaoRemover) //Adiciona o botão ao novo item
    document.getElementById("lista").appendChild(novoAluno);
}

//Função Remover
function remover(itemLista){
    var item = document.getElementById(itemLista); ///Captura de elemento
    document.getElementById("lista").removeChild(item); ///Removendo
} 
