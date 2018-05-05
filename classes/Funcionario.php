<?php

    class Funcionario {
        public $idFuncionario;
        public $nome;
        public $email;
        public $usuario;
        public $cpf;
        public $dataAdmissao;
        public $dataDemissao;
        
        public function setIdFuncionario($idFuncionario) {
            $this->idFuncionario = $idFuncionario;
        }
        public function getIdFuncionario(){
            return $this->idFuncionario;
        }
        
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        
        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        
        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }
        public function getCpf(){
            return $this->cpf;
        }
        
        public function setDataAdmissao($dataAdmissao) {
            $this->dataAdmissao = $dataAdmissao;
        }
        public function getDataAdmissao(){
            return $this->dataAdmissao;
        }
        
        public function setDataDemissao($dataDemissao) {
            $this->dataDemissao = $dataDemissao;
        }
        public function getDataDemissao(){
            return $this->dataDemissao;
        }
    }