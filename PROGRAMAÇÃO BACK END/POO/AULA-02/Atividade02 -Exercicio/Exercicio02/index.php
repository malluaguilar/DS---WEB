<?php
echo "2. Exercício: Sistema de Animais (Herança +
Polimorfismo + Abstração)<br/>";
echo "----------------------------------------------------------------------------------------<br/>";
//===== CLASSE ANIMAL ===== // 
 abstract class Animal{ //Abstração
    abstract public function FazerSom(); //Abstração
    public function Mover() {
        return "Anda"; 
    }
 }

 //===== CLASSE SAPO ===== //
class Sapo extends Animal{ //Herança
    public function FazerSom(){
    return "coaxar"; //Polimorfismo
} 
}

//===== CLASSE CAVALO =====//
class Cavalo extends Animal{ //Herança
    public function FazerSom(){
    return "relinchar"; //Polimorfismo
    }
    public function Mover(){
        return "Galopa e " . parent:: Mover(); //Parent
    }
}

//===== CLASSE TARTARUGA =====//
class Tartaruga extends Animal{ //Herança
    public function FazerSom(){
    return "grunhidos"; //Polimorfismo
}
}


// ===== INSTANCIANDO SAPO ===== //
echo "SAPO: <br/>";
$SapoCururu = new Sapo();
echo $SapoCururu->FazerSom() . "<br/>";
echo $SapoCururu->Mover() . "<br/>"; 
echo "-------------------------<br/>";

// ===== INSTANCIANDO CAVALO ===== //
echo "CAVALO: <br/>";
$Spirit = new Cavalo();
echo $Spirit->FazerSom() . "<br/>";
echo $Spirit->Mover() . "<br/>"; 
echo "-------------------------<br/>";

// ===== INSTANCIANDO TARTARUGA ===== //
echo "TARTARUGA: <br/>";
$TartarugaNinja = new Tartaruga();
echo $TartarugaNinja->FazerSom() . "<br/>";
echo $TartarugaNinja->Mover() . "<br/>"; 
echo "-------------------------<br/>";