<?php
    require('../includes/conexao.inc');
    require('Atividade.php');
    require('AtividadeAluno.php');

    class AtividadeDAO{   
        private $con;

        function AtividadeDAO(){
                $c = new Conexao();
                $this->con = $c->getConexao();
        }

        public function incluirAtividade($atividade){
            $sql = $this->con->prepare("insert into atividade (nome, idEquipamento) values (:nome, :idEquipamento)");

            $sql->bindValue(':nome', $atividade->getNome());
            $sql->bindValue(':idEquipamento', $atividade->getIdEquipamento());
            $sql->execute();

        }
        
        public function getAtividades() {
            $query = "SELECT * FROM atividade";
            $rs = $this->con->query($query);

            $lista = array();
        
            $atividade = new Atividade();
            
            while ($atividade = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $atividade;
            }

            return $lista;
        }
        
        public function getAtividadeById($id) {
            $sql = $this->con->prepare("SELECT * FROM atividade where idAtividade = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            
            $atividade = new Atividade();
            $atividade = $sql->fetch(PDO::FETCH_OBJ);

            return $atividade;
        }
        
        public function editarAtividade($atividade){
            $sql = $this->con->prepare("UPDATE atividade SET nome = :nome, idEquipamento = :idEquipamento WHERE idAtividade = :idAtividade");
            $sql->bindValue(":idAtividade",$atividade->idAtividade);
            $sql->bindValue(":nome",$atividade->nome);
            $sql->bindValue(":idEquipamento",$atividade->idEquipamento);
            $sql->execute();
        }
        
        public function matriculaAluno($idAluno,$idAtividade,$serie,$repeticao){
            $sql = $this->con->prepare("INSERT INTO atividadealuno(idAluno,idAtividade,repeticoes,series,dataMatricula) VALUES (:idAluno, :idAtividade, :repeticoes, :series, :dataMatricula");
            $sql->bindValue(":idAtividade", $idAluno);
            $sql->bindValue(":idAluno", $idAtividade);
            $sql->bindValue(":series", $serie);
            $sql->bindValue("repeticoes", $repeticao);
            $sql->execute();
        }
        
        public function listaMatriculas() {
            $query = "SELECT al.nome as nomeAluno, a.nome as nomeAtividade, aa.series, aa.repeticoes FROM atividade AS a INNER JOIN atividadealuno AS aa ON a.idAtividade = aa.idAtividade INNER JOIN aluno AS al ON aa.idAluno = al.idAluno ";
            $rs = $this->con->query($query);

            $lista = array();
            
            $itemArray;
            
            while ($itemArray = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $itemArray;
            }

            return $lista;
        }
    }
