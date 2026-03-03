<?php
echo "5. (DESAFIO) Exercício: Cadastro de Documentos
(Encapsulamento + Herança) <br/>"; 
echo "-------------------------------------------------------------------------------------------------<br/>";

// ===== CLASSE DOCUMENTO ===== //
class Documento{
    private $numero; //Atributo
    public function setNumero($numero){ //Setters
        $this->numero = $numero;
    }
    public function getNumero(){ //Getters
        return $this->numero;
    }
}

// ===== CLASSE CPF ===== //
class CPF extends Documento{
    public function validar(){ //Método
        $cpf = preg_replace('/[^0-9]/', '', $this->getNumero()); // Remove pontos e traços
        if (strlen($cpf) != 11){ // Verifica se tem 11 dígitos
        return false;
        }
        if (preg_match('/(\d)\1{10}/', $cpf)){ // Verifica se todos os números são iguais
        return false;
        }

// ===== CÁLCULO DO PRIMEIRO DÍGITO =====
    for ($t = 9; $t < 11; $t++){
    $soma = 0;
    for ($i = 0; $i < $t; $i++){
        $soma += $cpf[$i] * (($t + 1) - $i);
     }
    $digito = ((10 * $soma) % 11) % 10;
    if ($cpf[$t] != $digito){
        return false;
     }
}
    return true;
}
}

// ===== TESTANDO ===== //

$meuCPF = new CPF();
$meuCPF->setNumero("50110260864"); // CPF válido para teste

echo "CPF: " . $meuCPF->getNumero() . "<br>";
if ($meuCPF->validar()){
    echo "Resultado: CPF VÁLIDO!";
} 
else{
    echo "Resultado: CPF INVÁLIDO!";
}