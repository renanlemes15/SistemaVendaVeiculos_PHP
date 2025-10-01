<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Carro
 *
 * @author renan
 */
require_once 'Veiculo.php';
class Carro extends Veiculo{
    private $portas;
    
    public function __construct($modelo, $placa, $valorDiaria, $diasLocacao,$portas){
        parent::__construct($modelo, $placa, $valorDiaria, $diasLocacao);
        
        $this->portas = $portas;
    }
    
    public function getPortas() {
        return $this->portas;
    }

    public function setPortas($portas): void {
        $this->portas = $portas;
    }

    public function getTotalDiariaBase(){
        return $this->valorDiaria * $this->diasAluguel;
    }

    public function getTotalDiariaFinal(){
        $totalBase = $this->getTotalDiariaBase();
        
        if ($this->diasAluguel > 5) {
            return $totalBase * 1.08;
        }
        
        return $totalBase;
    }

    public function getTipo() {
        return "Carro";
    }
    
    public function getInfoExtra(){
        return 'Portas: ' . $this->portas;
    }

}
