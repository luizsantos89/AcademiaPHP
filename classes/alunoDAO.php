<?php
    require('../includes/conexao.inc');
    require('Aluno.php');

    class AlunoDAO{   
        private $con;

        function AlunoDAO(){
                $c = new Conexao();
                $this->con = $c->getConexao();
        }

        public function incluirAluno($aluno){
            $sql = $this->con->prepare("insert into aluno (nome, email, cpf, dataMatricula) values (:nome, :email, :cpf, :dataMatricula)");
            
            $sql->bindValue(':nome', $aluno->getNome());
            $sql->bindValue(':email', $aluno->getEmail());
            $sql->bindValue(':cpf', $aluno->getCpf());
            $sql->bindValue(':dataMatricula', $aluno->getDataMatricula());
            $sql->execute();
        }
        
        public function getAlunos() {
            $query = "SELECT * FROM aluno";
            $rs = $this->con->query($query);

            $lista = array();
        
            $aluno = new Aluno();
            
            while ($aluno = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $aluno;
            }

            return $lista;
        }
        
        public function getAlunoByID($id) {
            $sql = $this->con->prepare("SELECT * FROM aluno where idAluno = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            
            $aluno = new Aluno();
            $aluno = $sql->fetch(PDO::FETCH_OBJ);

            return $aluno;
        }
        
        public function editarAluno($aluno){
            $sql = $this->con->prepare("UPDATE aluno SET nome = :nome, email = :email, cpf = :cpf, dataInativacao = :dataInativacao WHERE idAluno = :idAluno");
            $sql->bindValue(":idAluno",$aluno->getIdAluno());
            $sql->bindValue(":nome",$aluno->getNome());
            $sql->bindValue(":email",$aluno->getEmail());
            $sql->bindValue(":cpf",$aluno->getCpf());
            $sql->bindValue(":dataInativacao",$aluno->getDataInativacao());
            $sql->execute();
        }
    }
