
<?php
echo "1. Exercício: Sistema de Funcionários (Herança +
Encapsulamento + Polimorfismo)<br/>";
echo "-----------------------------------------------------------------------------------------------------<br/>";
//===== CLASSE ANIMAL ===== // 
//CLASSE PESSOA//
class Pessoa{
    public$idade; //Atributo
    public $nome; //Atributo
}

// ===== CLASSE FUNCIONARIO ===== //  
class Funcionario extends Pessoa { 
    protected $salario; //Atributo
    public function setSalario($salario){
        $this->salario = $salario;
    }
     public function getSalario(){
        return $this->salario;
    }
}

// ===== CLASSE DESENVOLVEDOR ===== //
class Desenvolvedor extends Funcionario{
    public function calcularBonus(){ 
        return ($this-> salario * 0.10); //Polimorfismo
    }
}


// ===== CLASSE GERENTE ===== //
class Gerente extends Funcionario{
    public function calcularBonus(){ 
        return ($this->salario * 0.20); //Polimorfismo
    }
}

// ===== INSTANCIAMENTO DESENVOLVEDOR ===== //
$Desenvolvedor1 = new Desenvolvedor();
$Desenvolvedor1->setSalario(10000);

echo "Bônus do Desenvolvedor: R$ ". $Desenvolvedor1->calcularBonus() . "<br/>"; 
echo "-------------------------<br/>";

// =====  INSTANCIAMENTO GERENTE ===== //
$Gerente1 = new Gerente();
$Gerente1->setSalario(6000);

echo "Bônus do Gerente: R$  " . $Gerente1->calcularBonus() . "<br/>";
echo "-------------------------<br/>";
