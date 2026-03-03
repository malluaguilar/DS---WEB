<?php
//CLASSE PESSOA//
class Pessoa{
    public$idade; //Atributo
    public $nome; //Atributo
}

class Funcionario extends Pessoa { 
    protected $salario; //Atributo
    public function setSalario($n){
        $this->salario = $n;
    }
}

class Gerente extends Funcionario{
    protected
    public function calcularBonus(){
        return $this-> salario + ($this->salario*0.20);
    }
}

class Desenvolvedor extends Funcionario{
    public function calcularBonus(){
        return $this-> salario + ($this->salario*0.10);
    }
}

$Funcionario1 = new Funcionario(5000);
echo $Funcionario1->setSalario() . "<br/>"; 
echo "-------------------------<br/>";

$Gerente1 = new Gerente();
echo $Gerente1->calcularBonus() . "<br/>"; 
echo "-------------------------<br/>";
