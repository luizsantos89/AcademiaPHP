<?php
    //require_once('../includes/conexao.inc');
    //require_once('../classes/Funcionario.php');
    require_once('../classes/FuncionarioDAO.php');

    $opcao = (int)$_REQUEST['opcao'];

    //Lista todos os funcionarios
    if($opcao == 1){
        $funcionarioDAO = new FuncionarioDAO();

        $lista = $funcionarioDAO->getFuncionarios();

        session_start();

        $_SESSION['funcionarios'] = $lista;

        header("Location:../exibirFuncionarios.php");
    }