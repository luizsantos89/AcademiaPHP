<?php

    require_once('../Model/EquipamentoDAO.php');    
    session_start();
    
    if(!isset($_REQUEST['opcao'])) {
        Header("location:../View/Atividade/ManterAtividades.php");
    }
    
    $opcao = (int)$_REQUEST['opcao'];

    //Lista todos os Equipamentos
    if($opcao == 1){
        $equipamentoDAO = new EquipamentoDAO();

        $lista = $equipamentoDAO->getEquipamentos();

        if(isset($_SESSION['equipamentos'])) {
            unset($_SESSION['equipamentos']);
        }
        
        $_SESSION['equipamentos'] = $lista;

        header("Location:../View/Atividade/ExibirEquipamentos.php");
    }  
    
    //Lista equipamento por ID
    if($opcao == 2){
        $id = $_REQUEST["id"];                
        $equipamentoDAO = new EquipamentoDAO();
        echo $id;
        $_SESSION['equipamento'] =  $equipamentoDAO->getEquipamentoByID($id);

        header("Location:../View/Atividade/EditarEquipamento.php");
    }
    
    //Editar equipamento
    if($opcao == 3){
        $equipamento = new Equipamento();
        $equipamento->idEquipamento = (int) $_REQUEST["idEquipamento"];        
        $equipamento->nome = $_REQUEST["nome"];
        $equipamento->descricao = $_REQUEST["descricao"];
        $equipamento->numSerie = $_REQUEST["numSerie"];
        
        echo $equipamento->numSerie;
        
        $equipamentoDAO = new EquipamentoDAO();

        $equipamentoDAO->editarEquipamento($equipamento);
        
        header("Location:controlerEquipamento.php?opcao=1");
    }
    
    //Cadastrar aluno
    if ($opcao == 4){
        $equipamento = new Equipamento();           
        $equipamento->nome = $_REQUEST["nome"];
        $equipamento->descricao = $_REQUEST["descricao"];
        $equipamento->idFuncionario = $_REQUEST["idFuncionario"];
        $equipamento->numSerie = $_REQUEST["numSerie"];
        date_default_timezone_set('America/Sao_Paulo');
        $equipamento->dataCadastro = date('Y-m-d H:i:s');
                
        $equipamentoDAO = new EquipamentoDAO();
        $equipamentoDAO->incluirEquipamento($equipamento);
        
        echo $equipamento->nome;
        echo $equipamento->email;
        echo $equipamento->cpf;
        echo $equipamento->dataMatricula;
        echo $equipamentoDAO->getEquipamentos();
        
        header("Location:controlerEquipamento.php?opcao=1");
    }