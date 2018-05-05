<?php
    require('../includes/conexao.inc');
    require('Funcionario.php');

    class FuncionarioDAO{   
        private $con;

        function FuncionarioDAO(){
                $c = new Conexao();
                $this->con = $c->getConexao();
        }

        public function incluirFuncionario($funcionario){
            $sql = $this->con->prepare("insert into funcionario (nome, email, usuario, senha, cpf, dataAdmissao) values (:nome, :email, :usuario, :senha, :cpf, :dataAdmissao)");

            $sql->bindValue(':nome', $funcionario->getNome());
            $sql->bindValue(':email', $funcionario->getEmail());
            $sql->bindValue(':usuario', $funcionario->getUsuario());
            $sql->bindValue(':senha', $funcionario->getSenha());
            $sql->bindValue(':cpf', $funcionario->getCpf());
            $sql->bindValue(':dataAdmissao', $funcionario->getDataAdmissao());
            $sql->execute();

        }
        
        public function login($usuario, $senha){
            $sql = $this->con->prepare("SELECT * FROM funcionario WHERE usuario = :usuario AND senha = :senha");
            $sql.bindValue(":usuario",$usuario);
            $sql.bindValue(":senha",$senha);
            
            $sql.execute();
            
            return $sql->fetch(PDO::FETCH_OBJ);
        }
        
        public function getFuncionarios() {
            $query = "SELECT * FROM funcionario";
            $rs = $this->con->query($query);

            $lista = array();
        
            $funcionario = new Funcionario();
            
            while ($funcionario = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $funcionario;
            }

            return $lista;
        }
    }