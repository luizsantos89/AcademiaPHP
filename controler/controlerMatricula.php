<?php

    require_once('../Model/AtividadeAlunoDAO.php');    
    session_start();
    
    if(!isset($_REQUEST['opcao'])) {
        Header("location:../View/Atividade/ManterAtividades.php");
    }
    
    $opcao = (int)$_REQUEST['opcao'];
    
    //Matricula aluno
    if($opcao == 1) {
        $atividadeAluno = new AtividadeAluno();
        $atividadeAluno->idAtividade = $_REQUEST["idAtividade"];
        $atividadeAluno->idAluno = $_REQUEST["idAluno"];
        $atividadeAluno->series = $_REQUEST["series"];
        $atividadeAluno->repeticoes = $_REQUEST["repeticoes"];
        $atividadeAluno->dataMatricula = date('Y-m-d H:i:s');
        
        
        $atividadeAlunoDAO = new AtividadeAlunoDAO();
        $atividadeAlunoDAO->matricular($atividadeAluno);
        
        Header("location: controlerMatricula.php?opcao=2");
    }
    
    //Mostra todas as matrículas
    if($opcao == 2) {
        $atividadeAlunoDAO = new AtividadeAlunoDAO();

        $lista = $atividadeAlunoDAO->getMatriculas();

        if(isset($_SESSION['matriculas'])) {
            unset($_SESSION['matriculas']);
        }
        
        $_SESSION['matriculas'] = $lista;

        header("Location:../View/Atividade/ExibirMatriculas.php");
    }