<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Locacao
 *
 * @author renan
 */
class Locacao {
    private array $veiculos = [];
    
    public function addVeiculo($v){
        $this->veiculos[] = $v;
    }
    
    public function getTotalLocacaoBase(){
        $totalBase=0;
        foreach($this->veiculos as $v){
            $totalBase += $v->getTotalDiariaBase();
        }      
        
        return $totalBase;
    }
    
    public function getTotalLocacaoFinal(){
        $totalFinal=0;
        foreach($this->veiculos as $v){
            $totalFinal += $v->getTotalDiariaFinal();
        }
        
        return $totalFinal;
    }
    
    public function getVeiculos(){
        return $this->veiculos;
    }
}

