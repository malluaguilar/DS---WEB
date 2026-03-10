<?php
echo "Exercício 1 <br/>";
echo "-----------------<br/>";

class Dono{
    public string $Nome;
    public string $Numero;

    public function __construct(string $Nome, string $Numero){

    $this->Nome  =  $Nome;
    $this->Numero = $Numero;
    }
} 

class Animal{ 
   public string $Nome; //Atributo
   public string $Especie; //Atributo
   public Dono $Dono; //objeto dentro do objeto

   public function __construct (string $Nome, string $Especie , Dono $Dono){
        $this->Nome = $Nome;
        $this->Especie = $Especie;
        $this->Dono = $Dono;
   }
}

//Criando objeto interno primeiro // 

$Dono = new Dono ("João", "(11) 99999-9999");

//Passando ele para objeto interno //
$Animal = new Animal ("Rex", "Cachorro", $Dono);

echo $Animal->Nome . "  " . "|" . " " . $Animal->Especie . "<br/><br/>"; // Nome do animal e especie
echo "Dono: " . $Animal->Dono->Nome . "  ". "|" . " " . "Tel: " . $Animal->Dono->Numero . "<br><br>";

