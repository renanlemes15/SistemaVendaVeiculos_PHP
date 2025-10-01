<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Veiculo
 *
 * @author renan
 */
abstract class Veiculo {
    protected $modelo;
    protected $placa;
    protected $valorDiaria;
    protected $diasAluguel;

    
    public function __construct($modelo, $placa, $valorDiaria, $diasLocacao) {
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->valorDiaria = $valorDiaria;
        $this->diasAluguel = $diasLocacao;
    }
    
    public function getTotalDiariaBase(){
        return $this->valorDiaria * $this->diasAluguel;
    }
    
    public abstract function getTotalDiariaFinal();
    
    public abstract function getTipo();
    
    public abstract function getInfoExtra();
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getValorDiaria() {
        return $this->valorDiaria;
    }

    public function getDiasAluguel(){
        return $this->diasAluguel;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setPlaca($placa): void {
        $this->placa = $placa;
    }

    public function setValorDiaria($valorDiara): void {
        $this->valorDiaria = $valorDiaria;
    }

    public function setDiasAluguel($diasLocacao): void {
        $this->diasAluguel = $diasLocacao;
    }

}
