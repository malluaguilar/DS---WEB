<?php

class Pessoa{
    public $nome;
    public $idade;

    public function __construct($novoNome, $novoIdade){
        $this->nome = $novoNome;
        $this->idade = $novoIdade;
    }

    public function exibirDados(){
        return "O nome da pessoa é: " . $this->nome. " e a idade é: " . $this->idade;
    }

    public function alterarDados ($novoNome , $novoIdade){
        $this->nome = $novoNome;
        $this->idade = $novoIdade; 
    } 
}

$pessoa = new Pessoa("Camlia" , 37);

echo $pessoa->exibirDados();

$pessoa->alterarDados ("Luiza" , 17); 

echo "<br/>" . $pessoa->exibirDados();
?>


