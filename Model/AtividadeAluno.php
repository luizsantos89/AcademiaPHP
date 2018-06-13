<?php

class AtividadeAluno{
    public $idAtividade;
    public $idAluno;
    public $series;
    public $repeticoes;
    public $dataMatricula;
    
    public function getIdAtividade() {
        return $this->idAtividade;
    }
    
    public function setIdAtividade($idAtividade) {
        $this->idAtividade = $idAtividade;
    }
    
    public function getIdAluno() {
        return $this->idAluno;
    }
    
    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }
    
    public function getSeries() {
        return $this->series;
    }
    
    public function setSeries($series){
        $this->series = $series;
    }
    
    public function getRepeticoes(){
        return $this->repeticoes;
    }
    
    public function setRepeticoes($repeticoes) {
        $this->repeticoes = $repeticoes;
    }
    
    public function getDataMatricula() {
        return $this->dataMatricula;
    }
    
    public function setDataMatricula($dataMatricula) {
        $this->dataMatricula = $dataMatricula;
    }
}