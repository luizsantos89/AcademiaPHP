<?php
    require('../includes/conexao.inc');
    require('Equipamento.php');

    class EquipamentoDAO{   
        private $con;

        function EquipamentoDAO(){
                $c = new Conexao();
                $this->con = $c->getConexao();
        }

        public function incluirEquipamento($equipamento){
            $sql = $this->con->prepare("insert into equipamento (nome, descricao, idFuncionario, numSerie, dataCadastro) values (:nome, :descricao, :idFuncionario, :numSerie, :dataCadastro)");

            $sql->bindValue(':nome', $equipamento->getNome());
            $sql->bindValue(':descricao', $equipamento->getDescricao());
            $sql->bindValue(':idFuncionario', $equipamento->getIdFuncionario());
            $sql->bindValue(':numSerie', $equipamento->getNumSerie());
            $sql->bindValue(':dataCadastro', $equipamento->getDataCadastro());
            $sql->execute();

        }
        
        public function getEquipamentos() {
            $query = "SELECT * FROM equipamento ORDER BY dataCadastro";
            $rs = $this->con->query($query);

            $lista = array();
        
            $equipamento = new Equipamento();
            
            while ($equipamento = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $equipamento;
            }

            return $lista;
        }
        
        public function getEquipamentoById($id) {
            $sql = $this->con->prepare("SELECT * FROM equipamento where idEquipamento = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            
            $equipamento = new Equipamento();
            $equipamento = $sql->fetch(PDO::FETCH_OBJ);

            return $equipamento;
        }
        
        public function editarEquipamento($equipamento){
            $sql = $this->con->prepare("UPDATE equipamento SET nome = :nome, descricao = :descricao, numSerie = :numSerie WHERE idEquipamento = :idEquipamento");
            $sql->bindValue(":idEquipamento",$equipamento->idEquipamento);
            $sql->bindValue(":nome",$equipamento->nome);
            $sql->bindValue(":descricao",$equipamento->descricao);
            $sql->bindValue(":numSerie",$equipamento->numSerie);
            $sql->execute();
        }
    }
