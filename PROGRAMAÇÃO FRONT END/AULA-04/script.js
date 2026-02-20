
//Criando o contador de Itens
var contadorItem = 0 /// Diferenciar item 1 do 2 por exemplo 

//Função Adicionar 
function adicionar(){
    // Incrementando o contador de itens
    contadorItem ++ ///++ significa Incrementar
    let novoItem = document.createElement ("li"); //Crio o item
    let novaTarefa = document.getElementById("novaTarefa").value //Captura o valor do campo
    novoItem.textContent = contadorItem + " - " + novaTarefa //Adiciono texto ao meu item
    novoItem.setAttribute("id",contadorItem)//Atribuo um ID

    //Criando o botão de remover
    let botaoRemover = document.createElement("button")
    botaoRemover.textContent = "Remover" //Adiciona texto ao botão
    botaoRemover.setAttribute("onclick","remover("+contadorItem+")") //Adiciona uma função ao botão

    novoItem.appendChild(botaoRemover) //Adiciona o botão ao novo item
    document.getElementById("lista").appendChild(novoItem);
}

//Função Remover
function remover(itemLista){
    var item = document.getElementById(itemLista); ///Captura de elemento
    document.getElementById("lista").removeChild(item); ///Removendo
} 
