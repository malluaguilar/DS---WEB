<?php

class Pessoa {

    public $nome; //Atributo

    public function falar () { //Método

        return "O meu nome é ".$this->nome;

    }   
}

$Malu = new Pessoa(); //Inicio do objeto
$Malu->nome = "Maria Luiza Aguilar"; //atribuindo valor a um atributo
echo $Malu->falar(); // Exibindo 
?>