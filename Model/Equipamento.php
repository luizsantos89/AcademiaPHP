<?php

class Equipamento {
    public $idEquipamento;
    public $nome;
    public $descricao;
    public $dataCadastro;
    public $idFuncionario;
    public $numSerie;
    
    public function getIdEquipamento() {
        return $this->idEquipamento;
    }
    
    public function setIdEquipamento($idEquipamento){
        $this->idEquipamento = $idEquipamento;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getDescricao() {
        return $this->descricao;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function getDataCadastro() {
        return $this->dataCadastro;
    }
    
    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }
    
    public function getIdFuncionario() {
        return $this->idFuncionario;
    }
    
    public function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }
    
    public function getNumSerie() {
        return $this->numSerie;
    }
    
    public function setNumSerie($numSerie) {
        $this->numSerie = $numSerie;
    }
}