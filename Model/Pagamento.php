<?php

class Pagamento{
    public $idPagamento;
    public $idAluno;
    public $valorPago;
    public $dataPagamento;
    
    public function setIdPagamento($idPagamento){
        $this->idPagamento = $idPagamento;
    }
    
    public function getIdPagamento() {
        return $this->idPagamento;
    }
    
    public function setIdAluno($idAluno){
        $this->idAluno = $idAluno;
    }
    
    public function getIdAluno() {
        return $this->idAluno;
    }
    
    public function setValorPagamento($valorPagamento) {
        $this->valorPagamento = $valorPagamento;
    }
    
    public function getValorPagamento() {
        return $this->valorPagamento;
    }
    
    public function setDataPagamento($dataPagamento) {
        $this->dataPagamento = $dataPagamento;
    }
    
    public function getDataPagamento() {
        return $this->dataPagamento;
    }
}
?>