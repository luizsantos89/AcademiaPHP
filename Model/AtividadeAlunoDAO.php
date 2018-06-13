<?php
    require('../includes/conexao.inc');
    require('Atividade.php');
    require('AtividadeAluno.php');

    class AtividadeAlunoDAO{   
        private $con;

        function AtividadeAlunoDAO(){
                $c = new Conexao();
                $this->con = $c->getConexao();
        }

        public function matricular($atividadeAluno){
            $sql = $this->con->prepare("insert into atividadealuno (idAtividade, idAluno, series, repeticoes, dataMatricula) values (:idAtividade, :idAluno, :series, :repeticoes, :dataMatricula)");
            $sql->bindValue(':idAtividade', $atividadeAluno->getIdAtividade());
            $sql->bindValue(':idAluno', $atividadeAluno->getIdAluno());
            $sql->bindValue(':series', $atividadeAluno->getSeries());
            $sql->bindValue(':repeticoes', $atividadeAluno->getRepeticoes());
            $sql->bindValue(':dataMatricula', $atividadeAluno->getDataMatricula());
            $sql->execute();
        }
        
        public function getMatriculas() {
            $query = "SELECT * FROM atividadealuno ORDER BY dataMatricula";
            $rs = $this->con->query($query);

            $lista = array();
        
            $atividadeAluno = new AtividadeAluno();
            
            while ($atividadeAluno = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $atividadeAluno;
            }

            return $lista;
        }
        
        public function getAtividadeById($atividadeAluno) {
            $sql = $this->con->prepare("SELECT * FROM atividadealuno where idAtividade = :idAtividade AND idAluno = :idAluno");
            $sql->bindValue(':idAtividade', $atividadeAluno->getIdAtividade());
            $sql->bindValue(':idAluno', $atividadeAluno->getIdAluno());
            $sql->execute();
            
            $atividadeAluno = new Atividade();
            $atividadeAluno = $sql->fetch(PDO::FETCH_OBJ);

            return $atividadeAluno;
        }
        
        public function editarAtividade($atividade){
            $sql = $this->con->prepare("UPDATE atividadealuno SET idAtividade = :idAtividade, idAluno = :idAluno, series = :series, repeticoes = :repeticoes");
            $sql->bindValue(':idAtividade', $atividadeAluno->getIdAtividade());
            $sql->bindValue(':idAluno', $atividadeAluno->getIdAluno());
            $sql->bindValue(':series', $atividadeAluno->getSeries());
            $sql->bindValue(':repeticoes', $atividadeAluno->getRepeticoes());
            $sql->execute();
        }
        
        public function matriculaAluno($idAluno,$idAtividade,$serie,$repeticao){
            $sql = $this->con->prepare("INSERT INTO atividadealuno(idAluno,idAtividade,repeticoes,series,dataMatricula) VALUES (:idAluno, :idAtividade, :repeticoes, :series, :dataMatricula");
            $sql->bindValue(":idAtividade", $idAluno);
            $sql->bindValue(":idAluno", $idAtividade);
            $sql->bindValue(":series", $serie);
            $sql->bindValue(":repeticoes", $repeticao);
            $sql->bindValue(":dataMatricula",date('Y-m-d H:i:s'));
            $sql->execute();
        }
    }
