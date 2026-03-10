<?php
echo "Exercício 3 <br/>";
echo "-----------------<br/>";

class Fabricante {
    public $Nome;
    public $PaisdeOrigem;

    public function __construct($Nome, $PaisdeOrigem) {
        $this->Nome = $Nome;
        $this->PaisdeOrigem = $PaisdeOrigem;
    }
}

class Motor {
    public $Potencia;
    public $Combustivel;

    public function __construct($Potencia, $Combustivel) {
        $this->Potencia = $Potencia;
        $this->Combustivel = $Combustivel;
    }
}

class Modelo {
    public $Modelo;
    public $Ano;
    public $Fabricante;
    public $Motor;

    public function __construct($Modelo, $Ano, Fabricante $Fabricante, Motor $Motor){
        $this->Modelo = $Modelo;
        $this->Ano = $Ano;
        $this->Fabricante = $Fabricante;
        $this->Motor = $Motor;
    }
}

$Fabricante = new Fabricante ("Honda", "Japão");
$Motor = new Motor("150cv", "Flex");

$Modelo = new Modelo ("Civic", "2024", $Fabricante, $Motor);

echo $Modelo->Modelo . " |  " . $Modelo->Ano . "<br>";
echo "Fabricante: " . $Modelo->Fabricante->Nome . " | Origem: " . $Modelo->Fabricante->PaisdeOrigem . "<br>";
echo "Motor: " . $Modelo->Motor->Potencia . " | Combustível: " . $Modelo->Motor->Combustivel;

?>