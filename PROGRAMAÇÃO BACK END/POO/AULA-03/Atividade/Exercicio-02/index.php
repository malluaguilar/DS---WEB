<?php
echo "Exercício 2 <br/>";
echo "-----------------<br><br/>";

class Artista {
    public $Nome;
    public $Genero;

    public function __construct($Nome, $Genero) {
        $this->Nome = $Nome;
        $this->Genero = $Genero;
    }
}

class Musica {
    public $Titulo;
    public $Duracao;
    public $Artista;

      public function __construct($Titulo, $Duracao, Artista $Artista){
        $this->Titulo = $Titulo;
        $this->Duracao = $Duracao;
        $this->Artista = $Artista;
    }
}

$Artista = new Artista("Queen", "5:55");

$Musica = new Musica("Bohemian Rhapsody", "Rock", $Artista);

echo $Musica->Titulo . " | Duração: " . $Musica->Artista->Genero . "<br><br>" ; 
echo "Artista: " . $Musica->Artista->Nome . " | Gênero: " . $Musica->Duracao . "<br><br>";

?>