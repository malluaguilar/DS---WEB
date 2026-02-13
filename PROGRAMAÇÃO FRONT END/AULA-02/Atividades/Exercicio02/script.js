document.getElementById("foto1").setAttribute("src", "imagem1.jpg");

function MudaFoto2(){
    document.getElementById("foto2").setAttribute("src","imagem2.jpg");
    document.getElementById("foto1").removeAttribute("src","imagem1.jpg");
    document.getElementById("foto3").removeAttribute("src","imagem3.jpg");
    console.log (document.getElementById('foto2').getAttribute('src'));
}

function MudaFoto3(){
    document.getElementById("foto3").setAttribute("src","imagem3.jpg");
    document.getElementById("foto1").removeAttribute("src","imagem1.jpg");
    document.getElementById("foto2").removeAttribute("src", "imagem2.jpg");
    console.log (document.getElementById('foto3').getAttribute('src'));
}