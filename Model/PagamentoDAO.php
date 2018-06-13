<?php
    require('../includes/conexao.inc');
    require('Pagamento.php');

    class PagamentoDAO{   
        private $con;

        function PagamentoDAO(){
                $c = new Conexao();
                $this->con = $c->getConexao();
        }

        public function incluirPagamento($pagamento){
            $sql = $this->con->prepare("insert into pagamento (idAluno, valorPago, dataPagamento) values (:idAluno, :valorPago, :dataPagamento)");

            $sql->bindValue(':idAluno', $pagamento->getIdAluno());
            $sql->bindValue(':valorPago', $pagamento->getValorPagamento());
            $sql->bindValue(':dataPagamento', $pagamento->getDataPagamento());
            $sql->execute();

        }
        
        public function getPagamentos() {
            $query = "SELECT * FROM pagamento ORDER BY dataPagamento";
            $rs = $this->con->query($query);

            $lista = array();
        
            $pagamento = new Pagamento();
            
            while ($pagamento = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $pagamento;
            }

            return $lista;
        }
        
        public function getPagamentosByIdAluno($idAluno) {
            $sql = $this->con->prepare("SELECT * FROM pagamento where idAluno = :idAluno");
            $sql->bindValue(':idAluno', $idAluno);
            $sql->execute();

            $lista = array();
        
            $pagamento = new Pagamento();
            
            while ($pagamento = $sql->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $pagamento;
            }

            return $lista;
        }
        
        public function getPagamentoById($id){
            $sql = $this->con->prepare("SELECT * FROM pagamento where idPagamento = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            
            $pagamento = new Pagamento();
            $pagamento = $sql->fetch(PDO::FETCH_OBJ);

            return $pagamento;
        }
        
        public function editarPagamento($pagamento){
            $sql = $this->con->prepare("UPDATE pagamento SET idAluno = :idAluno, valorPago = :valorPago, dataPagamento = :dataPagamento WHERE idPagamento = :idPagamento");
            $sql->bindValue(":idAluno",$pagamento->idAluno);
            $sql->bindValue(":valorPago",$pagamento->valorPago);
            $sql->bindValue(":dataPagamento",$pagamento->dataPagamento);
            $sql->bindValue(":idPagamento",$pagamento->idPagamento);
            $sql->execute();
        }
    }
