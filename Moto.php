<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Moto
 *
 * @author renan
 */
require_once 'Veiculo.php';
class Moto extends Veiculo{
    private $cilindrada;
    
    public function __construct($modelo, $placa, $valorDiaria, $diasAluguel, $cilindrada){
        parent::__construct($modelo, $placa, $valorDiaria, $diasAluguel);
        
        $this->cilindrada = $cilindrada;
    }

     public function getTotalDiariaBase(){
        return $this->valorDiaria * $this->diasAluguel;
    }

    public function getTotalDiariaFinal(){
        $totalBase = $this->getTotalDiariaBase();
        
        if ($this->diasAluguel > 7) {
            return $totalBase * 0.95;
        }
        
        return $totalBase;
    }

    public function getTipo() {
        return "Moto";
    }

    public function getInfoExtra(){
        return 'Cilindrada: ' . $this->cilindrada . 'cc';
    }

}
