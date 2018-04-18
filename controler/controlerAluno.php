<?php

    require_once('includes/conexao.inc');
    require_once('includes/AlunoDAO.php');
    require_once('classes/Aluno.php');
    
    $opcao = (int)$_REQUEST['opcao'];
    
    if(opcao==1){		
        $alunoDao = new AlunoDAO();

        $listaAlunos = $alunoDao->getAutores();

        session_start();

        $_SESSION['alunos'] = $listaAlunos;

        header("Location:exibirAlunos.php");
    }
