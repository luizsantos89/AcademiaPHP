<?php

class Aluno {
    public $idAluno;
    public $nome;
    public $email;
    public $cpf;
    public $dataMatricula;
    public $dataInativacao;
    public $funcionarioCadastro;
    public $funcionarioInativacao;
    
    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }
    public function getIdAluno(){
        return $this->idAluno;
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
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }

    public function setDataMatricula($dataMatricula) {
        $this->dataMatricula = $dataMatricula;
    }
    
    public function getDataMatricula(){
        return $this->dataMatricula;
    }

    public function setDataInativacao($dataInativacao) {
        $this->dataInativacao = $dataInativacao;
    }
        
    public function getDataInativacao(){
        return $this->dataInativacao;
    }
    
    public function getFuncionarioCadastro(){
        return $this->funcionarioCadastro;
    }

    public function setFuncionarioCadastro($funcionarioCadastro) {
        $this->funcionarioCadastro = $funcionarioCadastro;
    }
    
    public function getFuncionarioInativacao(){
        return $this->funcionarioInativacao;
    }

    public function setFuncionarioInativacao($funcionarioInativacao) {
        $this->funcionarioInativacao = $funcionarioInativacao;
    }
}