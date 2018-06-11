<?php
    //require_once('../includes/conexao.inc');
    //require_once('../classes/Aluno.php');
    require_once('../Model/AlunoDAO.php');    
    session_start();
    
    if(!isset($_REQUEST['opcao'])) {
        Header("location:../View/Aluno/ExibirAluno.php");
    }
    
    $opcao = (int)$_REQUEST['opcao'];

    //Lista todos os alunos
    if($opcao == 1){
        $alunoDAO = new AlunoDAO();

        $lista = $alunoDAO->getAlunos();

        $_SESSION['alunos'] = $lista;

        header("Location:../View/Aluno/ExibirAlunos.php");
    }  
    
    //Lista aluno por ID
    if($opcao == 2){
        $id = $_REQUEST["id"];                
        $alunoDAO = new AlunoDAO();

        $_SESSION['aluno'] =  $alunoDAO->getAlunoByID($id);

        header("Location:../View/Aluno/EditarAluno.php");
    }
    
    //Editar aluno
    if($opcao == 3){
        $aluno = new Aluno();
        $aluno->idAluno = (int) $_REQUEST["idAluno"];        
        $aluno->nome = $_REQUEST["nome"];
        $aluno->email = $_REQUEST["email"];
        $aluno->cpf = $_REQUEST["cpf"];
        if ($_REQUEST["operacao"] == "inativar") {
            date_default_timezone_set('America/Sao_Paulo');
            $aluno->dataInativacao = date('Y-m-d H:i:s');
        }        
        
        $alunoDAO = new AlunoDAO();

        $alunoDAO->editarAluno($aluno);
        
        header("Location:controlerAluno.php?opcao=1");
    }
    
    //Cadastrar aluno
    if ($opcao == 4){
        $aluno = new Aluno();           
        $aluno->nome = $_REQUEST["nome"];
        $aluno->email = $_REQUEST["email"];
        $aluno->cpf = $_REQUEST["cpf"];
        date_default_timezone_set('America/Sao_Paulo');
        $aluno->dataMatricula = date('Y-m-d H:i:s');
                
        $alunoDAO = new AlunoDAO();
        $alunoDAO->incluirAluno($aluno);
        
        echo $opcao;
        echo $aluno->nome;
        echo $aluno->email;
        echo $aluno->cpf;
        echo $aluno->dataMatricula;
        echo $alunoDAO->getAlunos();
        
        header("Location:controlerAluno.php?opcao=1");
    }