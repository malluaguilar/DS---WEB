<?php
//CLASSE CABELO//
class Cabelo {

    public $tamanho; //Atributo
    public $cor; //Atributo
    public $tipo; //Atributo
    public $espessura; //Atributo
    public $volume; //Atributo 

    public function amarrar (){
        return "Eu amarro meu cabelo de tipo ".$this->tipo . "<br>"; //Método
    }
    public function pentear (){ 
        return "Eu gosto do meu cabelo com volume ".$this->volume . "<br>"; //Método
    }
    public function cortar () {
        return "Eu preciso cortar meu cabelo de ".$this->tamanho . "<br>"; //Método
    }

}

$CabeloCacheado = new Cabelo();  //Inicio do objeto
$CabeloCacheado->volume = "Alto."; //atribuindo valor a um atributo
echo $CabeloCacheado->pentear(); // Exibindo 

$CabeloLiso = new Cabelo();  //Inicio do objeto
$CabeloLiso->tamanho = "60cm."; //atribuindo valor a um atributo
echo $CabeloLiso->cortar(); // Exibindo 

$CabeloOndulado = new Cabelo();  //Inicio do objeto
$CabeloOndulado->tipo = "Ondulado."; //atribuindo valor a um atributo
echo $CabeloOndulado->amarrar(); // Exibindo 

echo "<br>"; 
echo "<br>"; 

//CLASSE MAQUIAGEM//
class Maquiagem {

public $cor; //Atributo
public $marca; //Atributo
public $tamanho; //Atributo
public $preço; //Atributo
public $tipo; //Atributo 

public function sombrear (){
        return "Eu sombreio meus olhos com a cor:  ".$this->cor . "<br>"; //Método
    }

public function contornar (){
        return "Eu uso o contorno da marca: ".$this->marca ."<br>"; //Método
    }

public function aplicar (){
        return "Eu aplico base de cobertura:  ".$this->tipo . "<br>"; //Método
    }

}

$MaquiagemSimples = new Maquiagem();  //Inicio do objeto
$MaquiagemSimples->cor = "AZUL.";  //atribuindo valor a um atributo
echo $MaquiagemSimples->sombrear(); // Exibindo 

$MaquiagemAvançada = new Maquiagem();  //Inicio do objeto
$MaquiagemAvançada->marca = "OCÉANE.";  //atribuindo valor a um atributo
echo $MaquiagemAvançada->contornar(); // Exibindo 

$MaquiagemProfissional = new Maquiagem();  //Inicio do objeto
$MaquiagemProfissional->tipo = "ALTA.";  //atribuindo valor a um atributo
echo $MaquiagemProfissional->aplicar(); // Exibindo 

echo "<br>"; 
echo "<br>"; 

//CLASSE TÊNIS//
class Tênis {

    public $cor; //Atributo
    public $preço; //Atributo
    public $tamanho; //Atributo
    public $marca; //Atributo
    public $modelo; //Atributo 

    public function Calçar (){
        return "Eu calço meu tênis de tamanho:  ".$this->tamanho . "<br>"; //Método
    }
    public function Amarrar (){
        return "Eu amarro meu tênis com o cadarço da cor: ".$this->cor ."<br>"; //Método
    }

    public function Limpar (){
        return "Eu limpo meu tênis da marca:  ".$this->marca . "<br>"; //Método
    }
}

$TenisCasual = new Tênis();  //Inicio do objeto
$TenisCasual ->tamanho = "37BR.";  //atribuindo valor a um atributo
echo $TenisCasual->Calçar(); // Exibindo 

$TenisEsportivo = new Tênis();  //Inicio do objeto
$TenisEsportivo->cor = "Branco.";  //atribuindo valor a um atributo
echo $TenisEsportivo->Amarrar(); // Exibindo 

$TenisInfantil = new Tênis();  //Inicio do objeto
$TenisInfantil->marca = "Nike.";  //atribuindo valor a um atributo
echo $TenisInfantil ->Limpar(); // Exibindo 

echo "<br>"; 
echo "<br>"; 

//CLASSE ROUPAS//

class Roupas{

    public $tecido; //Atributo
    public $cor; //Atributo
    public $preço; //Atributo
    public $marca; //Atributo
    public $tamanho; //Atributo

       public function Experimentar (){
        return "Eu experimentei a roupa da marca:   ".$this->marca . "<br>"; //Método
    }
    public function Comprar (){
        return "Eu compro roupas com o tecido de:  ".$this->tecido ."<br>"; //Método
    }

    public function Usar (){
        return "Eu uso roupas de tamanho:   ".$this->tamanho . "<br>"; //Método
    }

}

$RoupasDeAcademia = new Roupas();  //Inicio do objeto
$RoupasDeAcademia->marca = "Lupo.";  //atribuindo valor a um atributo
echo $RoupasDeAcademia->Experimentar(); // Exibindo 

$RoupaDeSair = new Roupas();  //Inicio do objeto
$RoupaDeSair->tecido = "Algodão.";  //atribuindo valor a um atributo
echo $RoupaDeSair->Comprar(); // Exibindo 

$RoupasDeFicarEmCasa = new Roupas();  //Inicio do objeto
$RoupasDeFicarEmCasa->tamanho = "P ou PP.";  //atribuindo valor a um atributo
echo $RoupasDeFicarEmCasa->Usar(); // Exibindo 

echo "<br>"; 
echo "<br>"; 

//CLASSE PLANTAS//

class Plantas{

    public $cor; //Atributo
    public $aroma; //Atributo
    public $tamanho; //Atributo
    public $espécies; //Atributo
    public $região; //Atributo

    public function Comprar (){
        return "Eu comprei uma planta da cor: ".$this->cor . "<br>"; //Método
    }
    public function Cheirar (){
        return "Eu senti o cheiro de uma planta com aroma: ".$this->aroma ."<br>"; //Método
    }

    public function Plantar (){
        return "Eu plantei uma planta da espécie: ".$this->espécies . "<br>"; //Método
    }

}

$PlantasPquenas = new Plantas();  //Inicio do objeto
$PlantasPquenas->cor = "Rosa.";  //atribuindo valor a um atributo
echo $PlantasPquenas->Comprar(); // Exibindo 

$PlantasMédias = new Plantas();  //Inicio do objeto
$PlantasMédias->aroma = "Suave.";  //atribuindo valor a um atributo
echo $PlantasMédias->Cheirar(); // Exibindo 

$PlantasGrandes = new Plantas();  //Inicio do objeto
$PlantasGrandes->espécies = "Rosas.";  //atribuindo valor a um atributo
echo $PlantasGrandes->Plantar(); // Exibindo 

echo "<br>"; 
echo "<br>"; 
?> 