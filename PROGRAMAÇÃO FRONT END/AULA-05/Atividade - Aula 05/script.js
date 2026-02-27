
// ========== Eventos do Mouse ========== //

// ===== Clique na DIV + texto ===== //
var area = document.getElementById("area");

var mensagem = document.getElementById("mensagem");

area.addEventListener("click", function(){
  mensagem.textContent = "Você clicou";
});

// ===== Mouse passa na DIV e ela muda de cor ===== //

area.addEventListener("mouseenter", function(){
  mensagem.textContent = "CLIQUE DUAS VEZES NA FLOR PARA ELA MUDAR!";

    let r = Math.floor(Math.random() * 256);
    let g = Math.floor(Math.random() * 256);
    let b = Math.floor(Math.random() * 256);
    area.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
});

// ===== Click para a flor mudar ===== //

var flores = document.getElementById("flores");
var foto = document.getElementById("foto");

flores.addEventListener("dblclick", function() {
    foto.src = "imagem2.jpg";
});