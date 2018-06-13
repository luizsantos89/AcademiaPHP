<?php
class Atividade {
    public $idAtividade;
    public $nome;
    public $serie;
    public $repeticao;
    public $idEquipamento;
    
    public function getIdAtividade() {
        return $this->idAtividade;
    }
    
    public function setIdAtividade($idAtividade){ 
        $this->idAtividade = $idAtividade;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getSerie() {
        return $this->serie;
    }
    
    public function setSerie($serie) {
        $this->serie = $serie;
    }
    
    public function getRepeticao() {
        return $this->repeticao;
    }
    
    public function setRepeticao($repeticao){
        $this->serie = $repeticao;
    }
    
    public function getIdEquipamento(){
        return $this->idEquipamento;
    }
}