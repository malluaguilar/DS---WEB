<?php
echo "4. (DESAFIO) Exercício: Loja Online (Abstração +
Herança + Encapsulamento) <br/>";
echo "-------------------------------------------------------------------------------------------------<br/>";

// ===== CLASSE ABSTRATA PRODUTO ===== //
abstract class Produto {

    private $nome; //Atributo
    private $preco; //Atributo
    private $estoque; //Atributo

    public function __construct($nome, $preco, $estoque){ //Método
        $this->nome = $nome; //Atributo do método
        $this->preco = $preco; //Atributo do método
        $this->estoque = $estoque; //Atributo do método
    }

    public function getNome(){ // Getters
        return $this->nome;
    }
    public function getPreco(){ // Getters
        return $this->preco;
    }
    public function getEstoque(){ // Getters
        return $this->estoque;
    }
    abstract public function calcularDesconto();// Método abstrato
}

// ===== CLASSE ELETRONICO ===== //
class Eletronico extends Produto { //Herança 

    public function calcularDesconto() {
        $precoFinal = $this->getPreco() * 0.90;// 10% desconto

        // Desconto extra se estoque for menor que 5
        if ($this->getEstoque() < 5) {
            $precoFinal *= 0.90;// mais 10%
        }

        return $precoFinal;
    }
}


// ===== CLASSE ROUPA ===== //
class Roupa extends Produto { //Herança
    public function calcularDesconto() {
        $precoFinal = $this->getPreco() * 0.80;// 20% desconto

        // Desconto extra se estoque for menor que 5
        if ($this->getEstoque() < 5) {
            $precoFinal *= 0.90;// mais 10%
        }
        return $precoFinal;
    }
}


// ===== INSTANCIANDO ===== //

echo "PRODUTOS DA LOJA: <br>";
echo "------------------------------<br>";
$tv = new Eletronico("TV 50 Polegadas", 3000, 3);
$camiseta = new Roupa("Camiseta Nike", 200, 10);
$notebook = new Eletronico("Notebook Dell", 5000, 2);
$jaqueta = new Roupa("Jaqueta Jeans", 400, 4);

echo $tv->getNome() . " - Preço final: R$ " . $tv->calcularDesconto() . "<br>";
echo $camiseta->getNome() . " - Preço final: R$ " . $camiseta->calcularDesconto() . "<br>";
echo $notebook->getNome() . " - Preço final: R$ " . $notebook->calcularDesconto() . "<br>";
echo $jaqueta->getNome() . " - Preço final: R$ " . $jaqueta->calcularDesconto() . "<br>";