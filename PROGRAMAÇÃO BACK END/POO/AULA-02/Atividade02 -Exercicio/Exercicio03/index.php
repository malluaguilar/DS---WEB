<?php
echo "3. Exercício: Controle de Veículos (Encapsulamento
+ Herança + Polimorfismo) <br/>"; 
echo "-------------------------------------------------------------------------------------------------<br/>";

//===== CLASSE VEICULO =====// 
class Veiculo{
    public $Marca; //Atributo
    public $Modelo; //Atributo
    private $Velocidade; //Atributo privado 

    public function setVelocidade($Velocidade){ //Setter
        $this->Velocidade = $Velocidade;
    }

    public function getVelocidade(){ //Getters
        return $this->Velocidade;
    }
}

//===== CLASSE CARRO ======//
class Carro extends Veiculo{ //Herança
    public function Acelerar(){ //Método
        $this->setVelocidade($this->getVelocidade() + 10);
        return "O Carro acelerou para: " . $this->getVelocidade() . " KM/H."; //Polimorfismo
    }
}

//===== CLASSE MOTO =====// 
class Moto extends Veiculo{ //Herança
    public function Acelerar(){ //Método
        $this->setVelocidade($this->getVelocidade() + 30);
        return "A moto acelerou para: " . $this->getVelocidade() . " KM/H."; //Polimorfismo
    }
}

//===== INSTANCIAMENTO CARRO =====//
echo "CARRO: <br/>";
$HondaCivic = new Carro;
$HondaCivic->Marca = "Honda";
$HondaCivic->Modelo = "Civic"; 
$HondaCivic->setVelocidade (0);

echo $HondaCivic->Acelerar() . "<br/>"; // Exibindo velocidade
echo "---------------------------------------<br/>";

//===== INSTANCIAMENTO MOTO =====//
echo "MOTO: <br/>";
$MotoBMW = new Moto;
$MotoBMW->Marca = "BMW";
$MotoBMW->Modelo = "GS -1200"; 
$MotoBMW->setVelocidade (0);

echo $MotoBMW->Acelerar() . "<br/>"; //Exibindo velocidade
echo "---------------------------------------<br/>";